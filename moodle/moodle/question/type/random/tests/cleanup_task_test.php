<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Tests of the scheduled task for cleaning up random questions.
 *
 * @package    qtype_random
 * @copyright  2018 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/quiz/locallib.php');


/**
 * Tests of the scheduled task for cleaning up random questions.
 *
 * @copyright  2018 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_random_cleanup_task_testcase extends advanced_testcase {

    public function test_cleanup_task_removes_unused_question() {
        global $DB;
        $this->resetAfterTest();
        $this->setAdminUser();

        $generator = $this->getDataGenerator();
        $questiongenerator = $generator->get_plugin_generator('core_question');
        $quizgenerator = $generator->get_plugin_generator('mod_quiz');
        $cat = $questiongenerator->create_question_category();
        $quiz = $quizgenerator->create_instance(['course' => SITEID]);

        // Add two random questions.
        quiz_add_random_questions($quiz, 0, $cat->id, 2, false);
        $quizslots = $DB->get_records('quiz_slots', ['quizid' => $quiz->id],
                'slot', 'slot, id, questionid');

        // Now remove the second from the quiz. (Do it manually,
        // because the API cleans up the random question, but we are trying to
        // create an orphaned random question.)
        $DB->delete_records('quiz_slots', array('id' => $quizslots[2]->id));

        // Run the scheduled task.
        $task = new \qtype_random\task\remove_unused_questions();
        $this->expectOutputString("Cleaned up 1 unused random questions.\n");
        $task->execute();

        // Verify.
        $this->assertTrue($DB->record_exists('question', ['id' => $quizslots[1]->questionid]));
        $this->assertFalse($DB->record_exists('question', ['id' => $quizslots[2]->questionid]));
    }

    /**
     * Test that remove_unused_questions aborts when there is a course restore in progress.
     */
    public function test_cleanup_task_checks_for_active_restores() {
        $this->resetAfterTest();

        // Get ready the tasks.
        $cleanuptask = new \qtype_random\task\remove_unused_questions();
        $restoretask = new \core\task\asynchronous_restore_task();
        \core\task\manager::queue_adhoc_task($restoretask);
        $copytask = new \core\task\asynchronous_copy_task();
        \core\task\manager::queue_adhoc_task($copytask);

        // Start the first adhoc task. This might be either restore or copy adhoc task.
        $task1 = \core\task\manager::get_next_adhoc_task(time());
        \core\task\manager::adhoc_task_starting($task1);
        $cleanuptask->execute();

        // Complete the first task and start the second one.
        \core\task\manager::adhoc_task_complete($task1);
        $task2 = \core\task\manager::get_next_adhoc_task(time());
        \core\task\manager::adhoc_task_starting($task2);
        $cleanuptask->execute();

        // Complete the second adhoc task.
        \core\task\manager::adhoc_task_complete($task2);
        $cleanuptask->execute();

        $aborted = 'Detected running async restore. Aborting the task.';
        $completed = 'Cleaned up 0 unused random questions.';
        $this->expectOutputRegex("/.*$aborted.*\s.*$aborted.*\s.*$completed.*/");
    }
}

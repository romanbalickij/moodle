<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_dynamicrule', language 'uk', version '3.11'.
 *
 * @package     enrol_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Дія';
$string['actiondisableenrolment'] = 'Вимкнути реєстрацію';
$string['actiondisableenrolmentremoveroles'] = 'Вимкніть реєстрацію та видаліть ролі';
$string['actionunenrol'] = 'Скасувати реєстрацію користувача з курсу';
$string['duration'] = 'Тривалість';
$string['dynamicrule:config'] = 'Налаштувати екземпляри реєстрації динамічних правил';
$string['dynamicrule:enrol'] = 'Зареєструвати користувача за допомогою дії реєстрації курсу';
$string['dynamicrule:unenrol'] = 'Скасувати реєстрацію користувача за допомогою дії курсу скасування реєстрації або вручну';
$string['enddate'] = 'Дата закінчення';
$string['errorinvalidaction'] = 'Недійсна дія';
$string['errorinvalidcoursetoenrol'] = 'Недійсний курс для реєстрації';
$string['errorinvalidcoursetounenrol'] = 'Недійсний курс для скасування реєстрації';
$string['errorinvaliddurationandenddate'] = 'Ви повинні вибрати дату завершення реєстрації АБО тривалість, а не обидва.';
$string['errorinvalidrole'] = 'Недійсна роль';
$string['group'] = 'Назва групи';
$string['group_help'] = 'Назва групи, до якої будуть додані користувачі.';
$string['ingroup'] = 'в групі';
$string['noavailablecoursesenrol'] = 'Немає курсів, до яких можна зареєструвати користувачів за допомогою методу реєстрації динамічних правил.';
$string['noavailablecoursesunenrol'] = 'Немає курсів, де можна скасувати реєстрацію користувачів за допомогою методу реєстрації динамічних правил.';
$string['outcomecourseenrol'] = 'Зареєструвати користувачів на курсі';
$string['outcomecourseenroldescription'] = 'Зареєструйтеся на курс \'{$a->coursename}\'<br />
Роль: {$a->role<br />
Група: {$a->groupname}';
$string['outcomecourseenroldescriptionwithduration'] = 'Зареєструйтеся на курс \'{$a->coursename}\'<br />
Роль: {$a->role<br />
Група: {$a->groupname<br />
Тривалість: {$a->duration} {$a->durationtype}';
$string['outcomecourseenroldescriptionwithenddate'] = 'Зареєструйтеся на курс \'{$a->coursename}\'<br />
Роль: {$a->role<br />
Група: {$a->groupname<br />
Дата закінчення: {$a->enddate}';
$string['outcomecourseunenrol'] = 'Скасувати реєстрацію користувачів із курсу';
$string['outcomecourseunenroldescription'] = 'Скасувати реєстрацію на курсі \'{$a->coursename}\'<br />
Дія: {$a->action}';
$string['outcomecourseunenroldescriptionwithmethod'] = 'Скасувати реєстрацію на курсі \'{$a->coursename}\'<br />
Методи реєстрації: {$a->enrol<br />
Дія: {$a->action}';
$string['pluginname'] = 'Динамічні правила';
$string['privacy:metadata'] = 'Плагін Dynamic rules не зберігає жодних персональних даних про жодного користувача.';
$string['selectcourse'] = 'Виберіть курс';
$string['userwithoutcapability'] = 'Ви повинні мати можливість скасувати реєстрацію методів \'{$a}\' у вибраному курсі';

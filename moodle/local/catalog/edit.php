<?php

use local_catalog\form\edit;


require_once(__DIR__ . '/../../config.php');
require_once($CFG->dirroot. '/local/catalog/classes/form/edit.php');

global $DB;

require_login();
$context = context_system::instance();
require_capability('local/catalog:manageproducts', $context);


$PAGE->set_url(new moodle_url('/local/catalog/edit.php'));
$PAGE->set_context($context);
$PAGE->set_title('Product Edit');

$mform = new edit();


$id = optional_param('productid', null, PARAM_INT);


if($mform->is_cancelled()) {

    redirect($CFG->wwwroot . '/local/catalog/index.php', get_string('cancelled_form', 'local_catalog'));

}else if($fromform = $mform->get_data()) {

    $now = new DateTime("now", core_date::get_server_timezone_object());

    $date = $now->format('Y-m-d');

    $object  = new stdClass();
    $object ->id           = $fromform->id;
    $object ->title        = $fromform->title;
    $object ->description  = $fromform->description;
    $object ->timestart    = $date;
    $object ->timeend      = $date;
    $object ->timecreated  = $date;
    $object ->timemodified = $date;

    if($fromform->id) {
        $DB->update_record('local_catalog', $object);
        redirect($CFG->wwwroot . '/local/catalog/index.php',  get_string('updated_form', 'local_catalog',  ['title' => $fromform->title]));
    }

       $DB->insert_record('local_catalog', $object);
       redirect($CFG->wwwroot . '/local/catalog/index.php', get_string('created_form', 'local_catalog',  ['title' => $fromform->title]));

}

if ($id) {

    $product = $DB->get_record('local_catalog', ['id' => $id]);
    if (!$product) {
        throw new invalid_parameter_exception('Product not found');
    }
    $mform->set_data($product);
}

echo $OUTPUT->header();

$mform->display();

echo $OUTPUT->footer();
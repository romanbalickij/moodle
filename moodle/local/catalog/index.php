<?php

require_once(__DIR__ . '/../../config.php');

global $DB;

require_login();
$context = \context_system::instance();

require_capability('local/catalog:manageproducts', $context);



$PAGE->set_url(new moodle_url('/local/catalog/index.php'));
$PAGE->set_context($context);
$PAGE->set_title('Products');
$PAGE->set_heading(get_string('manage_products', 'local_catalog'));


//$PAGE->requires->css('/local/catalog/styles.css');

$products = $DB->get_records('local_catalog');


echo $OUTPUT->header();

$templatecontext = (object)[
    'products'   => array_values($products),
    'editurl'    => new moodle_url('/local/catalog/edit.php'),
    'deleteurl'  => new moodle_url('/local/catalog/delete.php'),
];

echo $OUTPUT->render_from_template('local_catalog/manage', $templatecontext);

echo $OUTPUT->footer();
<?php


require_once(__DIR__ . '/../../config.php');

global $DB;



$id = optional_param('productid', null, PARAM_INT);


if ($id) {

    $product = $DB->get_record('local_catalog', ['id' => $id]);
    if (!$product) {
        throw new invalid_parameter_exception('Product not found');
    }

    $transaction    = $DB->start_delegated_transaction();
    $deletedProduct = $DB->delete_records('local_catalog', ['id' => $id]);

    if ($deletedProduct) {
        $DB->commit_delegated_transaction($transaction);
    }

    redirect($CFG->wwwroot . '/local/catalog/index.php', get_string('delete_form', 'local_catalog',  ['title' => $product->title]));


}
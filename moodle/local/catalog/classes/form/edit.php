<?php


namespace local_catalog\form;
use moodleform;

require_once("$CFG->libdir/formslib.php");


class edit extends moodleform {
    //Add elements to form
    public function definition() {
        global $DB;

        $product = $DB->get_record('local_catalog', ['id' => $_GET['productid']]);

        $mform   = $this->_form;

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->setDefault('id', $product->id);

        $mform->addElement('text', 'title', get_string('product_title', 'local_catalog'));
        $mform->addRule('title', null, 'required', null, 'client');
        $mform->setType('title', PARAM_TEXT);

        $mform->addElement('text', 'description',get_string('product_description', 'local_catalog'));
        $mform->setType('description', PARAM_TEXT);
        $mform->addRule('description', null, 'required', null, 'client');


        if($product) {
            $mform->setDefault('title',       $product->title);
            $mform->setDefault('description', $product->description );
        }


        $this->add_action_buttons();
    }

    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}
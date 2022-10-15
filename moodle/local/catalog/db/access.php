<?php
$capabilities = [
    'local/catalog:manageproducts' => [
        'riskbitmask'  => RISK_SPAM | RISK_PERSONAL | RISK_XSS | RISK_CONFIG,
        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => [
            'manager' => CAP_ALLOW,
//            'user' => CAP_ALLOW,
//            'editingteacher' => CAP_ALLOW,
//            'teacher' => CAP_ALLOW,
//            'frontpage' => CAP_ALLOW,
//
//            'guest' => CAP_ALLOW,
//            'student' => CAP_ALLOW,
//            'coursecreator' => CAP_ALLOW,
        ],
    ],
];
<?php
return [
    'service_manager'    => [
        'factories' => [
            'MobileDetect' => 'Neilime\MobileDetect\Factory\MobileDetectFactory',
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'MobileDetect' => 'Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPluginFactory',
        ],
    ],
    'view_helpers'       => [
        'factories' => [
            'MobileDetect' => 'Neilime\MobileDetect\View\Helper\MobileDetectHelperFactory',
        ],
    ],
];
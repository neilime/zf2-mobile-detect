<?php
return [
    'service_manager'    => [
        'factories' => [
            'mobileDetect' => 'Neilime\MobileDetect\Factory\MobileDetectFactory',
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'mobileDetect' => 'Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPluginFactory',
        ],
    ],
    'view_helpers'       => [
        'factories' => [
            'mobileDetect' => 'Neilime\MobileDetect\View\Helper\MobileDetectHelperFactory',
        ],
    ],
    'controllers'        => [
        'abstract_factories' => [
            \Zend\Mvc\Controller\LazyControllerAbstractFactory::class,
        ],
    ],
];
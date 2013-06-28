<?php
return array(
	'service_manager' => array(
        'factories' => array(
            'MobileDetect' => 'Neilime\MobileDetect\Factory\MobileDetectFactory'
        )
    ),
	'controller_plugins' => array(
    	'invokables' => array(
    		'MobileDetect' => 'Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPlugin'
    	)
    ),
	'view_helpers' => array(
		'invokables' => array(
			'MobileDetect' => 'Neilime\MobileDetect\View\Helper\MobileDetectHelper'
		)
	)
);
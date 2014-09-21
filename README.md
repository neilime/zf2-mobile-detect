ZF2 Mobile-Detect, v1.0
=======

[![Build Status](https://travis-ci.org/neilime/zf2-mobile-detect.png?branch=master)](https://travis-ci.org/neilime/zf2-mobile-detect)
[![Latest Stable Version](https://poser.pugx.org/neilime/zf2-mobile-detect/v/stable.png)](https://packagist.org/packages/neilime/zf2-mobile-detect)
[![Total Downloads](https://poser.pugx.org/neilime/zf2-mobile-detect/downloads.png)](https://packagist.org/packages/neilime/zf2-mobile-detect)
![Code coverage](https://raw.github.com/zf2-boiler-app/app-test/master/ressources/100%25-code-coverage.png "100% code coverage")

NOTE : If you want to contribute don't hesitate, I'll review any PR.

<a href='https://pledgie.com/campaigns/26799'><img alt='Click here to lend your support to: ZF2 Mobile-Detect and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/26799.png?skin_name=chrome' border='0' ></a>

Introduction
------------

ZF2 Mobile-Detect is a Zend Framework 2 module that provides [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) features.


Requirements
------------

* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)
* [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) (latest master).

Installation
------------

### Main Setup

#### By cloning project

1. Install [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) by cloning it into `./vendor/`.
2. Clone this project into your `./vendor/` directory.

#### With composer

1. Add this project in your composer.json:

    ```json
    "require": {
        "neilime/zf2-mobile-detect": "dev-master"
    }
    ```

2. Now tell composer to download __ZF2 Mobile-Detect__ by running the command:

    ```bash
    $ php composer.phar update
    ```

#### Post installation

1. Enabling it in your `application.config.php`file.

    ```php
    <?php
    return array(
        'modules' => array(
            // ...
            'Neilime\MobileDetect',
        ),
        // ...
    );
    ```
    
# How to use _ZF2 Mobile-Detect_

__ZF2 Mobile-Detect__ module provides Mobile_Detect class as a service, helper for views and plugin controllers

1. Call Mobile-Detect with the service manager

	```php
	
	/* @var $serviceManager \Zend\ServiceManager\ServiceLocatorInterface */	
	
   	$mobileDetect = $serviceManager->get('MobileDetect'); //Retrieve "\Mobile_Detect" object
   	$mobileDetect->isMobile();
   	```

2. Call Mobile-Detect in a controller

 	```php
   	$mobileDetect = $this->mobileDetect(); //Retrieve "\Mobile_Detect" object
   	$mobileDetect->isMobile();
   	
   	$mobileDetect = $this->mobileDetect(
   		\Zend\Http\Headers::fromString('User-Agent: Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19')
   	); //Retrieve "\Mobile_Detect" object with arbitrary http headers
   	$mobileDetect->isAndroidOS();   	
    ```
    
3. Call Mobile-Detect in a view

 	```php
   	$mobileDetect = $this->mobileDetect(); //Retrieve "\Mobile_Detect" object
   	$mobileDetect->isMobile();
   	   	
   	$mobileDetect = $this->mobileDetect(
   		\Zend\Http\Headers::fromString('User-Agent: Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19')
   	); //Retrieve "\Mobile_Detect" object with arbitrary http headers
   	$mobileDetect->isAndroidOS();
   	```

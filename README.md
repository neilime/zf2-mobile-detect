ZF2 Mobile-Detect, v1.0
=======

[![Build Status](https://travis-ci.org/neilime/zf2-mobile-detect.png?branch=master)](https://travis-ci.org/neilime/zf2-mobile-detect)
![Code coverage](https://raw.github.com/zf2-boiler-app/app-test/master/ressources/100%25-code-coverage.png "100% code coverage")

NOTE : If you want to contribute don't hesitate, I'll review any PR.

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
            'MobileDetect',
        ),
        // ...
    );
    ```
    
# How to use _ZF2 Mobile-Detect_

__ZF2 Mobile-Detect__ module provides helper for views and plugin controllers

1. Call Mobile-Detect in a controller

 	```php
   	$mobileDetect = $this->mobileDetect(); //Retrieve "\Mobile_Detect" object
   	$mobileDetect->->isMobile();
    ```
    
2. Call Mobile-Detect in a view

 	```php
   	$mobileDetect = $this->mobileDetect(); //Retrieve "\Mobile_Detect" object
   	$mobileDetect->->isMobile();
    ```

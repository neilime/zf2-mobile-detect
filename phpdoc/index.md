# API Documentation

## Table of Contents

* [MobileDetectFactory](#mobiledetectfactory)
    * [__invoke](#__invoke)
* [MobileDetectHelper](#mobiledetecthelper)
    * [__construct](#__construct)
    * [__invoke](#__invoke-1)
* [MobileDetectHelperFactory](#mobiledetecthelperfactory)
    * [__invoke](#__invoke-2)
* [MobileDetectPlugin](#mobiledetectplugin)
    * [__construct](#__construct-1)
    * [__invoke](#__invoke-3)
* [MobileDetectPluginFactory](#mobiledetectpluginfactory)
    * [__invoke](#__invoke-4)

## MobileDetectFactory

Class MobileDetectFactory



* Full name: \Neilime\MobileDetect\Factory\MobileDetectFactory
* This class implements: \Zend\ServiceManager\FActory\FactoryInterface


### __invoke



```php
MobileDetectFactory::__invoke( \Interop\Container\ContainerInterface $serviceLocator, string $requestedName, array|null $options = null ): \Mobile_Detect
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Interop\Container\ContainerInterface** |  |
| `$requestedName` | **string** |  |
| `$options` | **array&#124;null** |  |




---

## MobileDetectHelper





* Full name: \Neilime\MobileDetect\View\Helper\MobileDetectHelper
* Parent class: 


### __construct



```php
MobileDetectHelper::__construct( \Mobile_Detect $mobileDetect )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mobileDetect` | **\Mobile_Detect** |  |




---

### __invoke

Retrieve Mobile-detect service

```php
MobileDetectHelper::__invoke( \Zend\Http\Headers $oHeaders = null ): \Mobile_Detect
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oHeaders` | **\Zend\Http\Headers** |  |




---

## MobileDetectHelperFactory





* Full name: \Neilime\MobileDetect\View\Helper\MobileDetectHelperFactory
* This class implements: \Zend\ServiceManager\Factory\FactoryInterface


### __invoke



```php
MobileDetectHelperFactory::__invoke( \Interop\Container\ContainerInterface $serviceLocator,  $requestedName, array $options = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Interop\Container\ContainerInterface** |  |
| `$requestedName` | **** |  |
| `$options` | **array** |  |




---

## MobileDetectPlugin





* Full name: \Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPlugin
* Parent class: 


### __construct



```php
MobileDetectPlugin::__construct( \Mobile_Detect $mobileDetect )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mobileDetect` | **\Mobile_Detect** |  |




---

### __invoke

Retrieve Mobile-detect service

```php
MobileDetectPlugin::__invoke( \Zend\Http\Headers $oHeaders = null ): \Mobile_Detect
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oHeaders` | **\Zend\Http\Headers** |  |




---

## MobileDetectPluginFactory





* Full name: \Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPluginFactory
* This class implements: \Zend\ServiceManager\Factory\FactoryInterface


### __invoke



```php
MobileDetectPluginFactory::__invoke( \Interop\Container\ContainerInterface $serviceManager,  $requestedName, array $options = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceManager` | **\Interop\Container\ContainerInterface** |  |
| `$requestedName` | **** |  |
| `$options` | **array** |  |




---



--------
> This document was automatically generated from source code comments on 2017-02-18 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)

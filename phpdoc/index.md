# API Documentation

## Table of Contents

* [MobileDetectFactory](#mobiledetectfactory)
    * [__invoke](#__invoke)
    * [createService](#createservice)
* [MobileDetectHelper](#mobiledetecthelper)
    * [__construct](#__construct)
    * [__invoke](#__invoke-1)
* [MobileDetectHelperFactory](#mobiledetecthelperfactory)
    * [__invoke](#__invoke-2)
    * [createService](#createservice-1)
* [MobileDetectPlugin](#mobiledetectplugin)
    * [__construct](#__construct-1)
    * [__invoke](#__invoke-3)
* [MobileDetectPluginFactory](#mobiledetectpluginfactory)
    * [__invoke](#__invoke-4)
    * [createService](#createservice-2)

## MobileDetectFactory

Class MobileDetectFactory



* Full name: \Neilime\MobileDetect\Factory\MobileDetectFactory
* This class implements: \Zend\ServiceManager\FactoryInterface


### __invoke

{@inheritDoc}

```php
MobileDetectFactory::__invoke( \Interop\Container\ContainerInterface $container,  $requestedName, array $options = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Interop\Container\ContainerInterface** |  |
| `$requestedName` | **** |  |
| `$options` | **array** |  |




---

### createService

{@inheritDoc}

```php
MobileDetectFactory::createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




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
* This class implements: \Zend\ServiceManager\FactoryInterface


### __invoke

{@inheritDoc}

```php
MobileDetectHelperFactory::__invoke( \Interop\Container\ContainerInterface $container,  $requestedName, array $options = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Interop\Container\ContainerInterface** |  |
| `$requestedName` | **** |  |
| `$options` | **array** |  |




---

### createService

{@inheritDoc}

```php
MobileDetectHelperFactory::createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




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
* This class implements: \Zend\ServiceManager\FactoryInterface


### __invoke

{@inheritDoc}

```php
MobileDetectPluginFactory::__invoke( \Interop\Container\ContainerInterface $container,  $requestedName, array $options = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Interop\Container\ContainerInterface** |  |
| `$requestedName` | **** |  |
| `$options` | **array** |  |




---

### createService

{@inheritDoc}

```php
MobileDetectPluginFactory::createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




---



--------
> This document was automatically generated from source code comments on 2017-08-19 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)

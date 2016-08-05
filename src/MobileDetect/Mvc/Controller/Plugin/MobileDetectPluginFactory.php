<?php
namespace Neilime\MobileDetect\Mvc\Controller\Plugin;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class MobileDetectPluginFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $pluginManager)
    {
        $serviceManager = $pluginManager->getServiceLocator();

        return new MobileDetectPlugin($serviceManager->get('MobileDetect'));
    }
}
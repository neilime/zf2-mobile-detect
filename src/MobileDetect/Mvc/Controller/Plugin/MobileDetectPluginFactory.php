<?php
namespace Neilime\MobileDetect\Mvc\Controller\Plugin;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MobileDetectPluginFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $serviceManager, $requestedName, array $options = null)
    {
        return new MobileDetectPlugin($serviceManager->get('mobileDetect'));
    }

    public function createService(gtiServiceLocatorInterface $serviceLocator)
    {
        return $this->__invoke($serviceLocator);
    }
}

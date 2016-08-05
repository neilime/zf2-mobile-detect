<?php
namespace Neilime\MobileDetect\View\Helper;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class MobileDetectHelperFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $viewManager)
    {
        $serviceManager = $viewManager->getServiceLocator();

        return new MobileDetectHelper($serviceManager->get('MobileDetect'));
    }
}
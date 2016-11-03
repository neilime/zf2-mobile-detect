<?php
namespace Neilime\MobileDetect\View\Helper;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class MobileDetectHelperFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $serviceLocator, $requestedName, array $options = null)
    {
        return new MobileDetectHelper($serviceLocator->get('mobileDetect'));
    }
}
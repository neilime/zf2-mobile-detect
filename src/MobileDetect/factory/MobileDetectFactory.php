<?php
namespace Neilime\MobileDetect\Factory;

use Zend\ServiceManager\FactoryInterface;

class MobileDetectFactory implements FactoryInterface
{
    /**
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     *
     * @param \Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator
     *
     * @return \Mobile_Detect
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator)
    {
        return new \Mobile_Detect();
    }
}
<?php
namespace Neilime\MobileDetect\View\Helper;
class MobileDetectHelper extends \Zend\View\Helper\AbstractHelper implements \Zend\ServiceManager\ServiceLocatorAwareInterface{
	/**
     * @var \Zend\ServiceManager\ServiceLocatorInterface
     */
    protected $serviceLocator = null;

    /**
     * Retrieve Mobile-detect service
     * @return \Mobile_Detect
     */
    public function __invoke(){
    	return $this->getServiceLocator()->getServiceLocator()->get('MobileDetect');
    }

    /**
     * Set service locator
     * @see \Zend\ServiceManager\ServiceLocatorAwareInterface::setServiceLocator()
     * @param \Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator
     * @return \Neilime\MobileDetect\View\Helper\MobileDetectHelper
     */
    public function setServiceLocator(\Zend\ServiceManager\ServiceLocatorInterface $oServiceLocator){
        $this->serviceLocator = $oServiceLocator;
        return $this;
    }

    /**
     * Get service locator
     * @see \Zend\ServiceManager\ServiceLocatorAwareInterface::getServiceLocator()
	 * @throws \LogicException
     * @return \Zend\ServiceManager\ServiceLocatorInterface
     */
    public function getServiceLocator(){
        if($this->serviceLocator instanceof \Zend\ServiceManager\ServiceLocatorInterface)return $this->serviceLocator;
        throw new \LogicException('Service locator is undefined for MobileDetect view helper');
    }

}
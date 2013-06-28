<?php
namespace Neilime\MobileDetect\View\Helper;
class MobileDetectHelper extends \Zend\View\Helper\AbstractHelper implements \Zend\ServiceManager\ServiceLocatorAwareInterface{
	/**
     * @var \Zend\ServiceManager\ServiceLocatorInterface
     */
    protected $serviceLocator = null;

    /**
     * Retrieve Mobile-detect service
	 * @param \Zend\Http\Headers $oHeaders
     * @return \Mobile_Detect
     */
    public function __invoke(\Zend\Http\Headers $oHeaders = null){
    	$oMobileDetect = $this->getServiceLocator()->getServiceLocator()->get('MobileDetect');
    	if($oHeaders){
    		$oMobileDetect->setHttpHeaders($oHeaders->toArray());
    		$oMobileDetect->setUserAgent($oHeaders->get('user-agent')->getFieldValue());
    	}
    	return $oMobileDetect;
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
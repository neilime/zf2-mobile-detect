<?php
namespace Neilime\MobileDetect\Mvc\Controller\Plugin;
class MobileDetectPlugin extends \Zend\Mvc\Controller\Plugin\AbstractPlugin{

	/**
	 * Retrieve Mobile-detect service
	 * @param \Zend\Http\Headers $oHeaders
	 * @throws \LogicException
	 * @return \Mobile_Detect
	 */
	public function __invoke(\Zend\Http\Headers $oHeaders = null){
		$oController = $this->getController();
		if($oController){
			$oMobileDetect = $oController->getServiceLocator()->get('MobileDetect');
			if($oHeaders){
				$oMobileDetect->setHttpHeaders($oHeaders->toArray());
				$oMobileDetect->setUserAgent($oHeaders->get('user-agent')->getFieldValue());
			}
			return $oMobileDetect;
		}
		throw new \LogicException('Controller is undefined for MobileDetect controller plugin');
	}
}
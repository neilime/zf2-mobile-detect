<?php
namespace Neilime\MobileDetect\Mvc\Controller\Plugin;
class MobileDetectPlugin extends \Zend\Mvc\Controller\Plugin\AbstractPlugin{

	/**
	 * Retrieve Mobile-detect service
	 * @throws \LogicException
	 * @return \Mobile_Detect
	 */
	public function __invoke(){
		$oController = $this->getController();
		if($oController)return $oController->getServiceLocator()->get('MobileDetect');
		throw new \LogicException('Controller is undefined for MobileDetect controller plugin');
	}
}
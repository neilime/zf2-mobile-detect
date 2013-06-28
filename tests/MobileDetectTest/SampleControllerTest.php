<?php
namespace Neilime\MobileDetectTest\Mvc\Controller;
class SampleControllerTest extends \Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase{
	/**
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	public function setUp(){
		$this->setApplicationConfig(\Neilime\MobileDetectTest\Bootstrap::getConfig());
		parent::setUp();
	}

	/**
	 * @expectedException LogicException
	 */
	public function testMobileDetectControllerPluginWithServiceLocatorUndefined(){
		$this->assertInstanceOf('\Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPlugin',$oMobileDetect = $this->getApplicationServiceLocator()->get('ControllerPluginManager')->get('MobileDetect'));
		$oMobileDetect->__invoke();
	}

	public function testMobileDetectControllerPlugin(){
		$this->assertInstanceOf('\Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPlugin',$oMobileDetect = $this->getApplicationServiceLocator()->get('ControllerPluginManager')->get('MobileDetect'));
		$oSampleController = new \Neilime\MobileDetectTest\Mvc\Controller\SampleController();
		$oSampleController->setServiceLocator(\Neilime\MobileDetectTest\Bootstrap::getServiceManager());
		$oMobileDetect->setController($oSampleController);
		$this->assertInstanceOf('\Mobile_Detect',$oMobileDetect->__invoke());
	}

	/**
	 * @expectedException LogicException
	 */
	public function testMobileDetectViewHelperWithServiceLocatorUndefined(){
		$oMobileDetect = new \Neilime\MobileDetect\View\Helper\MobileDetectHelper();
		$oMobileDetect->__invoke();
	}

	public function testMobileDetectViewHelper(){
		$this->assertInstanceOf('\Neilime\MobileDetect\View\Helper\MobileDetectHelper',$oMobileDetect = $this->getApplicationServiceLocator()->get('ViewHelperManager')->get('MobileDetect'));
		$this->assertInstanceOf('\Mobile_Detect',$oMobileDetect->__invoke());
	}
}
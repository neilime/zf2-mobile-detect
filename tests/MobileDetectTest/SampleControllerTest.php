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
		$this->assertInstanceOf('\Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPlugin',$oMobileDetectPlugin = $this->getApplicationServiceLocator()->get('ControllerPluginManager')->get('MobileDetect'));
		$oMobileDetectPlugin->__invoke();
	}

	public function testMobileDetectControllerPlugin(){
		$this->assertInstanceOf('\Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPlugin',$oMobileDetectPlugin = $this->getApplicationServiceLocator()->get('ControllerPluginManager')->get('MobileDetect'));
		$oSampleController = new \Neilime\MobileDetectTest\Mvc\Controller\SampleController();
		$oSampleController->setServiceLocator(\Neilime\MobileDetectTest\Bootstrap::getServiceManager());
		$oMobileDetectPlugin->setController($oSampleController);
		$this->assertInstanceOf('\Mobile_Detect',$oMobileDetectPlugin->__invoke());
	}

	public function testMobileDetectControllerPluginWithCustomHttpHeaders(){
		$this->assertInstanceOf('\Neilime\MobileDetect\Mvc\Controller\Plugin\MobileDetectPlugin',$oMobileDetectPlugin = $this->getApplicationServiceLocator()->get('ControllerPluginManager')->get('MobileDetect'));
		$oSampleController = new \Neilime\MobileDetectTest\Mvc\Controller\SampleController();
		$oSampleController->setServiceLocator(\Neilime\MobileDetectTest\Bootstrap::getServiceManager());
		$oMobileDetectPlugin->setController($oSampleController);
		$this->assertInstanceOf('\Mobile_Detect',$oMobileDetect = $oMobileDetectPlugin->__invoke(
			\Zend\Http\Headers::fromString('User-Agent: Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19')
		));
		$this->assertTrue($oMobileDetect->isAndroidOS());
	}

	/**
	 * @expectedException LogicException
	 */
	public function testMobileDetectViewHelperWithServiceLocatorUndefined(){
		$oMobileDetect = new \Neilime\MobileDetect\View\Helper\MobileDetectHelper();
		$oMobileDetect->__invoke();
	}

	public function testMobileDetectViewHelper(){
		$this->assertInstanceOf('\Neilime\MobileDetect\View\Helper\MobileDetectHelper',$oMobileDetectHelper = $this->getApplicationServiceLocator()->get('ViewHelperManager')->get('MobileDetect'));
		$this->assertInstanceOf('\Mobile_Detect',$oMobileDetectHelper->__invoke());
	}

	public function testMobileDetectViewHelperWithCustomHttpHeaders(){
		$this->assertInstanceOf('\Neilime\MobileDetect\View\Helper\MobileDetectHelper',$oMobileDetectHelper = $this->getApplicationServiceLocator()->get('ViewHelperManager')->get('MobileDetect'));
		$this->assertInstanceOf('\Mobile_Detect',$oMobileDetect = $oMobileDetectHelper->__invoke(
			\Zend\Http\Headers::fromString('User-Agent: Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19')
		));
		$this->assertTrue($oMobileDetect->isAndroidOS());
	}
}
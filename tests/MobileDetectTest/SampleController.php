<?php
namespace Neilime\MobileDetectTest\Mvc\Controller;
class SampleController extends \Zend\Mvc\Controller\AbstractActionController{
    protected $serviceLocator;

    /**
     * @return mixed
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     * @param mixed $serviceLocator
     */
    public function setServiceLocator($serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }
}
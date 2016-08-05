<?php
namespace Neilime\MobileDetect\Mvc\Controller\Plugin;

use Neilime\MobileDetect\Factory\MobileDetectFactory;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class MobileDetectPlugin extends AbstractPlugin
{
    /**
     * @var \Mobile_Detect
     */
    protected $mobileDetect;

    /**
     * @param \Mobile_Detect $mobileDetect
     */
    public function __construct(\Mobile_Detect $mobileDetect)
    {
        $this->mobileDetect = $mobileDetect;
    }

    /**
     * Retrieve Mobile-detect service
     *
     * @param \Zend\Http\Headers $oHeaders
     *
     * @throws \LogicException
     * @return \Mobile_Detect
     */
    public function __invoke(\Zend\Http\Headers $oHeaders = null)
    {
        $oController = $this->getController();
        if (!$oController) {
            throw new \LogicException('Controller is undefined for MobileDetect controller plugin');
        }

        if ($oHeaders) {
            $this->mobileDetect->setHttpHeaders($oHeaders->toArray());
            $this->mobileDetect->setUserAgent($oHeaders->get('user-agent')->getFieldValue());
        }

        return $this->mobileDetect;
    }
}
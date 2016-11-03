<?php
namespace Neilime\MobileDetect\View\Helper;

use Zend\View\Helper\AbstractHelper;

class MobileDetectHelper extends AbstractHelper
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
     * @return \Mobile_Detect
     */
    public function __invoke(\Zend\Http\Headers $oHeaders = null)
    {
        if ($oHeaders) {
            $this->mobileDetect->setHttpHeaders($oHeaders->toArray());
            $this->mobileDetect->setUserAgent($oHeaders->get('user-agent')->getFieldValue());
        }

        return $this->mobileDetect;
    }
}
<?php

namespace FedexApiClass\Lib;

class AdrLicenseDetail
{

    /**
     * @var LicenseOrPermitDetail $LicenseOrPermitDetail
     */
    protected $LicenseOrPermitDetail = null;

    /**
     * @param LicenseOrPermitDetail $LicenseOrPermitDetail
     */
    public function __construct($LicenseOrPermitDetail = null)
    {
      $this->LicenseOrPermitDetail = $LicenseOrPermitDetail;
    }

    /**
     * @return LicenseOrPermitDetail
     */
    public function getLicenseOrPermitDetail()
    {
      return $this->LicenseOrPermitDetail;
    }

    /**
     * @param LicenseOrPermitDetail $LicenseOrPermitDetail
     * @return \FedexApiClass\Lib\AdrLicenseDetail
     */
    public function setLicenseOrPermitDetail($LicenseOrPermitDetail)
    {
      $this->LicenseOrPermitDetail = $LicenseOrPermitDetail;
      return $this;
    }

}

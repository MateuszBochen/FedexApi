<?php

namespace FedexApi\Lib;

class InternationalTrafficInArmsRegulationsDetail
{

    /**
     * @var string $LicenseOrExemptionNumber
     */
    protected $LicenseOrExemptionNumber = null;

    /**
     * @param string $LicenseOrExemptionNumber
     */
    public function __construct($LicenseOrExemptionNumber)
    {
      $this->LicenseOrExemptionNumber = $LicenseOrExemptionNumber;
    }

    /**
     * @return string
     */
    public function getLicenseOrExemptionNumber()
    {
      return $this->LicenseOrExemptionNumber;
    }

    /**
     * @param string $LicenseOrExemptionNumber
     * @return \FedexApi\Lib\InternationalTrafficInArmsRegulationsDetail
     */
    public function setLicenseOrExemptionNumber($LicenseOrExemptionNumber)
    {
      $this->LicenseOrExemptionNumber = $LicenseOrExemptionNumber;
      return $this;
    }

}

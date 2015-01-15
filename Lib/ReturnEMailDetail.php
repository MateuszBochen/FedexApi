<?php

namespace FedexApiClass\Lib;

class ReturnEMailDetail
{

    /**
     * @var string $MerchantPhoneNumber
     */
    protected $MerchantPhoneNumber = null;

    /**
     * @var ReturnEMailAllowedSpecialServiceType[] $AllowedSpecialServices
     */
    protected $AllowedSpecialServices = null;

    /**
     * @param string $MerchantPhoneNumber
     * @param ReturnEMailAllowedSpecialServiceType[] $AllowedSpecialServices
     */
    public function __construct($MerchantPhoneNumber = null, array $AllowedSpecialServices = null)
    {
      $this->MerchantPhoneNumber = $MerchantPhoneNumber;
      $this->AllowedSpecialServices = $AllowedSpecialServices;
    }

    /**
     * @return string
     */
    public function getMerchantPhoneNumber()
    {
      return $this->MerchantPhoneNumber;
    }

    /**
     * @param string $MerchantPhoneNumber
     * @return \FedexApiClass\Lib\ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($MerchantPhoneNumber)
    {
      $this->MerchantPhoneNumber = $MerchantPhoneNumber;
      return $this;
    }

    /**
     * @return ReturnEMailAllowedSpecialServiceType[]
     */
    public function getAllowedSpecialServices()
    {
      return $this->AllowedSpecialServices;
    }

    /**
     * @param ReturnEMailAllowedSpecialServiceType[] $AllowedSpecialServices
     * @return \FedexApiClass\Lib\ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $AllowedSpecialServices)
    {
      $this->AllowedSpecialServices = $AllowedSpecialServices;
      return $this;
    }

}

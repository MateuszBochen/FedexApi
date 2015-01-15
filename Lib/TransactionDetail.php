<?php

namespace FedexApiClass\Lib;

class TransactionDetail
{

    /**
     * @var string $CustomerTransactionId
     */
    protected $CustomerTransactionId = null;

    /**
     * @var Localization $Localization
     */
    protected $Localization = null;

    /**
     * @param string $CustomerTransactionId
     * @param Localization $Localization
     */
    public function __construct($CustomerTransactionId = null, $Localization = null)
    {
      $this->CustomerTransactionId = $CustomerTransactionId;
      $this->Localization = $Localization;
    }

    /**
     * @return string
     */
    public function getCustomerTransactionId()
    {
      return $this->CustomerTransactionId;
    }

    /**
     * @param string $CustomerTransactionId
     * @return \FedexApiClass\Lib\TransactionDetail
     */
    public function setCustomerTransactionId($CustomerTransactionId)
    {
      $this->CustomerTransactionId = $CustomerTransactionId;
      return $this;
    }

    /**
     * @return Localization
     */
    public function getLocalization()
    {
      return $this->Localization;
    }

    /**
     * @param Localization $Localization
     * @return \FedexApiClass\Lib\TransactionDetail
     */
    public function setLocalization($Localization)
    {
      $this->Localization = $Localization;
      return $this;
    }

}

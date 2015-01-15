<?php

namespace FedexApiClass\Lib;

class ClientDetail
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $MeterNumber
     */
    protected $MeterNumber = null;

    /**
     * @var string $IntegratorId
     */
    protected $IntegratorId = null;

    /**
     * @var Localization $Localization
     */
    protected $Localization = null;

    /**
     * @param string $AccountNumber
     * @param string $MeterNumber
     * @param string $IntegratorId
     * @param Localization $Localization
     */
    public function __construct($AccountNumber, $MeterNumber, $IntegratorId, $Localization)
    {
      $this->AccountNumber = $AccountNumber;
      $this->MeterNumber = $MeterNumber;
      $this->IntegratorId = $IntegratorId;
      $this->Localization = $Localization;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \FedexApiClass\Lib\ClientDetail
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeterNumber()
    {
      return $this->MeterNumber;
    }

    /**
     * @param string $MeterNumber
     * @return \FedexApiClass\Lib\ClientDetail
     */
    public function setMeterNumber($MeterNumber)
    {
      $this->MeterNumber = $MeterNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegratorId()
    {
      return $this->IntegratorId;
    }

    /**
     * @param string $IntegratorId
     * @return \FedexApiClass\Lib\ClientDetail
     */
    public function setIntegratorId($IntegratorId)
    {
      $this->IntegratorId = $IntegratorId;
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
     * @return \FedexApiClass\Lib\ClientDetail
     */
    public function setLocalization($Localization)
    {
      $this->Localization = $Localization;
      return $this;
    }

}

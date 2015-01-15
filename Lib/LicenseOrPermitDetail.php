<?php

namespace FedexApiClass\Lib;

class LicenseOrPermitDetail
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var date $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @param string $Number
     * @param date $EffectiveDate
     * @param date $ExpirationDate
     */
    public function __construct($Number, $EffectiveDate, $ExpirationDate)
    {
      $this->Number = $Number;
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpirationDate = $ExpirationDate;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FedexApiClass\Lib\LicenseOrPermitDetail
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \FedexApiClass\Lib\LicenseOrPermitDetail
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param date $ExpirationDate
     * @return \FedexApiClass\Lib\LicenseOrPermitDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

}

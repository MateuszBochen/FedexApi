<?php

namespace FedexApi\Lib;

class TaxpayerIdentification
{

    /**
     * @var TinType $TinType
     */
    protected $TinType = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Usage
     */
    protected $Usage = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @param TinType $TinType
     * @param string $Number
     * @param string $Usage
     * @param \DateTime $EffectiveDate
     * @param \DateTime $ExpirationDate
     */
    public function __construct($TinType, $Number, $Usage, \DateTime $EffectiveDate, \DateTime $ExpirationDate)
    {
      $this->TinType = $TinType;
      $this->Number = $Number;
      $this->Usage = $Usage;
      $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
    }

    /**
     * @return TinType
     */
    public function getTinType()
    {
      return $this->TinType;
    }

    /**
     * @param TinType $TinType
     * @return \FedexApi\Lib\TaxpayerIdentification
     */
    public function setTinType($TinType)
    {
      $this->TinType = $TinType;
      return $this;
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
     * @return \FedexApi\Lib\TaxpayerIdentification
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsage()
    {
      return $this->Usage;
    }

    /**
     * @param string $Usage
     * @return \FedexApi\Lib\TaxpayerIdentification
     */
    public function setUsage($Usage)
    {
      $this->Usage = $Usage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
      if ($this->EffectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EffectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EffectiveDate
     * @return \FedexApi\Lib\TaxpayerIdentification
     */
    public function setEffectiveDate(\DateTime $EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return \FedexApi\Lib\TaxpayerIdentification
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      return $this;
    }

}

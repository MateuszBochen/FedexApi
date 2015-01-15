<?php

namespace FedexApiClass\Lib;

class Surcharge
{

    /**
     * @var SurchargeType $SurchargeType
     */
    protected $SurchargeType = null;

    /**
     * @var SurchargeLevelType $Level
     */
    protected $Level = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var Money $Amount
     */
    protected $Amount = null;

    /**
     * @param SurchargeType $SurchargeType
     * @param SurchargeLevelType $Level
     * @param string $Description
     * @param Money $Amount
     */
    public function __construct($SurchargeType, $Level, $Description, $Amount)
    {
      $this->SurchargeType = $SurchargeType;
      $this->Level = $Level;
      $this->Description = $Description;
      $this->Amount = $Amount;
    }

    /**
     * @return SurchargeType
     */
    public function getSurchargeType()
    {
      return $this->SurchargeType;
    }

    /**
     * @param SurchargeType $SurchargeType
     * @return \FedexApiClass\Lib\Surcharge
     */
    public function setSurchargeType($SurchargeType)
    {
      $this->SurchargeType = $SurchargeType;
      return $this;
    }

    /**
     * @return SurchargeLevelType
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param SurchargeLevelType $Level
     * @return \FedexApiClass\Lib\Surcharge
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FedexApiClass\Lib\Surcharge
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return Money
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param Money $Amount
     * @return \FedexApiClass\Lib\Surcharge
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}

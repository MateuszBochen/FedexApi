<?php

namespace FedexApiClass\Lib;

class HazardousCommodityQuantityDetail
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Units
     */
    protected $Units = null;

    /**
     * @var HazardousCommodityQuantityType $QuantityType
     */
    protected $QuantityType = null;

    /**
     * @param float $Amount
     * @param string $Units
     * @param HazardousCommodityQuantityType $QuantityType
     */
    public function __construct($Amount, $Units, $QuantityType)
    {
      $this->Amount = $Amount;
      $this->Units = $Units;
      $this->QuantityType = $QuantityType;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \FedexApiClass\Lib\HazardousCommodityQuantityDetail
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param string $Units
     * @return \FedexApiClass\Lib\HazardousCommodityQuantityDetail
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return HazardousCommodityQuantityType
     */
    public function getQuantityType()
    {
      return $this->QuantityType;
    }

    /**
     * @param HazardousCommodityQuantityType $QuantityType
     * @return \FedexApiClass\Lib\HazardousCommodityQuantityDetail
     */
    public function setQuantityType($QuantityType)
    {
      $this->QuantityType = $QuantityType;
      return $this;
    }

}

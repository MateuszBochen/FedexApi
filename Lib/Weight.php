<?php

namespace FedexApi\Lib;

class Weight
{

    /**
     * @var WeightUnits $Units
     */
    protected $Units = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @param WeightUnits $Units
     * @param float $Value
     */
    public function __construct($Units, $Value)
    {
      $this->Units = $Units;
      $this->Value = $Value;
    }

    /**
     * @return WeightUnits
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param WeightUnits $Units
     * @return \FedexApi\Lib\Weight
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \FedexApi\Lib\Weight
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

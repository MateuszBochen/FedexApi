<?php

namespace FedexApiClass\Lib;

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
    public function __construct($Units = null, $Value = null)
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
     * @return \FedexApiClass\Lib\Weight
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
     * @return \FedexApiClass\Lib\Weight
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

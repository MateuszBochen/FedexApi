<?php

namespace FedexApi\Lib;

class LinearMeasure
{

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var LinearUnits $Units
     */
    protected $Units = null;

    /**
     * @param float $Value
     * @param LinearUnits $Units
     */
    public function __construct($Value, $Units)
    {
      $this->Value = $Value;
      $this->Units = $Units;
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
     * @return \FedexApi\Lib\LinearMeasure
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return LinearUnits
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param LinearUnits $Units
     * @return \FedexApi\Lib\LinearMeasure
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

}

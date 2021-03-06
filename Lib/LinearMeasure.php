<?php

namespace FedexApiClass\Lib;

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
    public function __construct($Value = null, $Units = null)
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
     * @return \FedexApiClass\Lib\LinearMeasure
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
     * @return \FedexApiClass\Lib\LinearMeasure
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

}

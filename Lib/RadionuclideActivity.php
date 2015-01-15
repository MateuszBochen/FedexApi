<?php

namespace FedexApiClass\Lib;

class RadionuclideActivity
{

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var RadioactivityUnitOfMeasure $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @param float $Value
     * @param RadioactivityUnitOfMeasure $UnitOfMeasure
     */
    public function __construct($Value, $UnitOfMeasure)
    {
      $this->Value = $Value;
      $this->UnitOfMeasure = $UnitOfMeasure;
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
     * @return \FedexApiClass\Lib\RadionuclideActivity
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return RadioactivityUnitOfMeasure
     */
    public function getUnitOfMeasure()
    {
      return $this->UnitOfMeasure;
    }

    /**
     * @param RadioactivityUnitOfMeasure $UnitOfMeasure
     * @return \FedexApiClass\Lib\RadionuclideActivity
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
      $this->UnitOfMeasure = $UnitOfMeasure;
      return $this;
    }

}

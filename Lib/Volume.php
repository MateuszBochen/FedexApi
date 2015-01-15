<?php

namespace FedexApi\Lib;

class Volume
{

    /**
     * @var VolumeUnits $Units
     */
    protected $Units = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @param VolumeUnits $Units
     * @param float $Value
     */
    public function __construct($Units, $Value)
    {
      $this->Units = $Units;
      $this->Value = $Value;
    }

    /**
     * @return VolumeUnits
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param VolumeUnits $Units
     * @return \FedexApi\Lib\Volume
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
     * @return \FedexApi\Lib\Volume
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class Measure
{

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $Units
     */
    protected $Units = null;

    /**
     * @param float $Quantity
     * @param string $Units
     */
    public function __construct($Quantity = null, $Units = null)
    {
      $this->Quantity = $Quantity;
      $this->Units = $Units;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \FedexApiClass\Lib\Measure
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \FedexApiClass\Lib\Measure
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

}

<?php

namespace FedexApi\Lib;

class HazardousCommodityPackingDetail
{

    /**
     * @var boolean $CargoAircraftOnly
     */
    protected $CargoAircraftOnly = null;

    /**
     * @var string $PackingInstructions
     */
    protected $PackingInstructions = null;

    /**
     * @param boolean $CargoAircraftOnly
     * @param string $PackingInstructions
     */
    public function __construct($CargoAircraftOnly, $PackingInstructions)
    {
      $this->CargoAircraftOnly = $CargoAircraftOnly;
      $this->PackingInstructions = $PackingInstructions;
    }

    /**
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
      return $this->CargoAircraftOnly;
    }

    /**
     * @param boolean $CargoAircraftOnly
     * @return \FedexApi\Lib\HazardousCommodityPackingDetail
     */
    public function setCargoAircraftOnly($CargoAircraftOnly)
    {
      $this->CargoAircraftOnly = $CargoAircraftOnly;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackingInstructions()
    {
      return $this->PackingInstructions;
    }

    /**
     * @param string $PackingInstructions
     * @return \FedexApi\Lib\HazardousCommodityPackingDetail
     */
    public function setPackingInstructions($PackingInstructions)
    {
      $this->PackingInstructions = $PackingInstructions;
      return $this;
    }

}

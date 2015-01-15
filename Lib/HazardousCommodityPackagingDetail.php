<?php

namespace FedexApiClass\Lib;

class HazardousCommodityPackagingDetail
{

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var string $Units
     */
    protected $Units = null;

    /**
     * @param int $Count
     * @param string $Units
     */
    public function __construct($Count = null, $Units = null)
    {
      $this->Count = $Count;
      $this->Units = $Units;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \FedexApiClass\Lib\HazardousCommodityPackagingDetail
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
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
     * @return \FedexApiClass\Lib\HazardousCommodityPackagingDetail
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

}

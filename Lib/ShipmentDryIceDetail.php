<?php

namespace FedexApi\Lib;

class ShipmentDryIceDetail
{

    /**
     * @var int $PackageCount
     */
    protected $PackageCount = null;

    /**
     * @var Weight $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @param int $PackageCount
     * @param Weight $TotalWeight
     */
    public function __construct($PackageCount, $TotalWeight)
    {
      $this->PackageCount = $PackageCount;
      $this->TotalWeight = $TotalWeight;
    }

    /**
     * @return int
     */
    public function getPackageCount()
    {
      return $this->PackageCount;
    }

    /**
     * @param int $PackageCount
     * @return \FedexApi\Lib\ShipmentDryIceDetail
     */
    public function setPackageCount($PackageCount)
    {
      $this->PackageCount = $PackageCount;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getTotalWeight()
    {
      return $this->TotalWeight;
    }

    /**
     * @param Weight $TotalWeight
     * @return \FedexApi\Lib\ShipmentDryIceDetail
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
      return $this;
    }

}

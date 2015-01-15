<?php

namespace FedexApi\Lib;

class ShipmentConfigurationData
{

    /**
     * @var DangerousGoodsDetail[] $DangerousGoodsPackageConfigurations
     */
    protected $DangerousGoodsPackageConfigurations = null;

    /**
     * @param DangerousGoodsDetail[] $DangerousGoodsPackageConfigurations
     */
    public function __construct(array $DangerousGoodsPackageConfigurations)
    {
      $this->DangerousGoodsPackageConfigurations = $DangerousGoodsPackageConfigurations;
    }

    /**
     * @return DangerousGoodsDetail[]
     */
    public function getDangerousGoodsPackageConfigurations()
    {
      return $this->DangerousGoodsPackageConfigurations;
    }

    /**
     * @param DangerousGoodsDetail[] $DangerousGoodsPackageConfigurations
     * @return \FedexApi\Lib\ShipmentConfigurationData
     */
    public function setDangerousGoodsPackageConfigurations(array $DangerousGoodsPackageConfigurations)
    {
      $this->DangerousGoodsPackageConfigurations = $DangerousGoodsPackageConfigurations;
      return $this;
    }

}

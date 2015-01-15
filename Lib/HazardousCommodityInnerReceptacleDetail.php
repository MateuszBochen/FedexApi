<?php

namespace FedexApi\Lib;

class HazardousCommodityInnerReceptacleDetail
{

    /**
     * @var HazardousCommodityQuantityDetail $Quantity
     */
    protected $Quantity = null;

    /**
     * @param HazardousCommodityQuantityDetail $Quantity
     */
    public function __construct($Quantity)
    {
      $this->Quantity = $Quantity;
    }

    /**
     * @return HazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param HazardousCommodityQuantityDetail $Quantity
     * @return \FedexApi\Lib\HazardousCommodityInnerReceptacleDetail
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}

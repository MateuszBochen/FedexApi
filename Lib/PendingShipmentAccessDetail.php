<?php

namespace FedexApiClass\Lib;

class PendingShipmentAccessDetail
{

    /**
     * @var PendingShipmentAccessorDetail[] $AccessorDetails
     */
    protected $AccessorDetails = null;

    /**
     * @param PendingShipmentAccessorDetail[] $AccessorDetails
     */
    public function __construct(array $AccessorDetails = null)
    {
      $this->AccessorDetails = $AccessorDetails;
    }

    /**
     * @return PendingShipmentAccessorDetail[]
     */
    public function getAccessorDetails()
    {
      return $this->AccessorDetails;
    }

    /**
     * @param PendingShipmentAccessorDetail[] $AccessorDetails
     * @return \FedexApiClass\Lib\PendingShipmentAccessDetail
     */
    public function setAccessorDetails(array $AccessorDetails)
    {
      $this->AccessorDetails = $AccessorDetails;
      return $this;
    }

}

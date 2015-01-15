<?php

namespace FedexApi\Lib;

class CompletedHoldAtLocationDetail
{

    /**
     * @var ContactAndAddress $HoldingLocation
     */
    protected $HoldingLocation = null;

    /**
     * @var FedExLocationType $HoldingLocationType
     */
    protected $HoldingLocationType = null;

    /**
     * @param ContactAndAddress $HoldingLocation
     * @param FedExLocationType $HoldingLocationType
     */
    public function __construct($HoldingLocation, $HoldingLocationType)
    {
      $this->HoldingLocation = $HoldingLocation;
      $this->HoldingLocationType = $HoldingLocationType;
    }

    /**
     * @return ContactAndAddress
     */
    public function getHoldingLocation()
    {
      return $this->HoldingLocation;
    }

    /**
     * @param ContactAndAddress $HoldingLocation
     * @return \FedexApi\Lib\CompletedHoldAtLocationDetail
     */
    public function setHoldingLocation($HoldingLocation)
    {
      $this->HoldingLocation = $HoldingLocation;
      return $this;
    }

    /**
     * @return FedExLocationType
     */
    public function getHoldingLocationType()
    {
      return $this->HoldingLocationType;
    }

    /**
     * @param FedExLocationType $HoldingLocationType
     * @return \FedexApi\Lib\CompletedHoldAtLocationDetail
     */
    public function setHoldingLocationType($HoldingLocationType)
    {
      $this->HoldingLocationType = $HoldingLocationType;
      return $this;
    }

}

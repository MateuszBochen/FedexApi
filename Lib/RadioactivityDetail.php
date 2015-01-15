<?php

namespace FedexApi\Lib;

class RadioactivityDetail
{

    /**
     * @var float $TransportIndex
     */
    protected $TransportIndex = null;

    /**
     * @var float $SurfaceReading
     */
    protected $SurfaceReading = null;

    /**
     * @var float $CriticalitySafetyIndex
     */
    protected $CriticalitySafetyIndex = null;

    /**
     * @var Dimensions $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @param float $TransportIndex
     * @param float $SurfaceReading
     * @param float $CriticalitySafetyIndex
     * @param Dimensions $Dimensions
     */
    public function __construct($TransportIndex, $SurfaceReading, $CriticalitySafetyIndex, $Dimensions)
    {
      $this->TransportIndex = $TransportIndex;
      $this->SurfaceReading = $SurfaceReading;
      $this->CriticalitySafetyIndex = $CriticalitySafetyIndex;
      $this->Dimensions = $Dimensions;
    }

    /**
     * @return float
     */
    public function getTransportIndex()
    {
      return $this->TransportIndex;
    }

    /**
     * @param float $TransportIndex
     * @return \FedexApi\Lib\RadioactivityDetail
     */
    public function setTransportIndex($TransportIndex)
    {
      $this->TransportIndex = $TransportIndex;
      return $this;
    }

    /**
     * @return float
     */
    public function getSurfaceReading()
    {
      return $this->SurfaceReading;
    }

    /**
     * @param float $SurfaceReading
     * @return \FedexApi\Lib\RadioactivityDetail
     */
    public function setSurfaceReading($SurfaceReading)
    {
      $this->SurfaceReading = $SurfaceReading;
      return $this;
    }

    /**
     * @return float
     */
    public function getCriticalitySafetyIndex()
    {
      return $this->CriticalitySafetyIndex;
    }

    /**
     * @param float $CriticalitySafetyIndex
     * @return \FedexApi\Lib\RadioactivityDetail
     */
    public function setCriticalitySafetyIndex($CriticalitySafetyIndex)
    {
      $this->CriticalitySafetyIndex = $CriticalitySafetyIndex;
      return $this;
    }

    /**
     * @return Dimensions
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param Dimensions $Dimensions
     * @return \FedexApi\Lib\RadioactivityDetail
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

}

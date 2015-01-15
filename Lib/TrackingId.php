<?php

namespace FedexApiClass\Lib;

class TrackingId
{

    /**
     * @var TrackingIdType $TrackingIdType
     */
    protected $TrackingIdType = null;

    /**
     * @var string $FormId
     */
    protected $FormId = null;

    /**
     * @var string $UspsApplicationId
     */
    protected $UspsApplicationId = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @param TrackingIdType $TrackingIdType
     * @param string $FormId
     * @param string $UspsApplicationId
     * @param string $TrackingNumber
     */
    public function __construct($TrackingIdType = null, $FormId = null, $UspsApplicationId = null, $TrackingNumber = null)
    {
      $this->TrackingIdType = $TrackingIdType;
      $this->FormId = $FormId;
      $this->UspsApplicationId = $UspsApplicationId;
      $this->TrackingNumber = $TrackingNumber;
    }

    /**
     * @return TrackingIdType
     */
    public function getTrackingIdType()
    {
      return $this->TrackingIdType;
    }

    /**
     * @param TrackingIdType $TrackingIdType
     * @return \FedexApiClass\Lib\TrackingId
     */
    public function setTrackingIdType($TrackingIdType)
    {
      $this->TrackingIdType = $TrackingIdType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormId()
    {
      return $this->FormId;
    }

    /**
     * @param string $FormId
     * @return \FedexApiClass\Lib\TrackingId
     */
    public function setFormId($FormId)
    {
      $this->FormId = $FormId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUspsApplicationId()
    {
      return $this->UspsApplicationId;
    }

    /**
     * @param string $UspsApplicationId
     * @return \FedexApiClass\Lib\TrackingId
     */
    public function setUspsApplicationId($UspsApplicationId)
    {
      $this->UspsApplicationId = $UspsApplicationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return \FedexApiClass\Lib\TrackingId
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

}

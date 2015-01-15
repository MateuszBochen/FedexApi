<?php

namespace FedexApiClass\Lib;

class PickupDetail
{

    /**
     * @var \DateTime $ReadyDateTime
     */
    protected $ReadyDateTime = null;

    /**
     * @var \DateTime $LatestPickupDateTime
     */
    protected $LatestPickupDateTime = null;

    /**
     * @var string $CourierInstructions
     */
    protected $CourierInstructions = null;

    /**
     * @var PickupRequestType $RequestType
     */
    protected $RequestType = null;

    /**
     * @var PickupRequestSourceType $RequestSource
     */
    protected $RequestSource = null;

    /**
     * @param \DateTime $ReadyDateTime
     * @param \DateTime $LatestPickupDateTime
     * @param string $CourierInstructions
     * @param PickupRequestType $RequestType
     * @param PickupRequestSourceType $RequestSource
     */
    public function __construct(\DateTime $ReadyDateTime, \DateTime $LatestPickupDateTime, $CourierInstructions, $RequestType, $RequestSource)
    {
      $this->ReadyDateTime = $ReadyDateTime->format(\DateTime::ATOM);
      $this->LatestPickupDateTime = $LatestPickupDateTime->format(\DateTime::ATOM);
      $this->CourierInstructions = $CourierInstructions;
      $this->RequestType = $RequestType;
      $this->RequestSource = $RequestSource;
    }

    /**
     * @return \DateTime
     */
    public function getReadyDateTime()
    {
      if ($this->ReadyDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReadyDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReadyDateTime
     * @return \FedexApiClass\Lib\PickupDetail
     */
    public function setReadyDateTime(\DateTime $ReadyDateTime)
    {
      $this->ReadyDateTime = $ReadyDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestPickupDateTime()
    {
      if ($this->LatestPickupDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LatestPickupDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LatestPickupDateTime
     * @return \FedexApiClass\Lib\PickupDetail
     */
    public function setLatestPickupDateTime(\DateTime $LatestPickupDateTime)
    {
      $this->LatestPickupDateTime = $LatestPickupDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCourierInstructions()
    {
      return $this->CourierInstructions;
    }

    /**
     * @param string $CourierInstructions
     * @return \FedexApiClass\Lib\PickupDetail
     */
    public function setCourierInstructions($CourierInstructions)
    {
      $this->CourierInstructions = $CourierInstructions;
      return $this;
    }

    /**
     * @return PickupRequestType
     */
    public function getRequestType()
    {
      return $this->RequestType;
    }

    /**
     * @param PickupRequestType $RequestType
     * @return \FedexApiClass\Lib\PickupDetail
     */
    public function setRequestType($RequestType)
    {
      $this->RequestType = $RequestType;
      return $this;
    }

    /**
     * @return PickupRequestSourceType
     */
    public function getRequestSource()
    {
      return $this->RequestSource;
    }

    /**
     * @param PickupRequestSourceType $RequestSource
     * @return \FedexApiClass\Lib\PickupDetail
     */
    public function setRequestSource($RequestSource)
    {
      $this->RequestSource = $RequestSource;
      return $this;
    }

}

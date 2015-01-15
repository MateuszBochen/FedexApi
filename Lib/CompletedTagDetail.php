<?php

namespace FedexApiClass\Lib;

class CompletedTagDetail
{

    /**
     * @var string $ConfirmationNumber
     */
    protected $ConfirmationNumber = null;

    /**
     * @var duration $AccessTime
     */
    protected $AccessTime = null;

    /**
     * @var time $CutoffTime
     */
    protected $CutoffTime = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var \DateTime $DeliveryCommitment
     */
    protected $DeliveryCommitment = null;

    /**
     * @var date $DispatchDate
     */
    protected $DispatchDate = null;

    /**
     * @param string $ConfirmationNumber
     * @param duration $AccessTime
     * @param time $CutoffTime
     * @param string $Location
     * @param \DateTime $DeliveryCommitment
     * @param date $DispatchDate
     */
    public function __construct($ConfirmationNumber, $AccessTime, $CutoffTime, $Location, \DateTime $DeliveryCommitment, $DispatchDate)
    {
      $this->ConfirmationNumber = $ConfirmationNumber;
      $this->AccessTime = $AccessTime;
      $this->CutoffTime = $CutoffTime;
      $this->Location = $Location;
      $this->DeliveryCommitment = $DeliveryCommitment->format(\DateTime::ATOM);
      $this->DispatchDate = $DispatchDate;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
      return $this->ConfirmationNumber;
    }

    /**
     * @param string $ConfirmationNumber
     * @return \FedexApiClass\Lib\CompletedTagDetail
     */
    public function setConfirmationNumber($ConfirmationNumber)
    {
      $this->ConfirmationNumber = $ConfirmationNumber;
      return $this;
    }

    /**
     * @return duration
     */
    public function getAccessTime()
    {
      return $this->AccessTime;
    }

    /**
     * @param duration $AccessTime
     * @return \FedexApiClass\Lib\CompletedTagDetail
     */
    public function setAccessTime($AccessTime)
    {
      $this->AccessTime = $AccessTime;
      return $this;
    }

    /**
     * @return time
     */
    public function getCutoffTime()
    {
      return $this->CutoffTime;
    }

    /**
     * @param time $CutoffTime
     * @return \FedexApiClass\Lib\CompletedTagDetail
     */
    public function setCutoffTime($CutoffTime)
    {
      $this->CutoffTime = $CutoffTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \FedexApiClass\Lib\CompletedTagDetail
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryCommitment()
    {
      if ($this->DeliveryCommitment == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryCommitment);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryCommitment
     * @return \FedexApiClass\Lib\CompletedTagDetail
     */
    public function setDeliveryCommitment(\DateTime $DeliveryCommitment)
    {
      $this->DeliveryCommitment = $DeliveryCommitment->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return date
     */
    public function getDispatchDate()
    {
      return $this->DispatchDate;
    }

    /**
     * @param date $DispatchDate
     * @return \FedexApiClass\Lib\CompletedTagDetail
     */
    public function setDispatchDate($DispatchDate)
    {
      $this->DispatchDate = $DispatchDate;
      return $this;
    }

}

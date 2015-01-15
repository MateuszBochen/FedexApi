<?php

namespace FedexApiClass\Lib;

class CustomDeliveryWindowDetail
{

    /**
     * @var CustomDeliveryWindowType $Type
     */
    protected $Type = null;

    /**
     * @var time $RequestTime
     */
    protected $RequestTime = null;

    /**
     * @var DateRange $RequestRange
     */
    protected $RequestRange = null;

    /**
     * @var date $RequestDate
     */
    protected $RequestDate = null;

    /**
     * @param CustomDeliveryWindowType $Type
     * @param time $RequestTime
     * @param DateRange $RequestRange
     * @param date $RequestDate
     */
    public function __construct($Type, $RequestTime, $RequestRange, $RequestDate)
    {
      $this->Type = $Type;
      $this->RequestTime = $RequestTime;
      $this->RequestRange = $RequestRange;
      $this->RequestDate = $RequestDate;
    }

    /**
     * @return CustomDeliveryWindowType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CustomDeliveryWindowType $Type
     * @return \FedexApiClass\Lib\CustomDeliveryWindowDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return time
     */
    public function getRequestTime()
    {
      return $this->RequestTime;
    }

    /**
     * @param time $RequestTime
     * @return \FedexApiClass\Lib\CustomDeliveryWindowDetail
     */
    public function setRequestTime($RequestTime)
    {
      $this->RequestTime = $RequestTime;
      return $this;
    }

    /**
     * @return DateRange
     */
    public function getRequestRange()
    {
      return $this->RequestRange;
    }

    /**
     * @param DateRange $RequestRange
     * @return \FedexApiClass\Lib\CustomDeliveryWindowDetail
     */
    public function setRequestRange($RequestRange)
    {
      $this->RequestRange = $RequestRange;
      return $this;
    }

    /**
     * @return date
     */
    public function getRequestDate()
    {
      return $this->RequestDate;
    }

    /**
     * @param date $RequestDate
     * @return \FedexApiClass\Lib\CustomDeliveryWindowDetail
     */
    public function setRequestDate($RequestDate)
    {
      $this->RequestDate = $RequestDate;
      return $this;
    }

}

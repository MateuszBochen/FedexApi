<?php

namespace FedexApi\Lib;

class HomeDeliveryPremiumDetail
{

    /**
     * @var HomeDeliveryPremiumType $HomeDeliveryPremiumType
     */
    protected $HomeDeliveryPremiumType = null;

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @param HomeDeliveryPremiumType $HomeDeliveryPremiumType
     * @param date $Date
     * @param string $PhoneNumber
     */
    public function __construct($HomeDeliveryPremiumType, $Date, $PhoneNumber)
    {
      $this->HomeDeliveryPremiumType = $HomeDeliveryPremiumType;
      $this->Date = $Date;
      $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return HomeDeliveryPremiumType
     */
    public function getHomeDeliveryPremiumType()
    {
      return $this->HomeDeliveryPremiumType;
    }

    /**
     * @param HomeDeliveryPremiumType $HomeDeliveryPremiumType
     * @return \FedexApi\Lib\HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType($HomeDeliveryPremiumType)
    {
      $this->HomeDeliveryPremiumType = $HomeDeliveryPremiumType;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return \FedexApi\Lib\HomeDeliveryPremiumDetail
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \FedexApi\Lib\HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}

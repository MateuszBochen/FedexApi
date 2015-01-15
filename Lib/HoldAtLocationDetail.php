<?php

namespace FedexApi\Lib;

class HoldAtLocationDetail
{

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var ContactAndAddress $LocationContactAndAddress
     */
    protected $LocationContactAndAddress = null;

    /**
     * @var FedExLocationType $LocationType
     */
    protected $LocationType = null;

    /**
     * @param string $PhoneNumber
     * @param ContactAndAddress $LocationContactAndAddress
     * @param FedExLocationType $LocationType
     */
    public function __construct($PhoneNumber, $LocationContactAndAddress, $LocationType)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->LocationContactAndAddress = $LocationContactAndAddress;
      $this->LocationType = $LocationType;
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
     * @return \FedexApi\Lib\HoldAtLocationDetail
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return ContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
      return $this->LocationContactAndAddress;
    }

    /**
     * @param ContactAndAddress $LocationContactAndAddress
     * @return \FedexApi\Lib\HoldAtLocationDetail
     */
    public function setLocationContactAndAddress($LocationContactAndAddress)
    {
      $this->LocationContactAndAddress = $LocationContactAndAddress;
      return $this;
    }

    /**
     * @return FedExLocationType
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param FedExLocationType $LocationType
     * @return \FedexApi\Lib\HoldAtLocationDetail
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

}

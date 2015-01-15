<?php

namespace FedexApiClass\Lib;

class FreightSpecialServicePayment
{

    /**
     * @var ShipmentSpecialServiceType $SpecialService
     */
    protected $SpecialService = null;

    /**
     * @var FreightShipmentRoleType $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @param ShipmentSpecialServiceType $SpecialService
     * @param FreightShipmentRoleType $PaymentType
     */
    public function __construct($SpecialService, $PaymentType)
    {
      $this->SpecialService = $SpecialService;
      $this->PaymentType = $PaymentType;
    }

    /**
     * @return ShipmentSpecialServiceType
     */
    public function getSpecialService()
    {
      return $this->SpecialService;
    }

    /**
     * @param ShipmentSpecialServiceType $SpecialService
     * @return \FedexApiClass\Lib\FreightSpecialServicePayment
     */
    public function setSpecialService($SpecialService)
    {
      $this->SpecialService = $SpecialService;
      return $this;
    }

    /**
     * @return FreightShipmentRoleType
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param FreightShipmentRoleType $PaymentType
     * @return \FedexApiClass\Lib\FreightSpecialServicePayment
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

}

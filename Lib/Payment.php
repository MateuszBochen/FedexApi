<?php

namespace FedexApi\Lib;

class Payment
{

    /**
     * @var PaymentType $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var Payor $Payor
     */
    protected $Payor = null;

    /**
     * @param PaymentType $PaymentType
     * @param Payor $Payor
     */
    public function __construct($PaymentType, $Payor)
    {
      $this->PaymentType = $PaymentType;
      $this->Payor = $Payor;
    }

    /**
     * @return PaymentType
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param PaymentType $PaymentType
     * @return \FedexApi\Lib\Payment
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return Payor
     */
    public function getPayor()
    {
      return $this->Payor;
    }

    /**
     * @param Payor $Payor
     * @return \FedexApi\Lib\Payment
     */
    public function setPayor($Payor)
    {
      $this->Payor = $Payor;
      return $this;
    }

}

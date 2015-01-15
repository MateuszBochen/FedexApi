<?php

namespace FedexApiClass\Lib;

class CustomerReference
{

    /**
     * @var CustomerReferenceType $CustomerReferenceType
     */
    protected $CustomerReferenceType = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param CustomerReferenceType $CustomerReferenceType
     * @param string $Value
     */
    public function __construct($CustomerReferenceType = null, $Value = null)
    {
      $this->CustomerReferenceType = $CustomerReferenceType;
      $this->Value = $Value;
    }

    /**
     * @return CustomerReferenceType
     */
    public function getCustomerReferenceType()
    {
      return $this->CustomerReferenceType;
    }

    /**
     * @param CustomerReferenceType $CustomerReferenceType
     * @return \FedexApiClass\Lib\CustomerReference
     */
    public function setCustomerReferenceType($CustomerReferenceType)
    {
      $this->CustomerReferenceType = $CustomerReferenceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FedexApiClass\Lib\CustomerReference
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class Op900Detail
{

    /**
     * @var ShippingDocumentFormat $Format
     */
    protected $Format = null;

    /**
     * @var CustomerReferenceType $Reference
     */
    protected $Reference = null;

    /**
     * @var CustomerImageUsage[] $CustomerImageUsages
     */
    protected $CustomerImageUsages = null;

    /**
     * @var string $SignatureName
     */
    protected $SignatureName = null;

    /**
     * @param ShippingDocumentFormat $Format
     * @param CustomerReferenceType $Reference
     * @param CustomerImageUsage[] $CustomerImageUsages
     * @param string $SignatureName
     */
    public function __construct($Format = null, $Reference = null, array $CustomerImageUsages = null, $SignatureName = null)
    {
      $this->Format = $Format;
      $this->Reference = $Reference;
      $this->CustomerImageUsages = $CustomerImageUsages;
      $this->SignatureName = $SignatureName;
    }

    /**
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param ShippingDocumentFormat $Format
     * @return \FedexApiClass\Lib\Op900Detail
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return CustomerReferenceType
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param CustomerReferenceType $Reference
     * @return \FedexApiClass\Lib\Op900Detail
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
      return $this->CustomerImageUsages;
    }

    /**
     * @param CustomerImageUsage[] $CustomerImageUsages
     * @return \FedexApiClass\Lib\Op900Detail
     */
    public function setCustomerImageUsages(array $CustomerImageUsages)
    {
      $this->CustomerImageUsages = $CustomerImageUsages;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatureName()
    {
      return $this->SignatureName;
    }

    /**
     * @param string $SignatureName
     * @return \FedexApiClass\Lib\Op900Detail
     */
    public function setSignatureName($SignatureName)
    {
      $this->SignatureName = $SignatureName;
      return $this;
    }

}

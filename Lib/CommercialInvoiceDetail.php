<?php

namespace FedexApiClass\Lib;

class CommercialInvoiceDetail
{

    /**
     * @var ShippingDocumentFormat $Format
     */
    protected $Format = null;

    /**
     * @var CustomerImageUsage[] $CustomerImageUsages
     */
    protected $CustomerImageUsages = null;

    /**
     * @param ShippingDocumentFormat $Format
     * @param CustomerImageUsage[] $CustomerImageUsages
     */
    public function __construct($Format, array $CustomerImageUsages)
    {
      $this->Format = $Format;
      $this->CustomerImageUsages = $CustomerImageUsages;
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
     * @return \FedexApiClass\Lib\CommercialInvoiceDetail
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
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
     * @return \FedexApiClass\Lib\CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $CustomerImageUsages)
    {
      $this->CustomerImageUsages = $CustomerImageUsages;
      return $this;
    }

}

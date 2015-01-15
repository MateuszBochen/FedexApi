<?php

namespace FedexApi\Lib;

class ExportDeclarationDetail
{

    /**
     * @var ShippingDocumentFormat $DocumentFormat
     */
    protected $DocumentFormat = null;

    /**
     * @var CustomerImageUsage[] $CustomerImageUsages
     */
    protected $CustomerImageUsages = null;

    /**
     * @param ShippingDocumentFormat $DocumentFormat
     * @param CustomerImageUsage[] $CustomerImageUsages
     */
    public function __construct($DocumentFormat, array $CustomerImageUsages)
    {
      $this->DocumentFormat = $DocumentFormat;
      $this->CustomerImageUsages = $CustomerImageUsages;
    }

    /**
     * @return ShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
      return $this->DocumentFormat;
    }

    /**
     * @param ShippingDocumentFormat $DocumentFormat
     * @return \FedexApi\Lib\ExportDeclarationDetail
     */
    public function setDocumentFormat($DocumentFormat)
    {
      $this->DocumentFormat = $DocumentFormat;
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
     * @return \FedexApi\Lib\ExportDeclarationDetail
     */
    public function setCustomerImageUsages(array $CustomerImageUsages)
    {
      $this->CustomerImageUsages = $CustomerImageUsages;
      return $this;
    }

}

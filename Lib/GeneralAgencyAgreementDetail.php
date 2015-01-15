<?php

namespace FedexApi\Lib;

class GeneralAgencyAgreementDetail
{

    /**
     * @var ShippingDocumentFormat $Format
     */
    protected $Format = null;

    /**
     * @param ShippingDocumentFormat $Format
     */
    public function __construct($Format)
    {
      $this->Format = $Format;
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
     * @return \FedexApi\Lib\GeneralAgencyAgreementDetail
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

}

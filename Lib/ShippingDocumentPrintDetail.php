<?php

namespace FedexApiClass\Lib;

class ShippingDocumentPrintDetail
{

    /**
     * @var string $PrinterId
     */
    protected $PrinterId = null;

    /**
     * @param string $PrinterId
     */
    public function __construct($PrinterId = null)
    {
      $this->PrinterId = $PrinterId;
    }

    /**
     * @return string
     */
    public function getPrinterId()
    {
      return $this->PrinterId;
    }

    /**
     * @param string $PrinterId
     * @return \FedexApiClass\Lib\ShippingDocumentPrintDetail
     */
    public function setPrinterId($PrinterId)
    {
      $this->PrinterId = $PrinterId;
      return $this;
    }

}

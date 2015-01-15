<?php

namespace FedexApi\Lib;

class ReturnInstructionsDetail
{

    /**
     * @var ShippingDocumentFormat $Format
     */
    protected $Format = null;

    /**
     * @var string $CustomText
     */
    protected $CustomText = null;

    /**
     * @param ShippingDocumentFormat $Format
     * @param string $CustomText
     */
    public function __construct($Format, $CustomText)
    {
      $this->Format = $Format;
      $this->CustomText = $CustomText;
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
     * @return \FedexApi\Lib\ReturnInstructionsDetail
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomText()
    {
      return $this->CustomText;
    }

    /**
     * @param string $CustomText
     * @return \FedexApi\Lib\ReturnInstructionsDetail
     */
    public function setCustomText($CustomText)
    {
      $this->CustomText = $CustomText;
      return $this;
    }

}

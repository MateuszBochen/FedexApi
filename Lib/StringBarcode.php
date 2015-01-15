<?php

namespace FedexApi\Lib;

class StringBarcode
{

    /**
     * @var StringBarcodeType $Type
     */
    protected $Type = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param StringBarcodeType $Type
     * @param string $Value
     */
    public function __construct($Type, $Value)
    {
      $this->Type = $Type;
      $this->Value = $Value;
    }

    /**
     * @return StringBarcodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringBarcodeType $Type
     * @return \FedexApi\Lib\StringBarcode
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FedexApi\Lib\StringBarcode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

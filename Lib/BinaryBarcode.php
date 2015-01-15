<?php

namespace FedexApiClass\Lib;

class BinaryBarcode
{

    /**
     * @var BinaryBarcodeType $Type
     */
    protected $Type = null;

    /**
     * @var base64Binary $Value
     */
    protected $Value = null;

    /**
     * @param BinaryBarcodeType $Type
     * @param base64Binary $Value
     */
    public function __construct($Type = null, $Value = null)
    {
      $this->Type = $Type;
      $this->Value = $Value;
    }

    /**
     * @return BinaryBarcodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param BinaryBarcodeType $Type
     * @return \FedexApiClass\Lib\BinaryBarcode
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param base64Binary $Value
     * @return \FedexApiClass\Lib\BinaryBarcode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

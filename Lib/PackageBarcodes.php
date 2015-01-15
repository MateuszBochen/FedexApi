<?php

namespace FedexApiClass\Lib;

class PackageBarcodes
{

    /**
     * @var BinaryBarcode[] $BinaryBarcodes
     */
    protected $BinaryBarcodes = null;

    /**
     * @var StringBarcode[] $StringBarcodes
     */
    protected $StringBarcodes = null;

    /**
     * @param BinaryBarcode[] $BinaryBarcodes
     * @param StringBarcode[] $StringBarcodes
     */
    public function __construct(array $BinaryBarcodes, array $StringBarcodes)
    {
      $this->BinaryBarcodes = $BinaryBarcodes;
      $this->StringBarcodes = $StringBarcodes;
    }

    /**
     * @return BinaryBarcode[]
     */
    public function getBinaryBarcodes()
    {
      return $this->BinaryBarcodes;
    }

    /**
     * @param BinaryBarcode[] $BinaryBarcodes
     * @return \FedexApiClass\Lib\PackageBarcodes
     */
    public function setBinaryBarcodes(array $BinaryBarcodes)
    {
      $this->BinaryBarcodes = $BinaryBarcodes;
      return $this;
    }

    /**
     * @return StringBarcode[]
     */
    public function getStringBarcodes()
    {
      return $this->StringBarcodes;
    }

    /**
     * @param StringBarcode[] $StringBarcodes
     * @return \FedexApiClass\Lib\PackageBarcodes
     */
    public function setStringBarcodes(array $StringBarcodes)
    {
      $this->StringBarcodes = $StringBarcodes;
      return $this;
    }

}

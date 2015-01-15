<?php

namespace FedexApi\Lib;

class CustomLabelBarcodeEntry
{

    /**
     * @var CustomLabelPosition $Position
     */
    protected $Position = null;

    /**
     * @var string $Format
     */
    protected $Format = null;

    /**
     * @var string[] $DataFields
     */
    protected $DataFields = null;

    /**
     * @var int $BarHeight
     */
    protected $BarHeight = null;

    /**
     * @var int $ThinBarWidth
     */
    protected $ThinBarWidth = null;

    /**
     * @var BarcodeSymbologyType $BarcodeSymbology
     */
    protected $BarcodeSymbology = null;

    /**
     * @param CustomLabelPosition $Position
     * @param string $Format
     * @param string[] $DataFields
     * @param int $BarHeight
     * @param int $ThinBarWidth
     * @param BarcodeSymbologyType $BarcodeSymbology
     */
    public function __construct($Position, $Format, array $DataFields, $BarHeight, $ThinBarWidth, $BarcodeSymbology)
    {
      $this->Position = $Position;
      $this->Format = $Format;
      $this->DataFields = $DataFields;
      $this->BarHeight = $BarHeight;
      $this->ThinBarWidth = $ThinBarWidth;
      $this->BarcodeSymbology = $BarcodeSymbology;
    }

    /**
     * @return CustomLabelPosition
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param CustomLabelPosition $Position
     * @return \FedexApi\Lib\CustomLabelBarcodeEntry
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param string $Format
     * @return \FedexApi\Lib\CustomLabelBarcodeEntry
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDataFields()
    {
      return $this->DataFields;
    }

    /**
     * @param string[] $DataFields
     * @return \FedexApi\Lib\CustomLabelBarcodeEntry
     */
    public function setDataFields(array $DataFields)
    {
      $this->DataFields = $DataFields;
      return $this;
    }

    /**
     * @return int
     */
    public function getBarHeight()
    {
      return $this->BarHeight;
    }

    /**
     * @param int $BarHeight
     * @return \FedexApi\Lib\CustomLabelBarcodeEntry
     */
    public function setBarHeight($BarHeight)
    {
      $this->BarHeight = $BarHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getThinBarWidth()
    {
      return $this->ThinBarWidth;
    }

    /**
     * @param int $ThinBarWidth
     * @return \FedexApi\Lib\CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($ThinBarWidth)
    {
      $this->ThinBarWidth = $ThinBarWidth;
      return $this;
    }

    /**
     * @return BarcodeSymbologyType
     */
    public function getBarcodeSymbology()
    {
      return $this->BarcodeSymbology;
    }

    /**
     * @param BarcodeSymbologyType $BarcodeSymbology
     * @return \FedexApi\Lib\CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology($BarcodeSymbology)
    {
      $this->BarcodeSymbology = $BarcodeSymbology;
      return $this;
    }

}

<?php

namespace FedexApi\Lib;

class CustomLabelDetail
{

    /**
     * @var CustomLabelCoordinateUnits $CoordinateUnits
     */
    protected $CoordinateUnits = null;

    /**
     * @var CustomLabelTextEntry[] $TextEntries
     */
    protected $TextEntries = null;

    /**
     * @var CustomLabelGraphicEntry[] $GraphicEntries
     */
    protected $GraphicEntries = null;

    /**
     * @var CustomLabelBoxEntry[] $BoxEntries
     */
    protected $BoxEntries = null;

    /**
     * @var CustomLabelBarcodeEntry[] $BarcodeEntries
     */
    protected $BarcodeEntries = null;

    /**
     * @param CustomLabelCoordinateUnits $CoordinateUnits
     * @param CustomLabelTextEntry[] $TextEntries
     * @param CustomLabelGraphicEntry[] $GraphicEntries
     * @param CustomLabelBoxEntry[] $BoxEntries
     * @param CustomLabelBarcodeEntry[] $BarcodeEntries
     */
    public function __construct($CoordinateUnits, array $TextEntries, array $GraphicEntries, array $BoxEntries, array $BarcodeEntries)
    {
      $this->CoordinateUnits = $CoordinateUnits;
      $this->TextEntries = $TextEntries;
      $this->GraphicEntries = $GraphicEntries;
      $this->BoxEntries = $BoxEntries;
      $this->BarcodeEntries = $BarcodeEntries;
    }

    /**
     * @return CustomLabelCoordinateUnits
     */
    public function getCoordinateUnits()
    {
      return $this->CoordinateUnits;
    }

    /**
     * @param CustomLabelCoordinateUnits $CoordinateUnits
     * @return \FedexApi\Lib\CustomLabelDetail
     */
    public function setCoordinateUnits($CoordinateUnits)
    {
      $this->CoordinateUnits = $CoordinateUnits;
      return $this;
    }

    /**
     * @return CustomLabelTextEntry[]
     */
    public function getTextEntries()
    {
      return $this->TextEntries;
    }

    /**
     * @param CustomLabelTextEntry[] $TextEntries
     * @return \FedexApi\Lib\CustomLabelDetail
     */
    public function setTextEntries(array $TextEntries)
    {
      $this->TextEntries = $TextEntries;
      return $this;
    }

    /**
     * @return CustomLabelGraphicEntry[]
     */
    public function getGraphicEntries()
    {
      return $this->GraphicEntries;
    }

    /**
     * @param CustomLabelGraphicEntry[] $GraphicEntries
     * @return \FedexApi\Lib\CustomLabelDetail
     */
    public function setGraphicEntries(array $GraphicEntries)
    {
      $this->GraphicEntries = $GraphicEntries;
      return $this;
    }

    /**
     * @return CustomLabelBoxEntry[]
     */
    public function getBoxEntries()
    {
      return $this->BoxEntries;
    }

    /**
     * @param CustomLabelBoxEntry[] $BoxEntries
     * @return \FedexApi\Lib\CustomLabelDetail
     */
    public function setBoxEntries(array $BoxEntries)
    {
      $this->BoxEntries = $BoxEntries;
      return $this;
    }

    /**
     * @return CustomLabelBarcodeEntry[]
     */
    public function getBarcodeEntries()
    {
      return $this->BarcodeEntries;
    }

    /**
     * @param CustomLabelBarcodeEntry[] $BarcodeEntries
     * @return \FedexApi\Lib\CustomLabelDetail
     */
    public function setBarcodeEntries(array $BarcodeEntries)
    {
      $this->BarcodeEntries = $BarcodeEntries;
      return $this;
    }

}

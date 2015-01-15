<?php

namespace FedexApiClass\Lib;

class CustomLabelTextEntry
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
     * @var string $ThermalFontId
     */
    protected $ThermalFontId = null;

    /**
     * @var string $FontName
     */
    protected $FontName = null;

    /**
     * @var int $FontSize
     */
    protected $FontSize = null;

    /**
     * @var RotationType $Rotation
     */
    protected $Rotation = null;

    /**
     * @param CustomLabelPosition $Position
     * @param string $Format
     * @param string[] $DataFields
     * @param string $ThermalFontId
     * @param string $FontName
     * @param int $FontSize
     * @param RotationType $Rotation
     */
    public function __construct($Position, $Format, array $DataFields, $ThermalFontId, $FontName, $FontSize, $Rotation)
    {
      $this->Position = $Position;
      $this->Format = $Format;
      $this->DataFields = $DataFields;
      $this->ThermalFontId = $ThermalFontId;
      $this->FontName = $FontName;
      $this->FontSize = $FontSize;
      $this->Rotation = $Rotation;
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
     * @return \FedexApiClass\Lib\CustomLabelTextEntry
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
     * @return \FedexApiClass\Lib\CustomLabelTextEntry
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
     * @return \FedexApiClass\Lib\CustomLabelTextEntry
     */
    public function setDataFields(array $DataFields)
    {
      $this->DataFields = $DataFields;
      return $this;
    }

    /**
     * @return string
     */
    public function getThermalFontId()
    {
      return $this->ThermalFontId;
    }

    /**
     * @param string $ThermalFontId
     * @return \FedexApiClass\Lib\CustomLabelTextEntry
     */
    public function setThermalFontId($ThermalFontId)
    {
      $this->ThermalFontId = $ThermalFontId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFontName()
    {
      return $this->FontName;
    }

    /**
     * @param string $FontName
     * @return \FedexApiClass\Lib\CustomLabelTextEntry
     */
    public function setFontName($FontName)
    {
      $this->FontName = $FontName;
      return $this;
    }

    /**
     * @return int
     */
    public function getFontSize()
    {
      return $this->FontSize;
    }

    /**
     * @param int $FontSize
     * @return \FedexApiClass\Lib\CustomLabelTextEntry
     */
    public function setFontSize($FontSize)
    {
      $this->FontSize = $FontSize;
      return $this;
    }

    /**
     * @return RotationType
     */
    public function getRotation()
    {
      return $this->Rotation;
    }

    /**
     * @param RotationType $Rotation
     * @return \FedexApiClass\Lib\CustomLabelTextEntry
     */
    public function setRotation($Rotation)
    {
      $this->Rotation = $Rotation;
      return $this;
    }

}

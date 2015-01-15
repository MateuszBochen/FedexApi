<?php

namespace FedexApiClass\Lib;

class ConfigurableLabelReferenceEntry
{

    /**
     * @var int $ZoneNumber
     */
    protected $ZoneNumber = null;

    /**
     * @var string $Header
     */
    protected $Header = null;

    /**
     * @var string $DataField
     */
    protected $DataField = null;

    /**
     * @var string $LiteralValue
     */
    protected $LiteralValue = null;

    /**
     * @param int $ZoneNumber
     * @param string $Header
     * @param string $DataField
     * @param string $LiteralValue
     */
    public function __construct($ZoneNumber = null, $Header = null, $DataField = null, $LiteralValue = null)
    {
      $this->ZoneNumber = $ZoneNumber;
      $this->Header = $Header;
      $this->DataField = $DataField;
      $this->LiteralValue = $LiteralValue;
    }

    /**
     * @return int
     */
    public function getZoneNumber()
    {
      return $this->ZoneNumber;
    }

    /**
     * @param int $ZoneNumber
     * @return \FedexApiClass\Lib\ConfigurableLabelReferenceEntry
     */
    public function setZoneNumber($ZoneNumber)
    {
      $this->ZoneNumber = $ZoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param string $Header
     * @return \FedexApiClass\Lib\ConfigurableLabelReferenceEntry
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataField()
    {
      return $this->DataField;
    }

    /**
     * @param string $DataField
     * @return \FedexApiClass\Lib\ConfigurableLabelReferenceEntry
     */
    public function setDataField($DataField)
    {
      $this->DataField = $DataField;
      return $this;
    }

    /**
     * @return string
     */
    public function getLiteralValue()
    {
      return $this->LiteralValue;
    }

    /**
     * @param string $LiteralValue
     * @return \FedexApiClass\Lib\ConfigurableLabelReferenceEntry
     */
    public function setLiteralValue($LiteralValue)
    {
      $this->LiteralValue = $LiteralValue;
      return $this;
    }

}

<?php

namespace FedexApi\Lib;

class DocTabZoneSpecification
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
     * @var DocTabZoneJustificationType $Justification
     */
    protected $Justification = null;

    /**
     * @param int $ZoneNumber
     * @param string $Header
     * @param string $DataField
     * @param string $LiteralValue
     * @param DocTabZoneJustificationType $Justification
     */
    public function __construct($ZoneNumber, $Header, $DataField, $LiteralValue, $Justification)
    {
      $this->ZoneNumber = $ZoneNumber;
      $this->Header = $Header;
      $this->DataField = $DataField;
      $this->LiteralValue = $LiteralValue;
      $this->Justification = $Justification;
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
     * @return \FedexApi\Lib\DocTabZoneSpecification
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
     * @return \FedexApi\Lib\DocTabZoneSpecification
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
     * @return \FedexApi\Lib\DocTabZoneSpecification
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
     * @return \FedexApi\Lib\DocTabZoneSpecification
     */
    public function setLiteralValue($LiteralValue)
    {
      $this->LiteralValue = $LiteralValue;
      return $this;
    }

    /**
     * @return DocTabZoneJustificationType
     */
    public function getJustification()
    {
      return $this->Justification;
    }

    /**
     * @param DocTabZoneJustificationType $Justification
     * @return \FedexApi\Lib\DocTabZoneSpecification
     */
    public function setJustification($Justification)
    {
      $this->Justification = $Justification;
      return $this;
    }

}

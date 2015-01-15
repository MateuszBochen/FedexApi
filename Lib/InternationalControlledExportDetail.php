<?php

namespace FedexApiClass\Lib;

class InternationalControlledExportDetail
{

    /**
     * @var InternationalControlledExportType $Type
     */
    protected $Type = null;

    /**
     * @var string $ForeignTradeZoneCode
     */
    protected $ForeignTradeZoneCode = null;

    /**
     * @var string $EntryNumber
     */
    protected $EntryNumber = null;

    /**
     * @var string $LicenseOrPermitNumber
     */
    protected $LicenseOrPermitNumber = null;

    /**
     * @var date $LicenseOrPermitExpirationDate
     */
    protected $LicenseOrPermitExpirationDate = null;

    /**
     * @param InternationalControlledExportType $Type
     * @param string $ForeignTradeZoneCode
     * @param string $EntryNumber
     * @param string $LicenseOrPermitNumber
     * @param date $LicenseOrPermitExpirationDate
     */
    public function __construct($Type = null, $ForeignTradeZoneCode = null, $EntryNumber = null, $LicenseOrPermitNumber = null, $LicenseOrPermitExpirationDate = null)
    {
      $this->Type = $Type;
      $this->ForeignTradeZoneCode = $ForeignTradeZoneCode;
      $this->EntryNumber = $EntryNumber;
      $this->LicenseOrPermitNumber = $LicenseOrPermitNumber;
      $this->LicenseOrPermitExpirationDate = $LicenseOrPermitExpirationDate;
    }

    /**
     * @return InternationalControlledExportType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param InternationalControlledExportType $Type
     * @return \FedexApiClass\Lib\InternationalControlledExportDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getForeignTradeZoneCode()
    {
      return $this->ForeignTradeZoneCode;
    }

    /**
     * @param string $ForeignTradeZoneCode
     * @return \FedexApiClass\Lib\InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($ForeignTradeZoneCode)
    {
      $this->ForeignTradeZoneCode = $ForeignTradeZoneCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntryNumber()
    {
      return $this->EntryNumber;
    }

    /**
     * @param string $EntryNumber
     * @return \FedexApiClass\Lib\InternationalControlledExportDetail
     */
    public function setEntryNumber($EntryNumber)
    {
      $this->EntryNumber = $EntryNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseOrPermitNumber()
    {
      return $this->LicenseOrPermitNumber;
    }

    /**
     * @param string $LicenseOrPermitNumber
     * @return \FedexApiClass\Lib\InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($LicenseOrPermitNumber)
    {
      $this->LicenseOrPermitNumber = $LicenseOrPermitNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getLicenseOrPermitExpirationDate()
    {
      return $this->LicenseOrPermitExpirationDate;
    }

    /**
     * @param date $LicenseOrPermitExpirationDate
     * @return \FedexApiClass\Lib\InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($LicenseOrPermitExpirationDate)
    {
      $this->LicenseOrPermitExpirationDate = $LicenseOrPermitExpirationDate;
      return $this;
    }

}

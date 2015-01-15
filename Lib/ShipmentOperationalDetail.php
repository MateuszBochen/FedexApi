<?php

namespace FedexApiClass\Lib;

class ShipmentOperationalDetail
{

    /**
     * @var string $UrsaPrefixCode
     */
    protected $UrsaPrefixCode = null;

    /**
     * @var string $UrsaSuffixCode
     */
    protected $UrsaSuffixCode = null;

    /**
     * @var string $OriginLocationId
     */
    protected $OriginLocationId = null;

    /**
     * @var int $OriginLocationNumber
     */
    protected $OriginLocationNumber = null;

    /**
     * @var string $OriginServiceArea
     */
    protected $OriginServiceArea = null;

    /**
     * @var string $DestinationLocationId
     */
    protected $DestinationLocationId = null;

    /**
     * @var int $DestinationLocationNumber
     */
    protected $DestinationLocationNumber = null;

    /**
     * @var string $DestinationServiceArea
     */
    protected $DestinationServiceArea = null;

    /**
     * @var string $DestinationLocationStateOrProvinceCode
     */
    protected $DestinationLocationStateOrProvinceCode = null;

    /**
     * @var date $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var DayOfWeekType $DeliveryDay
     */
    protected $DeliveryDay = null;

    /**
     * @var time $PublishedDeliveryTime
     */
    protected $PublishedDeliveryTime = null;

    /**
     * @var date $CommitDate
     */
    protected $CommitDate = null;

    /**
     * @var DayOfWeekType $CommitDay
     */
    protected $CommitDay = null;

    /**
     * @var TransitTimeType $TransitTime
     */
    protected $TransitTime = null;

    /**
     * @var TransitTimeType $MaximumTransitTime
     */
    protected $MaximumTransitTime = null;

    /**
     * @var TransitTimeType $CustomTransitTime
     */
    protected $CustomTransitTime = null;

    /**
     * @var boolean $IneligibleForMoneyBackGuarantee
     */
    protected $IneligibleForMoneyBackGuarantee = null;

    /**
     * @var GroundDeliveryEligibilityType[] $DeliveryEligibilities
     */
    protected $DeliveryEligibilities = null;

    /**
     * @var string $AstraPlannedServiceLevel
     */
    protected $AstraPlannedServiceLevel = null;

    /**
     * @var string $AstraDescription
     */
    protected $AstraDescription = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $StateOrProvinceCode
     */
    protected $StateOrProvinceCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $AirportId
     */
    protected $AirportId = null;

    /**
     * @var string $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var string $PackagingCode
     */
    protected $PackagingCode = null;

    /**
     * @var string $Scac
     */
    protected $Scac = null;

    /**
     * @param string $UrsaPrefixCode
     * @param string $UrsaSuffixCode
     * @param string $OriginLocationId
     * @param int $OriginLocationNumber
     * @param string $OriginServiceArea
     * @param string $DestinationLocationId
     * @param int $DestinationLocationNumber
     * @param string $DestinationServiceArea
     * @param string $DestinationLocationStateOrProvinceCode
     * @param date $DeliveryDate
     * @param DayOfWeekType $DeliveryDay
     * @param time $PublishedDeliveryTime
     * @param date $CommitDate
     * @param DayOfWeekType $CommitDay
     * @param TransitTimeType $TransitTime
     * @param TransitTimeType $MaximumTransitTime
     * @param TransitTimeType $CustomTransitTime
     * @param boolean $IneligibleForMoneyBackGuarantee
     * @param GroundDeliveryEligibilityType[] $DeliveryEligibilities
     * @param string $AstraPlannedServiceLevel
     * @param string $AstraDescription
     * @param string $PostalCode
     * @param string $StateOrProvinceCode
     * @param string $CountryCode
     * @param string $AirportId
     * @param string $ServiceCode
     * @param string $PackagingCode
     * @param string $Scac
     */
    public function __construct($UrsaPrefixCode = null, $UrsaSuffixCode = null, $OriginLocationId = null, $OriginLocationNumber = null, $OriginServiceArea = null, $DestinationLocationId = null, $DestinationLocationNumber = null, $DestinationServiceArea = null, $DestinationLocationStateOrProvinceCode = null, $DeliveryDate = null, $DeliveryDay = null, $PublishedDeliveryTime = null, $CommitDate = null, $CommitDay = null, $TransitTime = null, $MaximumTransitTime = null, $CustomTransitTime = null, $IneligibleForMoneyBackGuarantee = null, array $DeliveryEligibilities = null, $AstraPlannedServiceLevel = null, $AstraDescription = null, $PostalCode = null, $StateOrProvinceCode = null, $CountryCode = null, $AirportId = null, $ServiceCode = null, $PackagingCode = null, $Scac = null)
    {
      $this->UrsaPrefixCode = $UrsaPrefixCode;
      $this->UrsaSuffixCode = $UrsaSuffixCode;
      $this->OriginLocationId = $OriginLocationId;
      $this->OriginLocationNumber = $OriginLocationNumber;
      $this->OriginServiceArea = $OriginServiceArea;
      $this->DestinationLocationId = $DestinationLocationId;
      $this->DestinationLocationNumber = $DestinationLocationNumber;
      $this->DestinationServiceArea = $DestinationServiceArea;
      $this->DestinationLocationStateOrProvinceCode = $DestinationLocationStateOrProvinceCode;
      $this->DeliveryDate = $DeliveryDate;
      $this->DeliveryDay = $DeliveryDay;
      $this->PublishedDeliveryTime = $PublishedDeliveryTime;
      $this->CommitDate = $CommitDate;
      $this->CommitDay = $CommitDay;
      $this->TransitTime = $TransitTime;
      $this->MaximumTransitTime = $MaximumTransitTime;
      $this->CustomTransitTime = $CustomTransitTime;
      $this->IneligibleForMoneyBackGuarantee = $IneligibleForMoneyBackGuarantee;
      $this->DeliveryEligibilities = $DeliveryEligibilities;
      $this->AstraPlannedServiceLevel = $AstraPlannedServiceLevel;
      $this->AstraDescription = $AstraDescription;
      $this->PostalCode = $PostalCode;
      $this->StateOrProvinceCode = $StateOrProvinceCode;
      $this->CountryCode = $CountryCode;
      $this->AirportId = $AirportId;
      $this->ServiceCode = $ServiceCode;
      $this->PackagingCode = $PackagingCode;
      $this->Scac = $Scac;
    }

    /**
     * @return string
     */
    public function getUrsaPrefixCode()
    {
      return $this->UrsaPrefixCode;
    }

    /**
     * @param string $UrsaPrefixCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setUrsaPrefixCode($UrsaPrefixCode)
    {
      $this->UrsaPrefixCode = $UrsaPrefixCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrsaSuffixCode()
    {
      return $this->UrsaSuffixCode;
    }

    /**
     * @param string $UrsaSuffixCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setUrsaSuffixCode($UrsaSuffixCode)
    {
      $this->UrsaSuffixCode = $UrsaSuffixCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginLocationId()
    {
      return $this->OriginLocationId;
    }

    /**
     * @param string $OriginLocationId
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setOriginLocationId($OriginLocationId)
    {
      $this->OriginLocationId = $OriginLocationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginLocationNumber()
    {
      return $this->OriginLocationNumber;
    }

    /**
     * @param int $OriginLocationNumber
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setOriginLocationNumber($OriginLocationNumber)
    {
      $this->OriginLocationNumber = $OriginLocationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginServiceArea()
    {
      return $this->OriginServiceArea;
    }

    /**
     * @param string $OriginServiceArea
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setOriginServiceArea($OriginServiceArea)
    {
      $this->OriginServiceArea = $OriginServiceArea;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationLocationId()
    {
      return $this->DestinationLocationId;
    }

    /**
     * @param string $DestinationLocationId
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setDestinationLocationId($DestinationLocationId)
    {
      $this->DestinationLocationId = $DestinationLocationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestinationLocationNumber()
    {
      return $this->DestinationLocationNumber;
    }

    /**
     * @param int $DestinationLocationNumber
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setDestinationLocationNumber($DestinationLocationNumber)
    {
      $this->DestinationLocationNumber = $DestinationLocationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationServiceArea()
    {
      return $this->DestinationServiceArea;
    }

    /**
     * @param string $DestinationServiceArea
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setDestinationServiceArea($DestinationServiceArea)
    {
      $this->DestinationServiceArea = $DestinationServiceArea;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationLocationStateOrProvinceCode()
    {
      return $this->DestinationLocationStateOrProvinceCode;
    }

    /**
     * @param string $DestinationLocationStateOrProvinceCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setDestinationLocationStateOrProvinceCode($DestinationLocationStateOrProvinceCode)
    {
      $this->DestinationLocationStateOrProvinceCode = $DestinationLocationStateOrProvinceCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getDeliveryDate()
    {
      return $this->DeliveryDate;
    }

    /**
     * @param date $DeliveryDate
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setDeliveryDate($DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate;
      return $this;
    }

    /**
     * @return DayOfWeekType
     */
    public function getDeliveryDay()
    {
      return $this->DeliveryDay;
    }

    /**
     * @param DayOfWeekType $DeliveryDay
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setDeliveryDay($DeliveryDay)
    {
      $this->DeliveryDay = $DeliveryDay;
      return $this;
    }

    /**
     * @return time
     */
    public function getPublishedDeliveryTime()
    {
      return $this->PublishedDeliveryTime;
    }

    /**
     * @param time $PublishedDeliveryTime
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setPublishedDeliveryTime($PublishedDeliveryTime)
    {
      $this->PublishedDeliveryTime = $PublishedDeliveryTime;
      return $this;
    }

    /**
     * @return date
     */
    public function getCommitDate()
    {
      return $this->CommitDate;
    }

    /**
     * @param date $CommitDate
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setCommitDate($CommitDate)
    {
      $this->CommitDate = $CommitDate;
      return $this;
    }

    /**
     * @return DayOfWeekType
     */
    public function getCommitDay()
    {
      return $this->CommitDay;
    }

    /**
     * @param DayOfWeekType $CommitDay
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setCommitDay($CommitDay)
    {
      $this->CommitDay = $CommitDay;
      return $this;
    }

    /**
     * @return TransitTimeType
     */
    public function getTransitTime()
    {
      return $this->TransitTime;
    }

    /**
     * @param TransitTimeType $TransitTime
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setTransitTime($TransitTime)
    {
      $this->TransitTime = $TransitTime;
      return $this;
    }

    /**
     * @return TransitTimeType
     */
    public function getMaximumTransitTime()
    {
      return $this->MaximumTransitTime;
    }

    /**
     * @param TransitTimeType $MaximumTransitTime
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setMaximumTransitTime($MaximumTransitTime)
    {
      $this->MaximumTransitTime = $MaximumTransitTime;
      return $this;
    }

    /**
     * @return TransitTimeType
     */
    public function getCustomTransitTime()
    {
      return $this->CustomTransitTime;
    }

    /**
     * @param TransitTimeType $CustomTransitTime
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setCustomTransitTime($CustomTransitTime)
    {
      $this->CustomTransitTime = $CustomTransitTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIneligibleForMoneyBackGuarantee()
    {
      return $this->IneligibleForMoneyBackGuarantee;
    }

    /**
     * @param boolean $IneligibleForMoneyBackGuarantee
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setIneligibleForMoneyBackGuarantee($IneligibleForMoneyBackGuarantee)
    {
      $this->IneligibleForMoneyBackGuarantee = $IneligibleForMoneyBackGuarantee;
      return $this;
    }

    /**
     * @return GroundDeliveryEligibilityType[]
     */
    public function getDeliveryEligibilities()
    {
      return $this->DeliveryEligibilities;
    }

    /**
     * @param GroundDeliveryEligibilityType[] $DeliveryEligibilities
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setDeliveryEligibilities(array $DeliveryEligibilities)
    {
      $this->DeliveryEligibilities = $DeliveryEligibilities;
      return $this;
    }

    /**
     * @return string
     */
    public function getAstraPlannedServiceLevel()
    {
      return $this->AstraPlannedServiceLevel;
    }

    /**
     * @param string $AstraPlannedServiceLevel
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setAstraPlannedServiceLevel($AstraPlannedServiceLevel)
    {
      $this->AstraPlannedServiceLevel = $AstraPlannedServiceLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getAstraDescription()
    {
      return $this->AstraDescription;
    }

    /**
     * @param string $AstraDescription
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setAstraDescription($AstraDescription)
    {
      $this->AstraDescription = $AstraDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvinceCode()
    {
      return $this->StateOrProvinceCode;
    }

    /**
     * @param string $StateOrProvinceCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setStateOrProvinceCode($StateOrProvinceCode)
    {
      $this->StateOrProvinceCode = $StateOrProvinceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirportId()
    {
      return $this->AirportId;
    }

    /**
     * @param string $AirportId
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setAirportId($AirportId)
    {
      $this->AirportId = $AirportId;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
      return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackagingCode()
    {
      return $this->PackagingCode;
    }

    /**
     * @param string $PackagingCode
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setPackagingCode($PackagingCode)
    {
      $this->PackagingCode = $PackagingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getScac()
    {
      return $this->Scac;
    }

    /**
     * @param string $Scac
     * @return \FedexApiClass\Lib\ShipmentOperationalDetail
     */
    public function setScac($Scac)
    {
      $this->Scac = $Scac;
      return $this;
    }

}

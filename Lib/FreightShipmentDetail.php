<?php

namespace FedexApiClass\Lib;

class FreightShipmentDetail
{

    /**
     * @var string $FedExFreightAccountNumber
     */
    protected $FedExFreightAccountNumber = null;

    /**
     * @var ContactAndAddress $FedExFreightBillingContactAndAddress
     */
    protected $FedExFreightBillingContactAndAddress = null;

    /**
     * @var Party $AlternateBilling
     */
    protected $AlternateBilling = null;

    /**
     * @var PrintedReference[] $PrintedReferences
     */
    protected $PrintedReferences = null;

    /**
     * @var FreightShipmentRoleType $Role
     */
    protected $Role = null;

    /**
     * @var FreightCollectTermsType $CollectTermsType
     */
    protected $CollectTermsType = null;

    /**
     * @var Money $DeclaredValuePerUnit
     */
    protected $DeclaredValuePerUnit = null;

    /**
     * @var string $DeclaredValueUnits
     */
    protected $DeclaredValueUnits = null;

    /**
     * @var LiabilityCoverageDetail $LiabilityCoverageDetail
     */
    protected $LiabilityCoverageDetail = null;

    /**
     * @var string[] $Coupons
     */
    protected $Coupons = null;

    /**
     * @var int $TotalHandlingUnits
     */
    protected $TotalHandlingUnits = null;

    /**
     * @var float $ClientDiscountPercent
     */
    protected $ClientDiscountPercent = null;

    /**
     * @var Weight $PalletWeight
     */
    protected $PalletWeight = null;

    /**
     * @var Dimensions $ShipmentDimensions
     */
    protected $ShipmentDimensions = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var FreightSpecialServicePayment[] $SpecialServicePayments
     */
    protected $SpecialServicePayments = null;

    /**
     * @var string $HazardousMaterialsEmergencyContactNumber
     */
    protected $HazardousMaterialsEmergencyContactNumber = null;

    /**
     * @var string $HazardousMaterialsOfferor
     */
    protected $HazardousMaterialsOfferor = null;

    /**
     * @var FreightShipmentLineItem[] $LineItems
     */
    protected $LineItems = null;

    /**
     * @param string $FedExFreightAccountNumber
     * @param ContactAndAddress $FedExFreightBillingContactAndAddress
     * @param Party $AlternateBilling
     * @param PrintedReference[] $PrintedReferences
     * @param FreightShipmentRoleType $Role
     * @param FreightCollectTermsType $CollectTermsType
     * @param Money $DeclaredValuePerUnit
     * @param string $DeclaredValueUnits
     * @param LiabilityCoverageDetail $LiabilityCoverageDetail
     * @param string[] $Coupons
     * @param int $TotalHandlingUnits
     * @param float $ClientDiscountPercent
     * @param Weight $PalletWeight
     * @param Dimensions $ShipmentDimensions
     * @param string $Comment
     * @param FreightSpecialServicePayment[] $SpecialServicePayments
     * @param string $HazardousMaterialsEmergencyContactNumber
     * @param string $HazardousMaterialsOfferor
     * @param FreightShipmentLineItem[] $LineItems
     */
    public function __construct($FedExFreightAccountNumber = null, $FedExFreightBillingContactAndAddress = null, $AlternateBilling = null, array $PrintedReferences = null, $Role = null, $CollectTermsType = null, $DeclaredValuePerUnit = null, $DeclaredValueUnits = null, $LiabilityCoverageDetail = null, array $Coupons = null, $TotalHandlingUnits = null, $ClientDiscountPercent = null, $PalletWeight = null, $ShipmentDimensions = null, $Comment = null, array $SpecialServicePayments = null, $HazardousMaterialsEmergencyContactNumber = null, $HazardousMaterialsOfferor = null, array $LineItems = null)
    {
      $this->FedExFreightAccountNumber = $FedExFreightAccountNumber;
      $this->FedExFreightBillingContactAndAddress = $FedExFreightBillingContactAndAddress;
      $this->AlternateBilling = $AlternateBilling;
      $this->PrintedReferences = $PrintedReferences;
      $this->Role = $Role;
      $this->CollectTermsType = $CollectTermsType;
      $this->DeclaredValuePerUnit = $DeclaredValuePerUnit;
      $this->DeclaredValueUnits = $DeclaredValueUnits;
      $this->LiabilityCoverageDetail = $LiabilityCoverageDetail;
      $this->Coupons = $Coupons;
      $this->TotalHandlingUnits = $TotalHandlingUnits;
      $this->ClientDiscountPercent = $ClientDiscountPercent;
      $this->PalletWeight = $PalletWeight;
      $this->ShipmentDimensions = $ShipmentDimensions;
      $this->Comment = $Comment;
      $this->SpecialServicePayments = $SpecialServicePayments;
      $this->HazardousMaterialsEmergencyContactNumber = $HazardousMaterialsEmergencyContactNumber;
      $this->HazardousMaterialsOfferor = $HazardousMaterialsOfferor;
      $this->LineItems = $LineItems;
    }

    /**
     * @return string
     */
    public function getFedExFreightAccountNumber()
    {
      return $this->FedExFreightAccountNumber;
    }

    /**
     * @param string $FedExFreightAccountNumber
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($FedExFreightAccountNumber)
    {
      $this->FedExFreightAccountNumber = $FedExFreightAccountNumber;
      return $this;
    }

    /**
     * @return ContactAndAddress
     */
    public function getFedExFreightBillingContactAndAddress()
    {
      return $this->FedExFreightBillingContactAndAddress;
    }

    /**
     * @param ContactAndAddress $FedExFreightBillingContactAndAddress
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress($FedExFreightBillingContactAndAddress)
    {
      $this->FedExFreightBillingContactAndAddress = $FedExFreightBillingContactAndAddress;
      return $this;
    }

    /**
     * @return Party
     */
    public function getAlternateBilling()
    {
      return $this->AlternateBilling;
    }

    /**
     * @param Party $AlternateBilling
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setAlternateBilling($AlternateBilling)
    {
      $this->AlternateBilling = $AlternateBilling;
      return $this;
    }

    /**
     * @return PrintedReference[]
     */
    public function getPrintedReferences()
    {
      return $this->PrintedReferences;
    }

    /**
     * @param PrintedReference[] $PrintedReferences
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setPrintedReferences(array $PrintedReferences)
    {
      $this->PrintedReferences = $PrintedReferences;
      return $this;
    }

    /**
     * @return FreightShipmentRoleType
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param FreightShipmentRoleType $Role
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

    /**
     * @return FreightCollectTermsType
     */
    public function getCollectTermsType()
    {
      return $this->CollectTermsType;
    }

    /**
     * @param FreightCollectTermsType $CollectTermsType
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setCollectTermsType($CollectTermsType)
    {
      $this->CollectTermsType = $CollectTermsType;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDeclaredValuePerUnit()
    {
      return $this->DeclaredValuePerUnit;
    }

    /**
     * @param Money $DeclaredValuePerUnit
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit($DeclaredValuePerUnit)
    {
      $this->DeclaredValuePerUnit = $DeclaredValuePerUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeclaredValueUnits()
    {
      return $this->DeclaredValueUnits;
    }

    /**
     * @param string $DeclaredValueUnits
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setDeclaredValueUnits($DeclaredValueUnits)
    {
      $this->DeclaredValueUnits = $DeclaredValueUnits;
      return $this;
    }

    /**
     * @return LiabilityCoverageDetail
     */
    public function getLiabilityCoverageDetail()
    {
      return $this->LiabilityCoverageDetail;
    }

    /**
     * @param LiabilityCoverageDetail $LiabilityCoverageDetail
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail($LiabilityCoverageDetail)
    {
      $this->LiabilityCoverageDetail = $LiabilityCoverageDetail;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCoupons()
    {
      return $this->Coupons;
    }

    /**
     * @param string[] $Coupons
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setCoupons(array $Coupons)
    {
      $this->Coupons = $Coupons;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalHandlingUnits()
    {
      return $this->TotalHandlingUnits;
    }

    /**
     * @param int $TotalHandlingUnits
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setTotalHandlingUnits($TotalHandlingUnits)
    {
      $this->TotalHandlingUnits = $TotalHandlingUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getClientDiscountPercent()
    {
      return $this->ClientDiscountPercent;
    }

    /**
     * @param float $ClientDiscountPercent
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setClientDiscountPercent($ClientDiscountPercent)
    {
      $this->ClientDiscountPercent = $ClientDiscountPercent;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getPalletWeight()
    {
      return $this->PalletWeight;
    }

    /**
     * @param Weight $PalletWeight
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setPalletWeight($PalletWeight)
    {
      $this->PalletWeight = $PalletWeight;
      return $this;
    }

    /**
     * @return Dimensions
     */
    public function getShipmentDimensions()
    {
      return $this->ShipmentDimensions;
    }

    /**
     * @param Dimensions $ShipmentDimensions
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setShipmentDimensions($ShipmentDimensions)
    {
      $this->ShipmentDimensions = $ShipmentDimensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return FreightSpecialServicePayment[]
     */
    public function getSpecialServicePayments()
    {
      return $this->SpecialServicePayments;
    }

    /**
     * @param FreightSpecialServicePayment[] $SpecialServicePayments
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setSpecialServicePayments(array $SpecialServicePayments)
    {
      $this->SpecialServicePayments = $SpecialServicePayments;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazardousMaterialsEmergencyContactNumber()
    {
      return $this->HazardousMaterialsEmergencyContactNumber;
    }

    /**
     * @param string $HazardousMaterialsEmergencyContactNumber
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($HazardousMaterialsEmergencyContactNumber)
    {
      $this->HazardousMaterialsEmergencyContactNumber = $HazardousMaterialsEmergencyContactNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazardousMaterialsOfferor()
    {
      return $this->HazardousMaterialsOfferor;
    }

    /**
     * @param string $HazardousMaterialsOfferor
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setHazardousMaterialsOfferor($HazardousMaterialsOfferor)
    {
      $this->HazardousMaterialsOfferor = $HazardousMaterialsOfferor;
      return $this;
    }

    /**
     * @return FreightShipmentLineItem[]
     */
    public function getLineItems()
    {
      return $this->LineItems;
    }

    /**
     * @param FreightShipmentLineItem[] $LineItems
     * @return \FedexApiClass\Lib\FreightShipmentDetail
     */
    public function setLineItems(array $LineItems)
    {
      $this->LineItems = $LineItems;
      return $this;
    }

}

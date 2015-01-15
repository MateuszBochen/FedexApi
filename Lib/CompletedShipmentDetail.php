<?php

namespace FedexApi\Lib;

class CompletedShipmentDetail
{

    /**
     * @var boolean $UsDomestic
     */
    protected $UsDomestic = null;

    /**
     * @var CarrierCodeType $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var TrackingId $MasterTrackingId
     */
    protected $MasterTrackingId = null;

    /**
     * @var string $ServiceTypeDescription
     */
    protected $ServiceTypeDescription = null;

    /**
     * @var string $PackagingDescription
     */
    protected $PackagingDescription = null;

    /**
     * @var ShipmentOperationalDetail $OperationalDetail
     */
    protected $OperationalDetail = null;

    /**
     * @var PendingShipmentAccessDetail $AccessDetail
     */
    protected $AccessDetail = null;

    /**
     * @var CompletedTagDetail $TagDetail
     */
    protected $TagDetail = null;

    /**
     * @var CompletedSmartPostDetail $SmartPostDetail
     */
    protected $SmartPostDetail = null;

    /**
     * @var CompletedHazardousShipmentDetail $HazardousShipmentDetail
     */
    protected $HazardousShipmentDetail = null;

    /**
     * @var ShipmentRating $ShipmentRating
     */
    protected $ShipmentRating = null;

    /**
     * @var CompletedHoldAtLocationDetail $CompletedHoldAtLocationDetail
     */
    protected $CompletedHoldAtLocationDetail = null;

    /**
     * @var string $ExportComplianceStatement
     */
    protected $ExportComplianceStatement = null;

    /**
     * @var CompletedEtdDetail $CompletedEtdDetail
     */
    protected $CompletedEtdDetail = null;

    /**
     * @var ShippingDocument[] $ShipmentDocuments
     */
    protected $ShipmentDocuments = null;

    /**
     * @var AssociatedShipmentDetail[] $AssociatedShipments
     */
    protected $AssociatedShipments = null;

    /**
     * @var CompletedCodDetail $CompletedCodDetail
     */
    protected $CompletedCodDetail = null;

    /**
     * @var CompletedPackageDetail[] $CompletedPackageDetails
     */
    protected $CompletedPackageDetails = null;

    /**
     * @param boolean $UsDomestic
     * @param CarrierCodeType $CarrierCode
     * @param TrackingId $MasterTrackingId
     * @param string $ServiceTypeDescription
     * @param string $PackagingDescription
     * @param ShipmentOperationalDetail $OperationalDetail
     * @param PendingShipmentAccessDetail $AccessDetail
     * @param CompletedTagDetail $TagDetail
     * @param CompletedSmartPostDetail $SmartPostDetail
     * @param CompletedHazardousShipmentDetail $HazardousShipmentDetail
     * @param ShipmentRating $ShipmentRating
     * @param CompletedHoldAtLocationDetail $CompletedHoldAtLocationDetail
     * @param string $ExportComplianceStatement
     * @param CompletedEtdDetail $CompletedEtdDetail
     * @param ShippingDocument[] $ShipmentDocuments
     * @param AssociatedShipmentDetail[] $AssociatedShipments
     * @param CompletedCodDetail $CompletedCodDetail
     * @param CompletedPackageDetail[] $CompletedPackageDetails
     */
    public function __construct($UsDomestic, $CarrierCode, $MasterTrackingId, $ServiceTypeDescription, $PackagingDescription, $OperationalDetail, $AccessDetail, $TagDetail, $SmartPostDetail, $HazardousShipmentDetail, $ShipmentRating, $CompletedHoldAtLocationDetail, $ExportComplianceStatement, $CompletedEtdDetail, array $ShipmentDocuments, array $AssociatedShipments, $CompletedCodDetail, array $CompletedPackageDetails)
    {
      $this->UsDomestic = $UsDomestic;
      $this->CarrierCode = $CarrierCode;
      $this->MasterTrackingId = $MasterTrackingId;
      $this->ServiceTypeDescription = $ServiceTypeDescription;
      $this->PackagingDescription = $PackagingDescription;
      $this->OperationalDetail = $OperationalDetail;
      $this->AccessDetail = $AccessDetail;
      $this->TagDetail = $TagDetail;
      $this->SmartPostDetail = $SmartPostDetail;
      $this->HazardousShipmentDetail = $HazardousShipmentDetail;
      $this->ShipmentRating = $ShipmentRating;
      $this->CompletedHoldAtLocationDetail = $CompletedHoldAtLocationDetail;
      $this->ExportComplianceStatement = $ExportComplianceStatement;
      $this->CompletedEtdDetail = $CompletedEtdDetail;
      $this->ShipmentDocuments = $ShipmentDocuments;
      $this->AssociatedShipments = $AssociatedShipments;
      $this->CompletedCodDetail = $CompletedCodDetail;
      $this->CompletedPackageDetails = $CompletedPackageDetails;
    }

    /**
     * @return boolean
     */
    public function getUsDomestic()
    {
      return $this->UsDomestic;
    }

    /**
     * @param boolean $UsDomestic
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setUsDomestic($UsDomestic)
    {
      $this->UsDomestic = $UsDomestic;
      return $this;
    }

    /**
     * @return CarrierCodeType
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param CarrierCodeType $CarrierCode
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return TrackingId
     */
    public function getMasterTrackingId()
    {
      return $this->MasterTrackingId;
    }

    /**
     * @param TrackingId $MasterTrackingId
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setMasterTrackingId($MasterTrackingId)
    {
      $this->MasterTrackingId = $MasterTrackingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceTypeDescription()
    {
      return $this->ServiceTypeDescription;
    }

    /**
     * @param string $ServiceTypeDescription
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setServiceTypeDescription($ServiceTypeDescription)
    {
      $this->ServiceTypeDescription = $ServiceTypeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackagingDescription()
    {
      return $this->PackagingDescription;
    }

    /**
     * @param string $PackagingDescription
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setPackagingDescription($PackagingDescription)
    {
      $this->PackagingDescription = $PackagingDescription;
      return $this;
    }

    /**
     * @return ShipmentOperationalDetail
     */
    public function getOperationalDetail()
    {
      return $this->OperationalDetail;
    }

    /**
     * @param ShipmentOperationalDetail $OperationalDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setOperationalDetail($OperationalDetail)
    {
      $this->OperationalDetail = $OperationalDetail;
      return $this;
    }

    /**
     * @return PendingShipmentAccessDetail
     */
    public function getAccessDetail()
    {
      return $this->AccessDetail;
    }

    /**
     * @param PendingShipmentAccessDetail $AccessDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setAccessDetail($AccessDetail)
    {
      $this->AccessDetail = $AccessDetail;
      return $this;
    }

    /**
     * @return CompletedTagDetail
     */
    public function getTagDetail()
    {
      return $this->TagDetail;
    }

    /**
     * @param CompletedTagDetail $TagDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setTagDetail($TagDetail)
    {
      $this->TagDetail = $TagDetail;
      return $this;
    }

    /**
     * @return CompletedSmartPostDetail
     */
    public function getSmartPostDetail()
    {
      return $this->SmartPostDetail;
    }

    /**
     * @param CompletedSmartPostDetail $SmartPostDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setSmartPostDetail($SmartPostDetail)
    {
      $this->SmartPostDetail = $SmartPostDetail;
      return $this;
    }

    /**
     * @return CompletedHazardousShipmentDetail
     */
    public function getHazardousShipmentDetail()
    {
      return $this->HazardousShipmentDetail;
    }

    /**
     * @param CompletedHazardousShipmentDetail $HazardousShipmentDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setHazardousShipmentDetail($HazardousShipmentDetail)
    {
      $this->HazardousShipmentDetail = $HazardousShipmentDetail;
      return $this;
    }

    /**
     * @return ShipmentRating
     */
    public function getShipmentRating()
    {
      return $this->ShipmentRating;
    }

    /**
     * @param ShipmentRating $ShipmentRating
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setShipmentRating($ShipmentRating)
    {
      $this->ShipmentRating = $ShipmentRating;
      return $this;
    }

    /**
     * @return CompletedHoldAtLocationDetail
     */
    public function getCompletedHoldAtLocationDetail()
    {
      return $this->CompletedHoldAtLocationDetail;
    }

    /**
     * @param CompletedHoldAtLocationDetail $CompletedHoldAtLocationDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setCompletedHoldAtLocationDetail($CompletedHoldAtLocationDetail)
    {
      $this->CompletedHoldAtLocationDetail = $CompletedHoldAtLocationDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportComplianceStatement()
    {
      return $this->ExportComplianceStatement;
    }

    /**
     * @param string $ExportComplianceStatement
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setExportComplianceStatement($ExportComplianceStatement)
    {
      $this->ExportComplianceStatement = $ExportComplianceStatement;
      return $this;
    }

    /**
     * @return CompletedEtdDetail
     */
    public function getCompletedEtdDetail()
    {
      return $this->CompletedEtdDetail;
    }

    /**
     * @param CompletedEtdDetail $CompletedEtdDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setCompletedEtdDetail($CompletedEtdDetail)
    {
      $this->CompletedEtdDetail = $CompletedEtdDetail;
      return $this;
    }

    /**
     * @return ShippingDocument[]
     */
    public function getShipmentDocuments()
    {
      return $this->ShipmentDocuments;
    }

    /**
     * @param ShippingDocument[] $ShipmentDocuments
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setShipmentDocuments(array $ShipmentDocuments)
    {
      $this->ShipmentDocuments = $ShipmentDocuments;
      return $this;
    }

    /**
     * @return AssociatedShipmentDetail[]
     */
    public function getAssociatedShipments()
    {
      return $this->AssociatedShipments;
    }

    /**
     * @param AssociatedShipmentDetail[] $AssociatedShipments
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setAssociatedShipments(array $AssociatedShipments)
    {
      $this->AssociatedShipments = $AssociatedShipments;
      return $this;
    }

    /**
     * @return CompletedCodDetail
     */
    public function getCompletedCodDetail()
    {
      return $this->CompletedCodDetail;
    }

    /**
     * @param CompletedCodDetail $CompletedCodDetail
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setCompletedCodDetail($CompletedCodDetail)
    {
      $this->CompletedCodDetail = $CompletedCodDetail;
      return $this;
    }

    /**
     * @return CompletedPackageDetail[]
     */
    public function getCompletedPackageDetails()
    {
      return $this->CompletedPackageDetails;
    }

    /**
     * @param CompletedPackageDetail[] $CompletedPackageDetails
     * @return \FedexApi\Lib\CompletedShipmentDetail
     */
    public function setCompletedPackageDetails(array $CompletedPackageDetails)
    {
      $this->CompletedPackageDetails = $CompletedPackageDetails;
      return $this;
    }

}

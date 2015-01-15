<?php

namespace FedexApiClass\Lib;

class RequestedShipment
{

    /**
     * @var \DateTime $ShipTimestamp
     */
    protected $ShipTimestamp = null;

    /**
     * @var DropoffType $DropoffType
     */
    protected $DropoffType = null;

    /**
     * @var ServiceType $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var PackagingType $PackagingType
     */
    protected $PackagingType = null;

    /**
     * @var ShipmentManifestDetail $ManifestDetail
     */
    protected $ManifestDetail = null;

    /**
     * @var Weight $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var Money $TotalInsuredValue
     */
    protected $TotalInsuredValue = null;

    /**
     * @var string $PreferredCurrency
     */
    protected $PreferredCurrency = null;

    /**
     * @var Party $Shipper
     */
    protected $Shipper = null;

    /**
     * @var Party $Recipient
     */
    protected $Recipient = null;

    /**
     * @var string $RecipientLocationNumber
     */
    protected $RecipientLocationNumber = null;

    /**
     * @var ContactAndAddress $Origin
     */
    protected $Origin = null;

    /**
     * @var Party $SoldTo
     */
    protected $SoldTo = null;

    /**
     * @var Payment $ShippingChargesPayment
     */
    protected $ShippingChargesPayment = null;

    /**
     * @var ShipmentSpecialServicesRequested $SpecialServicesRequested
     */
    protected $SpecialServicesRequested = null;

    /**
     * @var ExpressFreightDetail $ExpressFreightDetail
     */
    protected $ExpressFreightDetail = null;

    /**
     * @var FreightShipmentDetail $FreightShipmentDetail
     */
    protected $FreightShipmentDetail = null;

    /**
     * @var string $DeliveryInstructions
     */
    protected $DeliveryInstructions = null;

    /**
     * @var VariableHandlingChargeDetail $VariableHandlingChargeDetail
     */
    protected $VariableHandlingChargeDetail = null;

    /**
     * @var CustomsClearanceDetail $CustomsClearanceDetail
     */
    protected $CustomsClearanceDetail = null;

    /**
     * @var PickupDetail $PickupDetail
     */
    protected $PickupDetail = null;

    /**
     * @var SmartPostShipmentDetail $SmartPostDetail
     */
    protected $SmartPostDetail = null;

    /**
     * @var boolean $BlockInsightVisibility
     */
    protected $BlockInsightVisibility = null;

    /**
     * @var LabelSpecification $LabelSpecification
     */
    protected $LabelSpecification = null;

    /**
     * @var ShippingDocumentSpecification $ShippingDocumentSpecification
     */
    protected $ShippingDocumentSpecification = null;

    /**
     * @var RateRequestType[] $RateRequestTypes
     */
    protected $RateRequestTypes = null;

    /**
     * @var EdtRequestType $EdtRequestType
     */
    protected $EdtRequestType = null;

    /**
     * @var TrackingId $MasterTrackingId
     */
    protected $MasterTrackingId = null;

    /**
     * @var int $PackageCount
     */
    protected $PackageCount = null;

    /**
     * @var ShipmentConfigurationData $ConfigurationData
     */
    protected $ConfigurationData = null;

    /**
     * @var RequestedPackageLineItem $RequestedPackageLineItems
     */
    protected $RequestedPackageLineItems = null;

    /**
     * @param \DateTime $ShipTimestamp
     * @param DropoffType $DropoffType
     * @param ServiceType $ServiceType
     * @param PackagingType $PackagingType
     * @param ShipmentManifestDetail $ManifestDetail
     * @param Weight $TotalWeight
     * @param Money $TotalInsuredValue
     * @param string $PreferredCurrency
     * @param Party $Shipper
     * @param Party $Recipient
     * @param string $RecipientLocationNumber
     * @param ContactAndAddress $Origin
     * @param Party $SoldTo
     * @param Payment $ShippingChargesPayment
     * @param ShipmentSpecialServicesRequested $SpecialServicesRequested
     * @param ExpressFreightDetail $ExpressFreightDetail
     * @param FreightShipmentDetail $FreightShipmentDetail
     * @param string $DeliveryInstructions
     * @param VariableHandlingChargeDetail $VariableHandlingChargeDetail
     * @param CustomsClearanceDetail $CustomsClearanceDetail
     * @param PickupDetail $PickupDetail
     * @param SmartPostShipmentDetail $SmartPostDetail
     * @param boolean $BlockInsightVisibility
     * @param LabelSpecification $LabelSpecification
     * @param ShippingDocumentSpecification $ShippingDocumentSpecification
     * @param RateRequestType[] $RateRequestTypes
     * @param EdtRequestType $EdtRequestType
     * @param TrackingId $MasterTrackingId
     * @param int $PackageCount
     * @param ShipmentConfigurationData $ConfigurationData
     * @param RequestedPackageLineItem $RequestedPackageLineItems
     */
    public function __construct(\DateTime $ShipTimestamp, $DropoffType, $ServiceType, $PackagingType, $ManifestDetail, $TotalWeight, $TotalInsuredValue, $PreferredCurrency, $Shipper, $Recipient, $RecipientLocationNumber, $Origin, $SoldTo, $ShippingChargesPayment, $SpecialServicesRequested, $ExpressFreightDetail, $FreightShipmentDetail, $DeliveryInstructions, $VariableHandlingChargeDetail, $CustomsClearanceDetail, $PickupDetail, $SmartPostDetail, $BlockInsightVisibility, $LabelSpecification, $ShippingDocumentSpecification, array $RateRequestTypes, $EdtRequestType, $MasterTrackingId, $PackageCount, $ConfigurationData, $RequestedPackageLineItems)
    {
      $this->ShipTimestamp = $ShipTimestamp->format(\DateTime::ATOM);
      $this->DropoffType = $DropoffType;
      $this->ServiceType = $ServiceType;
      $this->PackagingType = $PackagingType;
      $this->ManifestDetail = $ManifestDetail;
      $this->TotalWeight = $TotalWeight;
      $this->TotalInsuredValue = $TotalInsuredValue;
      $this->PreferredCurrency = $PreferredCurrency;
      $this->Shipper = $Shipper;
      $this->Recipient = $Recipient;
      $this->RecipientLocationNumber = $RecipientLocationNumber;
      $this->Origin = $Origin;
      $this->SoldTo = $SoldTo;
      $this->ShippingChargesPayment = $ShippingChargesPayment;
      $this->SpecialServicesRequested = $SpecialServicesRequested;
      $this->ExpressFreightDetail = $ExpressFreightDetail;
      $this->FreightShipmentDetail = $FreightShipmentDetail;
      $this->DeliveryInstructions = $DeliveryInstructions;
      $this->VariableHandlingChargeDetail = $VariableHandlingChargeDetail;
      $this->CustomsClearanceDetail = $CustomsClearanceDetail;
      $this->PickupDetail = $PickupDetail;
      $this->SmartPostDetail = $SmartPostDetail;
      $this->BlockInsightVisibility = $BlockInsightVisibility;
      $this->LabelSpecification = $LabelSpecification;
      $this->ShippingDocumentSpecification = $ShippingDocumentSpecification;
      $this->RateRequestTypes = $RateRequestTypes;
      $this->EdtRequestType = $EdtRequestType;
      $this->MasterTrackingId = $MasterTrackingId;
      $this->PackageCount = $PackageCount;
      $this->ConfigurationData = $ConfigurationData;
      $this->RequestedPackageLineItems = $RequestedPackageLineItems;
    }

    /**
     * @return \DateTime
     */
    public function getShipTimestamp()
    {
      if ($this->ShipTimestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipTimestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipTimestamp
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setShipTimestamp(\DateTime $ShipTimestamp)
    {
      $this->ShipTimestamp = $ShipTimestamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return DropoffType
     */
    public function getDropoffType()
    {
      return $this->DropoffType;
    }

    /**
     * @param DropoffType $DropoffType
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setDropoffType($DropoffType)
    {
      $this->DropoffType = $DropoffType;
      return $this;
    }

    /**
     * @return ServiceType
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param ServiceType $ServiceType
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return PackagingType
     */
    public function getPackagingType()
    {
      return $this->PackagingType;
    }

    /**
     * @param PackagingType $PackagingType
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setPackagingType($PackagingType)
    {
      $this->PackagingType = $PackagingType;
      return $this;
    }

    /**
     * @return ShipmentManifestDetail
     */
    public function getManifestDetail()
    {
      return $this->ManifestDetail;
    }

    /**
     * @param ShipmentManifestDetail $ManifestDetail
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setManifestDetail($ManifestDetail)
    {
      $this->ManifestDetail = $ManifestDetail;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getTotalWeight()
    {
      return $this->TotalWeight;
    }

    /**
     * @param Weight $TotalWeight
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalInsuredValue()
    {
      return $this->TotalInsuredValue;
    }

    /**
     * @param Money $TotalInsuredValue
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setTotalInsuredValue($TotalInsuredValue)
    {
      $this->TotalInsuredValue = $TotalInsuredValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredCurrency()
    {
      return $this->PreferredCurrency;
    }

    /**
     * @param string $PreferredCurrency
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setPreferredCurrency($PreferredCurrency)
    {
      $this->PreferredCurrency = $PreferredCurrency;
      return $this;
    }

    /**
     * @return Party
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param Party $Shipper
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return Party
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param Party $Recipient
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientLocationNumber()
    {
      return $this->RecipientLocationNumber;
    }

    /**
     * @param string $RecipientLocationNumber
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setRecipientLocationNumber($RecipientLocationNumber)
    {
      $this->RecipientLocationNumber = $RecipientLocationNumber;
      return $this;
    }

    /**
     * @return ContactAndAddress
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param ContactAndAddress $Origin
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return Party
     */
    public function getSoldTo()
    {
      return $this->SoldTo;
    }

    /**
     * @param Party $SoldTo
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setSoldTo($SoldTo)
    {
      $this->SoldTo = $SoldTo;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getShippingChargesPayment()
    {
      return $this->ShippingChargesPayment;
    }

    /**
     * @param Payment $ShippingChargesPayment
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setShippingChargesPayment($ShippingChargesPayment)
    {
      $this->ShippingChargesPayment = $ShippingChargesPayment;
      return $this;
    }

    /**
     * @return ShipmentSpecialServicesRequested
     */
    public function getSpecialServicesRequested()
    {
      return $this->SpecialServicesRequested;
    }

    /**
     * @param ShipmentSpecialServicesRequested $SpecialServicesRequested
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setSpecialServicesRequested($SpecialServicesRequested)
    {
      $this->SpecialServicesRequested = $SpecialServicesRequested;
      return $this;
    }

    /**
     * @return ExpressFreightDetail
     */
    public function getExpressFreightDetail()
    {
      return $this->ExpressFreightDetail;
    }

    /**
     * @param ExpressFreightDetail $ExpressFreightDetail
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setExpressFreightDetail($ExpressFreightDetail)
    {
      $this->ExpressFreightDetail = $ExpressFreightDetail;
      return $this;
    }

    /**
     * @return FreightShipmentDetail
     */
    public function getFreightShipmentDetail()
    {
      return $this->FreightShipmentDetail;
    }

    /**
     * @param FreightShipmentDetail $FreightShipmentDetail
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setFreightShipmentDetail($FreightShipmentDetail)
    {
      $this->FreightShipmentDetail = $FreightShipmentDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryInstructions()
    {
      return $this->DeliveryInstructions;
    }

    /**
     * @param string $DeliveryInstructions
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setDeliveryInstructions($DeliveryInstructions)
    {
      $this->DeliveryInstructions = $DeliveryInstructions;
      return $this;
    }

    /**
     * @return VariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
      return $this->VariableHandlingChargeDetail;
    }

    /**
     * @param VariableHandlingChargeDetail $VariableHandlingChargeDetail
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setVariableHandlingChargeDetail($VariableHandlingChargeDetail)
    {
      $this->VariableHandlingChargeDetail = $VariableHandlingChargeDetail;
      return $this;
    }

    /**
     * @return CustomsClearanceDetail
     */
    public function getCustomsClearanceDetail()
    {
      return $this->CustomsClearanceDetail;
    }

    /**
     * @param CustomsClearanceDetail $CustomsClearanceDetail
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setCustomsClearanceDetail($CustomsClearanceDetail)
    {
      $this->CustomsClearanceDetail = $CustomsClearanceDetail;
      return $this;
    }

    /**
     * @return PickupDetail
     */
    public function getPickupDetail()
    {
      return $this->PickupDetail;
    }

    /**
     * @param PickupDetail $PickupDetail
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setPickupDetail($PickupDetail)
    {
      $this->PickupDetail = $PickupDetail;
      return $this;
    }

    /**
     * @return SmartPostShipmentDetail
     */
    public function getSmartPostDetail()
    {
      return $this->SmartPostDetail;
    }

    /**
     * @param SmartPostShipmentDetail $SmartPostDetail
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setSmartPostDetail($SmartPostDetail)
    {
      $this->SmartPostDetail = $SmartPostDetail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBlockInsightVisibility()
    {
      return $this->BlockInsightVisibility;
    }

    /**
     * @param boolean $BlockInsightVisibility
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setBlockInsightVisibility($BlockInsightVisibility)
    {
      $this->BlockInsightVisibility = $BlockInsightVisibility;
      return $this;
    }

    /**
     * @return LabelSpecification
     */
    public function getLabelSpecification()
    {
      return $this->LabelSpecification;
    }

    /**
     * @param LabelSpecification $LabelSpecification
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setLabelSpecification($LabelSpecification)
    {
      $this->LabelSpecification = $LabelSpecification;
      return $this;
    }

    /**
     * @return ShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification()
    {
      return $this->ShippingDocumentSpecification;
    }

    /**
     * @param ShippingDocumentSpecification $ShippingDocumentSpecification
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setShippingDocumentSpecification($ShippingDocumentSpecification)
    {
      $this->ShippingDocumentSpecification = $ShippingDocumentSpecification;
      return $this;
    }

    /**
     * @return RateRequestType[]
     */
    public function getRateRequestTypes()
    {
      return $this->RateRequestTypes;
    }

    /**
     * @param RateRequestType[] $RateRequestTypes
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setRateRequestTypes(array $RateRequestTypes)
    {
      $this->RateRequestTypes = $RateRequestTypes;
      return $this;
    }

    /**
     * @return EdtRequestType
     */
    public function getEdtRequestType()
    {
      return $this->EdtRequestType;
    }

    /**
     * @param EdtRequestType $EdtRequestType
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setEdtRequestType($EdtRequestType)
    {
      $this->EdtRequestType = $EdtRequestType;
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
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setMasterTrackingId($MasterTrackingId)
    {
      $this->MasterTrackingId = $MasterTrackingId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageCount()
    {
      return $this->PackageCount;
    }

    /**
     * @param int $PackageCount
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setPackageCount($PackageCount)
    {
      $this->PackageCount = $PackageCount;
      return $this;
    }

    /**
     * @return ShipmentConfigurationData
     */
    public function getConfigurationData()
    {
      return $this->ConfigurationData;
    }

    /**
     * @param ShipmentConfigurationData $ConfigurationData
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setConfigurationData($ConfigurationData)
    {
      $this->ConfigurationData = $ConfigurationData;
      return $this;
    }

    /**
     * @return RequestedPackageLineItem
     */
    public function getRequestedPackageLineItems()
    {
      return $this->RequestedPackageLineItems;
    }

    /**
     * @param RequestedPackageLineItem $RequestedPackageLineItems
     * @return \FedexApiClass\Lib\RequestedShipment
     */
    public function setRequestedPackageLineItems($RequestedPackageLineItems)
    {
      $this->RequestedPackageLineItems = $RequestedPackageLineItems;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class AssociatedShipmentDetail
{

    /**
     * @var AssociatedShipmentType $Type
     */
    protected $Type = null;

    /**
     * @var Party $Sender
     */
    protected $Sender = null;

    /**
     * @var Party $Recipient
     */
    protected $Recipient = null;

    /**
     * @var ServiceType $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var PackagingType $PackagingType
     */
    protected $PackagingType = null;

    /**
     * @var TrackingId $TrackingId
     */
    protected $TrackingId = null;

    /**
     * @var CustomerReference[] $CustomerReferences
     */
    protected $CustomerReferences = null;

    /**
     * @var ShipmentOperationalDetail $ShipmentOperationalDetail
     */
    protected $ShipmentOperationalDetail = null;

    /**
     * @var PackageOperationalDetail $PackageOperationalDetail
     */
    protected $PackageOperationalDetail = null;

    /**
     * @var ShippingDocument $Label
     */
    protected $Label = null;

    /**
     * @param AssociatedShipmentType $Type
     * @param Party $Sender
     * @param Party $Recipient
     * @param ServiceType $ServiceType
     * @param PackagingType $PackagingType
     * @param TrackingId $TrackingId
     * @param CustomerReference[] $CustomerReferences
     * @param ShipmentOperationalDetail $ShipmentOperationalDetail
     * @param PackageOperationalDetail $PackageOperationalDetail
     * @param ShippingDocument $Label
     */
    public function __construct($Type, $Sender, $Recipient, $ServiceType, $PackagingType, $TrackingId, array $CustomerReferences, $ShipmentOperationalDetail, $PackageOperationalDetail, $Label)
    {
      $this->Type = $Type;
      $this->Sender = $Sender;
      $this->Recipient = $Recipient;
      $this->ServiceType = $ServiceType;
      $this->PackagingType = $PackagingType;
      $this->TrackingId = $TrackingId;
      $this->CustomerReferences = $CustomerReferences;
      $this->ShipmentOperationalDetail = $ShipmentOperationalDetail;
      $this->PackageOperationalDetail = $PackageOperationalDetail;
      $this->Label = $Label;
    }

    /**
     * @return AssociatedShipmentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param AssociatedShipmentType $Type
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return Party
     */
    public function getSender()
    {
      return $this->Sender;
    }

    /**
     * @param Party $Sender
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setSender($Sender)
    {
      $this->Sender = $Sender;
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
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
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
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
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
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setPackagingType($PackagingType)
    {
      $this->PackagingType = $PackagingType;
      return $this;
    }

    /**
     * @return TrackingId
     */
    public function getTrackingId()
    {
      return $this->TrackingId;
    }

    /**
     * @param TrackingId $TrackingId
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setTrackingId($TrackingId)
    {
      $this->TrackingId = $TrackingId;
      return $this;
    }

    /**
     * @return CustomerReference[]
     */
    public function getCustomerReferences()
    {
      return $this->CustomerReferences;
    }

    /**
     * @param CustomerReference[] $CustomerReferences
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setCustomerReferences(array $CustomerReferences)
    {
      $this->CustomerReferences = $CustomerReferences;
      return $this;
    }

    /**
     * @return ShipmentOperationalDetail
     */
    public function getShipmentOperationalDetail()
    {
      return $this->ShipmentOperationalDetail;
    }

    /**
     * @param ShipmentOperationalDetail $ShipmentOperationalDetail
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setShipmentOperationalDetail($ShipmentOperationalDetail)
    {
      $this->ShipmentOperationalDetail = $ShipmentOperationalDetail;
      return $this;
    }

    /**
     * @return PackageOperationalDetail
     */
    public function getPackageOperationalDetail()
    {
      return $this->PackageOperationalDetail;
    }

    /**
     * @param PackageOperationalDetail $PackageOperationalDetail
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setPackageOperationalDetail($PackageOperationalDetail)
    {
      $this->PackageOperationalDetail = $PackageOperationalDetail;
      return $this;
    }

    /**
     * @return ShippingDocument
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param ShippingDocument $Label
     * @return \FedexApiClass\Lib\AssociatedShipmentDetail
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

}

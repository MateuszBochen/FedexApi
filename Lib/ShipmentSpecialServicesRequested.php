<?php

namespace FedexApiClass\Lib;

class ShipmentSpecialServicesRequested
{

    /**
     * @var ShipmentSpecialServiceType[] $SpecialServiceTypes
     */
    protected $SpecialServiceTypes = null;

    /**
     * @var CodDetail $CodDetail
     */
    protected $CodDetail = null;

    /**
     * @var DeliveryOnInvoiceAcceptanceDetail $DeliveryOnInvoiceAcceptanceDetail
     */
    protected $DeliveryOnInvoiceAcceptanceDetail = null;

    /**
     * @var HoldAtLocationDetail $HoldAtLocationDetail
     */
    protected $HoldAtLocationDetail = null;

    /**
     * @var EMailNotificationDetail $EMailNotificationDetail
     */
    protected $EMailNotificationDetail = null;

    /**
     * @var ReturnShipmentDetail $ReturnShipmentDetail
     */
    protected $ReturnShipmentDetail = null;

    /**
     * @var PendingShipmentDetail $PendingShipmentDetail
     */
    protected $PendingShipmentDetail = null;

    /**
     * @var InternationalControlledExportDetail $InternationalControlledExportDetail
     */
    protected $InternationalControlledExportDetail = null;

    /**
     * @var InternationalTrafficInArmsRegulationsDetail $InternationalTrafficInArmsRegulationsDetail
     */
    protected $InternationalTrafficInArmsRegulationsDetail = null;

    /**
     * @var ShipmentDryIceDetail $ShipmentDryIceDetail
     */
    protected $ShipmentDryIceDetail = null;

    /**
     * @var HomeDeliveryPremiumDetail $HomeDeliveryPremiumDetail
     */
    protected $HomeDeliveryPremiumDetail = null;

    /**
     * @var FreightGuaranteeDetail $FreightGuaranteeDetail
     */
    protected $FreightGuaranteeDetail = null;

    /**
     * @var EtdDetail $EtdDetail
     */
    protected $EtdDetail = null;

    /**
     * @var CustomDeliveryWindowDetail $CustomDeliveryWindowDetail
     */
    protected $CustomDeliveryWindowDetail = null;

    /**
     * @param ShipmentSpecialServiceType[] $SpecialServiceTypes
     * @param CodDetail $CodDetail
     * @param DeliveryOnInvoiceAcceptanceDetail $DeliveryOnInvoiceAcceptanceDetail
     * @param HoldAtLocationDetail $HoldAtLocationDetail
     * @param EMailNotificationDetail $EMailNotificationDetail
     * @param ReturnShipmentDetail $ReturnShipmentDetail
     * @param PendingShipmentDetail $PendingShipmentDetail
     * @param InternationalControlledExportDetail $InternationalControlledExportDetail
     * @param InternationalTrafficInArmsRegulationsDetail $InternationalTrafficInArmsRegulationsDetail
     * @param ShipmentDryIceDetail $ShipmentDryIceDetail
     * @param HomeDeliveryPremiumDetail $HomeDeliveryPremiumDetail
     * @param FreightGuaranteeDetail $FreightGuaranteeDetail
     * @param EtdDetail $EtdDetail
     * @param CustomDeliveryWindowDetail $CustomDeliveryWindowDetail
     */
    public function __construct(array $SpecialServiceTypes, $CodDetail, $DeliveryOnInvoiceAcceptanceDetail, $HoldAtLocationDetail, $EMailNotificationDetail, $ReturnShipmentDetail, $PendingShipmentDetail, $InternationalControlledExportDetail, $InternationalTrafficInArmsRegulationsDetail, $ShipmentDryIceDetail, $HomeDeliveryPremiumDetail, $FreightGuaranteeDetail, $EtdDetail, $CustomDeliveryWindowDetail)
    {
      $this->SpecialServiceTypes = $SpecialServiceTypes;
      $this->CodDetail = $CodDetail;
      $this->DeliveryOnInvoiceAcceptanceDetail = $DeliveryOnInvoiceAcceptanceDetail;
      $this->HoldAtLocationDetail = $HoldAtLocationDetail;
      $this->EMailNotificationDetail = $EMailNotificationDetail;
      $this->ReturnShipmentDetail = $ReturnShipmentDetail;
      $this->PendingShipmentDetail = $PendingShipmentDetail;
      $this->InternationalControlledExportDetail = $InternationalControlledExportDetail;
      $this->InternationalTrafficInArmsRegulationsDetail = $InternationalTrafficInArmsRegulationsDetail;
      $this->ShipmentDryIceDetail = $ShipmentDryIceDetail;
      $this->HomeDeliveryPremiumDetail = $HomeDeliveryPremiumDetail;
      $this->FreightGuaranteeDetail = $FreightGuaranteeDetail;
      $this->EtdDetail = $EtdDetail;
      $this->CustomDeliveryWindowDetail = $CustomDeliveryWindowDetail;
    }

    /**
     * @return ShipmentSpecialServiceType[]
     */
    public function getSpecialServiceTypes()
    {
      return $this->SpecialServiceTypes;
    }

    /**
     * @param ShipmentSpecialServiceType[] $SpecialServiceTypes
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $SpecialServiceTypes)
    {
      $this->SpecialServiceTypes = $SpecialServiceTypes;
      return $this;
    }

    /**
     * @return CodDetail
     */
    public function getCodDetail()
    {
      return $this->CodDetail;
    }

    /**
     * @param CodDetail $CodDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setCodDetail($CodDetail)
    {
      $this->CodDetail = $CodDetail;
      return $this;
    }

    /**
     * @return DeliveryOnInvoiceAcceptanceDetail
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
      return $this->DeliveryOnInvoiceAcceptanceDetail;
    }

    /**
     * @param DeliveryOnInvoiceAcceptanceDetail $DeliveryOnInvoiceAcceptanceDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail($DeliveryOnInvoiceAcceptanceDetail)
    {
      $this->DeliveryOnInvoiceAcceptanceDetail = $DeliveryOnInvoiceAcceptanceDetail;
      return $this;
    }

    /**
     * @return HoldAtLocationDetail
     */
    public function getHoldAtLocationDetail()
    {
      return $this->HoldAtLocationDetail;
    }

    /**
     * @param HoldAtLocationDetail $HoldAtLocationDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail($HoldAtLocationDetail)
    {
      $this->HoldAtLocationDetail = $HoldAtLocationDetail;
      return $this;
    }

    /**
     * @return EMailNotificationDetail
     */
    public function getEMailNotificationDetail()
    {
      return $this->EMailNotificationDetail;
    }

    /**
     * @param EMailNotificationDetail $EMailNotificationDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail($EMailNotificationDetail)
    {
      $this->EMailNotificationDetail = $EMailNotificationDetail;
      return $this;
    }

    /**
     * @return ReturnShipmentDetail
     */
    public function getReturnShipmentDetail()
    {
      return $this->ReturnShipmentDetail;
    }

    /**
     * @param ReturnShipmentDetail $ReturnShipmentDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail($ReturnShipmentDetail)
    {
      $this->ReturnShipmentDetail = $ReturnShipmentDetail;
      return $this;
    }

    /**
     * @return PendingShipmentDetail
     */
    public function getPendingShipmentDetail()
    {
      return $this->PendingShipmentDetail;
    }

    /**
     * @param PendingShipmentDetail $PendingShipmentDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail($PendingShipmentDetail)
    {
      $this->PendingShipmentDetail = $PendingShipmentDetail;
      return $this;
    }

    /**
     * @return InternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail()
    {
      return $this->InternationalControlledExportDetail;
    }

    /**
     * @param InternationalControlledExportDetail $InternationalControlledExportDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail($InternationalControlledExportDetail)
    {
      $this->InternationalControlledExportDetail = $InternationalControlledExportDetail;
      return $this;
    }

    /**
     * @return InternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
      return $this->InternationalTrafficInArmsRegulationsDetail;
    }

    /**
     * @param InternationalTrafficInArmsRegulationsDetail $InternationalTrafficInArmsRegulationsDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail($InternationalTrafficInArmsRegulationsDetail)
    {
      $this->InternationalTrafficInArmsRegulationsDetail = $InternationalTrafficInArmsRegulationsDetail;
      return $this;
    }

    /**
     * @return ShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail()
    {
      return $this->ShipmentDryIceDetail;
    }

    /**
     * @param ShipmentDryIceDetail $ShipmentDryIceDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail($ShipmentDryIceDetail)
    {
      $this->ShipmentDryIceDetail = $ShipmentDryIceDetail;
      return $this;
    }

    /**
     * @return HomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
      return $this->HomeDeliveryPremiumDetail;
    }

    /**
     * @param HomeDeliveryPremiumDetail $HomeDeliveryPremiumDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail($HomeDeliveryPremiumDetail)
    {
      $this->HomeDeliveryPremiumDetail = $HomeDeliveryPremiumDetail;
      return $this;
    }

    /**
     * @return FreightGuaranteeDetail
     */
    public function getFreightGuaranteeDetail()
    {
      return $this->FreightGuaranteeDetail;
    }

    /**
     * @param FreightGuaranteeDetail $FreightGuaranteeDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail($FreightGuaranteeDetail)
    {
      $this->FreightGuaranteeDetail = $FreightGuaranteeDetail;
      return $this;
    }

    /**
     * @return EtdDetail
     */
    public function getEtdDetail()
    {
      return $this->EtdDetail;
    }

    /**
     * @param EtdDetail $EtdDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setEtdDetail($EtdDetail)
    {
      $this->EtdDetail = $EtdDetail;
      return $this;
    }

    /**
     * @return CustomDeliveryWindowDetail
     */
    public function getCustomDeliveryWindowDetail()
    {
      return $this->CustomDeliveryWindowDetail;
    }

    /**
     * @param CustomDeliveryWindowDetail $CustomDeliveryWindowDetail
     * @return \FedexApiClass\Lib\ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail($CustomDeliveryWindowDetail)
    {
      $this->CustomDeliveryWindowDetail = $CustomDeliveryWindowDetail;
      return $this;
    }

}

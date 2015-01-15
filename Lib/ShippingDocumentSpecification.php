<?php

namespace FedexApiClass\Lib;

class ShippingDocumentSpecification
{

    /**
     * @var RequestedShippingDocumentType[] $ShippingDocumentTypes
     */
    protected $ShippingDocumentTypes = null;

    /**
     * @var CertificateOfOriginDetail $CertificateOfOrigin
     */
    protected $CertificateOfOrigin = null;

    /**
     * @var CommercialInvoiceDetail $CommercialInvoiceDetail
     */
    protected $CommercialInvoiceDetail = null;

    /**
     * @var CustomDocumentDetail[] $CustomPackageDocumentDetail
     */
    protected $CustomPackageDocumentDetail = null;

    /**
     * @var CustomDocumentDetail[] $CustomShipmentDocumentDetail
     */
    protected $CustomShipmentDocumentDetail = null;

    /**
     * @var ExportDeclarationDetail $ExportDeclarationDetail
     */
    protected $ExportDeclarationDetail = null;

    /**
     * @var GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
     */
    protected $GeneralAgencyAgreementDetail = null;

    /**
     * @var NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
     */
    protected $NaftaCertificateOfOriginDetail = null;

    /**
     * @var Op900Detail $Op900Detail
     */
    protected $Op900Detail = null;

    /**
     * @var DangerousGoodsShippersDeclarationDetail $DangerousGoodsShippersDeclarationDetail
     */
    protected $DangerousGoodsShippersDeclarationDetail = null;

    /**
     * @var FreightAddressLabelDetail $FreightAddressLabelDetail
     */
    protected $FreightAddressLabelDetail = null;

    /**
     * @var ReturnInstructionsDetail $ReturnInstructionsDetail
     */
    protected $ReturnInstructionsDetail = null;

    /**
     * @param RequestedShippingDocumentType[] $ShippingDocumentTypes
     * @param CertificateOfOriginDetail $CertificateOfOrigin
     * @param CommercialInvoiceDetail $CommercialInvoiceDetail
     * @param CustomDocumentDetail[] $CustomPackageDocumentDetail
     * @param CustomDocumentDetail[] $CustomShipmentDocumentDetail
     * @param ExportDeclarationDetail $ExportDeclarationDetail
     * @param GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
     * @param NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
     * @param Op900Detail $Op900Detail
     * @param DangerousGoodsShippersDeclarationDetail $DangerousGoodsShippersDeclarationDetail
     * @param FreightAddressLabelDetail $FreightAddressLabelDetail
     * @param ReturnInstructionsDetail $ReturnInstructionsDetail
     */
    public function __construct(array $ShippingDocumentTypes = null, $CertificateOfOrigin = null, $CommercialInvoiceDetail = null, array $CustomPackageDocumentDetail = null, array $CustomShipmentDocumentDetail = null, $ExportDeclarationDetail = null, $GeneralAgencyAgreementDetail = null, $NaftaCertificateOfOriginDetail = null, $Op900Detail = null, $DangerousGoodsShippersDeclarationDetail = null, $FreightAddressLabelDetail = null, $ReturnInstructionsDetail = null)
    {
      $this->ShippingDocumentTypes = $ShippingDocumentTypes;
      $this->CertificateOfOrigin = $CertificateOfOrigin;
      $this->CommercialInvoiceDetail = $CommercialInvoiceDetail;
      $this->CustomPackageDocumentDetail = $CustomPackageDocumentDetail;
      $this->CustomShipmentDocumentDetail = $CustomShipmentDocumentDetail;
      $this->ExportDeclarationDetail = $ExportDeclarationDetail;
      $this->GeneralAgencyAgreementDetail = $GeneralAgencyAgreementDetail;
      $this->NaftaCertificateOfOriginDetail = $NaftaCertificateOfOriginDetail;
      $this->Op900Detail = $Op900Detail;
      $this->DangerousGoodsShippersDeclarationDetail = $DangerousGoodsShippersDeclarationDetail;
      $this->FreightAddressLabelDetail = $FreightAddressLabelDetail;
      $this->ReturnInstructionsDetail = $ReturnInstructionsDetail;
    }

    /**
     * @return RequestedShippingDocumentType[]
     */
    public function getShippingDocumentTypes()
    {
      return $this->ShippingDocumentTypes;
    }

    /**
     * @param RequestedShippingDocumentType[] $ShippingDocumentTypes
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $ShippingDocumentTypes)
    {
      $this->ShippingDocumentTypes = $ShippingDocumentTypes;
      return $this;
    }

    /**
     * @return CertificateOfOriginDetail
     */
    public function getCertificateOfOrigin()
    {
      return $this->CertificateOfOrigin;
    }

    /**
     * @param CertificateOfOriginDetail $CertificateOfOrigin
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin($CertificateOfOrigin)
    {
      $this->CertificateOfOrigin = $CertificateOfOrigin;
      return $this;
    }

    /**
     * @return CommercialInvoiceDetail
     */
    public function getCommercialInvoiceDetail()
    {
      return $this->CommercialInvoiceDetail;
    }

    /**
     * @param CommercialInvoiceDetail $CommercialInvoiceDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail($CommercialInvoiceDetail)
    {
      $this->CommercialInvoiceDetail = $CommercialInvoiceDetail;
      return $this;
    }

    /**
     * @return CustomDocumentDetail[]
     */
    public function getCustomPackageDocumentDetail()
    {
      return $this->CustomPackageDocumentDetail;
    }

    /**
     * @param CustomDocumentDetail[] $CustomPackageDocumentDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $CustomPackageDocumentDetail)
    {
      $this->CustomPackageDocumentDetail = $CustomPackageDocumentDetail;
      return $this;
    }

    /**
     * @return CustomDocumentDetail[]
     */
    public function getCustomShipmentDocumentDetail()
    {
      return $this->CustomShipmentDocumentDetail;
    }

    /**
     * @param CustomDocumentDetail[] $CustomShipmentDocumentDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $CustomShipmentDocumentDetail)
    {
      $this->CustomShipmentDocumentDetail = $CustomShipmentDocumentDetail;
      return $this;
    }

    /**
     * @return ExportDeclarationDetail
     */
    public function getExportDeclarationDetail()
    {
      return $this->ExportDeclarationDetail;
    }

    /**
     * @param ExportDeclarationDetail $ExportDeclarationDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setExportDeclarationDetail($ExportDeclarationDetail)
    {
      $this->ExportDeclarationDetail = $ExportDeclarationDetail;
      return $this;
    }

    /**
     * @return GeneralAgencyAgreementDetail
     */
    public function getGeneralAgencyAgreementDetail()
    {
      return $this->GeneralAgencyAgreementDetail;
    }

    /**
     * @param GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail($GeneralAgencyAgreementDetail)
    {
      $this->GeneralAgencyAgreementDetail = $GeneralAgencyAgreementDetail;
      return $this;
    }

    /**
     * @return NaftaCertificateOfOriginDetail
     */
    public function getNaftaCertificateOfOriginDetail()
    {
      return $this->NaftaCertificateOfOriginDetail;
    }

    /**
     * @param NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail($NaftaCertificateOfOriginDetail)
    {
      $this->NaftaCertificateOfOriginDetail = $NaftaCertificateOfOriginDetail;
      return $this;
    }

    /**
     * @return Op900Detail
     */
    public function getOp900Detail()
    {
      return $this->Op900Detail;
    }

    /**
     * @param Op900Detail $Op900Detail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setOp900Detail($Op900Detail)
    {
      $this->Op900Detail = $Op900Detail;
      return $this;
    }

    /**
     * @return DangerousGoodsShippersDeclarationDetail
     */
    public function getDangerousGoodsShippersDeclarationDetail()
    {
      return $this->DangerousGoodsShippersDeclarationDetail;
    }

    /**
     * @param DangerousGoodsShippersDeclarationDetail $DangerousGoodsShippersDeclarationDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail($DangerousGoodsShippersDeclarationDetail)
    {
      $this->DangerousGoodsShippersDeclarationDetail = $DangerousGoodsShippersDeclarationDetail;
      return $this;
    }

    /**
     * @return FreightAddressLabelDetail
     */
    public function getFreightAddressLabelDetail()
    {
      return $this->FreightAddressLabelDetail;
    }

    /**
     * @param FreightAddressLabelDetail $FreightAddressLabelDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail($FreightAddressLabelDetail)
    {
      $this->FreightAddressLabelDetail = $FreightAddressLabelDetail;
      return $this;
    }

    /**
     * @return ReturnInstructionsDetail
     */
    public function getReturnInstructionsDetail()
    {
      return $this->ReturnInstructionsDetail;
    }

    /**
     * @param ReturnInstructionsDetail $ReturnInstructionsDetail
     * @return \FedexApiClass\Lib\ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail($ReturnInstructionsDetail)
    {
      $this->ReturnInstructionsDetail = $ReturnInstructionsDetail;
      return $this;
    }

}

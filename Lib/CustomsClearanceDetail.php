<?php

namespace FedexApiClass\Lib;

class CustomsClearanceDetail
{

    /**
     * @var BrokerDetail[] $Brokers
     */
    protected $Brokers = null;

    /**
     * @var ClearanceBrokerageType $ClearanceBrokerage
     */
    protected $ClearanceBrokerage = null;

    /**
     * @var CustomsOptionDetail $CustomsOptions
     */
    protected $CustomsOptions = null;

    /**
     * @var Party $ImporterOfRecord
     */
    protected $ImporterOfRecord = null;

    /**
     * @var RecipientCustomsId $RecipientCustomsId
     */
    protected $RecipientCustomsId = null;

    /**
     * @var Payment $DutiesPayment
     */
    protected $DutiesPayment = null;

    /**
     * @var InternationalDocumentContentType $DocumentContent
     */
    protected $DocumentContent = null;

    /**
     * @var Money $CustomsValue
     */
    protected $CustomsValue = null;

    /**
     * @var FreightOnValueType $FreightOnValue
     */
    protected $FreightOnValue = null;

    /**
     * @var Money $InsuranceCharges
     */
    protected $InsuranceCharges = null;

    /**
     * @var boolean $PartiesToTransactionAreRelated
     */
    protected $PartiesToTransactionAreRelated = null;

    /**
     * @var CommercialInvoice $CommercialInvoice
     */
    protected $CommercialInvoice = null;

    /**
     * @var Commodity[] $Commodities
     */
    protected $Commodities = null;

    /**
     * @var ExportDetail $ExportDetail
     */
    protected $ExportDetail = null;

    /**
     * @var RegulatoryControlType[] $RegulatoryControls
     */
    protected $RegulatoryControls = null;

    /**
     * @var CustomsDeclarationStatementDetail $DeclarationStatementDetail
     */
    protected $DeclarationStatementDetail = null;

    /**
     * @param BrokerDetail[] $Brokers
     * @param ClearanceBrokerageType $ClearanceBrokerage
     * @param CustomsOptionDetail $CustomsOptions
     * @param Party $ImporterOfRecord
     * @param RecipientCustomsId $RecipientCustomsId
     * @param Payment $DutiesPayment
     * @param InternationalDocumentContentType $DocumentContent
     * @param Money $CustomsValue
     * @param FreightOnValueType $FreightOnValue
     * @param Money $InsuranceCharges
     * @param boolean $PartiesToTransactionAreRelated
     * @param CommercialInvoice $CommercialInvoice
     * @param Commodity[] $Commodities
     * @param ExportDetail $ExportDetail
     * @param RegulatoryControlType[] $RegulatoryControls
     * @param CustomsDeclarationStatementDetail $DeclarationStatementDetail
     */
    public function __construct(array $Brokers = null, $ClearanceBrokerage = null, $CustomsOptions = null, $ImporterOfRecord = null, $RecipientCustomsId = null, $DutiesPayment = null, $DocumentContent = null, $CustomsValue = null, $FreightOnValue = null, $InsuranceCharges = null, $PartiesToTransactionAreRelated = null, $CommercialInvoice = null, array $Commodities = null, $ExportDetail = null, array $RegulatoryControls = null, $DeclarationStatementDetail = null)
    {
      $this->Brokers = $Brokers;
      $this->ClearanceBrokerage = $ClearanceBrokerage;
      $this->CustomsOptions = $CustomsOptions;
      $this->ImporterOfRecord = $ImporterOfRecord;
      $this->RecipientCustomsId = $RecipientCustomsId;
      $this->DutiesPayment = $DutiesPayment;
      $this->DocumentContent = $DocumentContent;
      $this->CustomsValue = $CustomsValue;
      $this->FreightOnValue = $FreightOnValue;
      $this->InsuranceCharges = $InsuranceCharges;
      $this->PartiesToTransactionAreRelated = $PartiesToTransactionAreRelated;
      $this->CommercialInvoice = $CommercialInvoice;
      $this->Commodities = $Commodities;
      $this->ExportDetail = $ExportDetail;
      $this->RegulatoryControls = $RegulatoryControls;
      $this->DeclarationStatementDetail = $DeclarationStatementDetail;
    }

    /**
     * @return BrokerDetail[]
     */
    public function getBrokers()
    {
      return $this->Brokers;
    }

    /**
     * @param BrokerDetail[] $Brokers
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setBrokers(array $Brokers)
    {
      $this->Brokers = $Brokers;
      return $this;
    }

    /**
     * @return ClearanceBrokerageType
     */
    public function getClearanceBrokerage()
    {
      return $this->ClearanceBrokerage;
    }

    /**
     * @param ClearanceBrokerageType $ClearanceBrokerage
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setClearanceBrokerage($ClearanceBrokerage)
    {
      $this->ClearanceBrokerage = $ClearanceBrokerage;
      return $this;
    }

    /**
     * @return CustomsOptionDetail
     */
    public function getCustomsOptions()
    {
      return $this->CustomsOptions;
    }

    /**
     * @param CustomsOptionDetail $CustomsOptions
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setCustomsOptions($CustomsOptions)
    {
      $this->CustomsOptions = $CustomsOptions;
      return $this;
    }

    /**
     * @return Party
     */
    public function getImporterOfRecord()
    {
      return $this->ImporterOfRecord;
    }

    /**
     * @param Party $ImporterOfRecord
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setImporterOfRecord($ImporterOfRecord)
    {
      $this->ImporterOfRecord = $ImporterOfRecord;
      return $this;
    }

    /**
     * @return RecipientCustomsId
     */
    public function getRecipientCustomsId()
    {
      return $this->RecipientCustomsId;
    }

    /**
     * @param RecipientCustomsId $RecipientCustomsId
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setRecipientCustomsId($RecipientCustomsId)
    {
      $this->RecipientCustomsId = $RecipientCustomsId;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getDutiesPayment()
    {
      return $this->DutiesPayment;
    }

    /**
     * @param Payment $DutiesPayment
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setDutiesPayment($DutiesPayment)
    {
      $this->DutiesPayment = $DutiesPayment;
      return $this;
    }

    /**
     * @return InternationalDocumentContentType
     */
    public function getDocumentContent()
    {
      return $this->DocumentContent;
    }

    /**
     * @param InternationalDocumentContentType $DocumentContent
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setDocumentContent($DocumentContent)
    {
      $this->DocumentContent = $DocumentContent;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCustomsValue()
    {
      return $this->CustomsValue;
    }

    /**
     * @param Money $CustomsValue
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setCustomsValue($CustomsValue)
    {
      $this->CustomsValue = $CustomsValue;
      return $this;
    }

    /**
     * @return FreightOnValueType
     */
    public function getFreightOnValue()
    {
      return $this->FreightOnValue;
    }

    /**
     * @param FreightOnValueType $FreightOnValue
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setFreightOnValue($FreightOnValue)
    {
      $this->FreightOnValue = $FreightOnValue;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInsuranceCharges()
    {
      return $this->InsuranceCharges;
    }

    /**
     * @param Money $InsuranceCharges
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setInsuranceCharges($InsuranceCharges)
    {
      $this->InsuranceCharges = $InsuranceCharges;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPartiesToTransactionAreRelated()
    {
      return $this->PartiesToTransactionAreRelated;
    }

    /**
     * @param boolean $PartiesToTransactionAreRelated
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($PartiesToTransactionAreRelated)
    {
      $this->PartiesToTransactionAreRelated = $PartiesToTransactionAreRelated;
      return $this;
    }

    /**
     * @return CommercialInvoice
     */
    public function getCommercialInvoice()
    {
      return $this->CommercialInvoice;
    }

    /**
     * @param CommercialInvoice $CommercialInvoice
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setCommercialInvoice($CommercialInvoice)
    {
      $this->CommercialInvoice = $CommercialInvoice;
      return $this;
    }

    /**
     * @return Commodity[]
     */
    public function getCommodities()
    {
      return $this->Commodities;
    }

    /**
     * @param Commodity[] $Commodities
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setCommodities(array $Commodities)
    {
      $this->Commodities = $Commodities;
      return $this;
    }

    /**
     * @return ExportDetail
     */
    public function getExportDetail()
    {
      return $this->ExportDetail;
    }

    /**
     * @param ExportDetail $ExportDetail
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setExportDetail($ExportDetail)
    {
      $this->ExportDetail = $ExportDetail;
      return $this;
    }

    /**
     * @return RegulatoryControlType[]
     */
    public function getRegulatoryControls()
    {
      return $this->RegulatoryControls;
    }

    /**
     * @param RegulatoryControlType[] $RegulatoryControls
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $RegulatoryControls)
    {
      $this->RegulatoryControls = $RegulatoryControls;
      return $this;
    }

    /**
     * @return CustomsDeclarationStatementDetail
     */
    public function getDeclarationStatementDetail()
    {
      return $this->DeclarationStatementDetail;
    }

    /**
     * @param CustomsDeclarationStatementDetail $DeclarationStatementDetail
     * @return \FedexApiClass\Lib\CustomsClearanceDetail
     */
    public function setDeclarationStatementDetail($DeclarationStatementDetail)
    {
      $this->DeclarationStatementDetail = $DeclarationStatementDetail;
      return $this;
    }

}

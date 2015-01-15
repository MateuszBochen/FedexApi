<?php

namespace FedexApiClass\Lib;

class CodDetail
{

    /**
     * @var Money $CodCollectionAmount
     */
    protected $CodCollectionAmount = null;

    /**
     * @var CodAddTransportationChargesDetail $AddTransportationChargesDetail
     */
    protected $AddTransportationChargesDetail = null;

    /**
     * @var CodCollectionType $CollectionType
     */
    protected $CollectionType = null;

    /**
     * @var Party $CodRecipient
     */
    protected $CodRecipient = null;

    /**
     * @var ContactAndAddress $FinancialInstitutionContactAndAddress
     */
    protected $FinancialInstitutionContactAndAddress = null;

    /**
     * @var string $RemitToName
     */
    protected $RemitToName = null;

    /**
     * @var CodReturnReferenceIndicatorType $ReferenceIndicator
     */
    protected $ReferenceIndicator = null;

    /**
     * @var TrackingId $ReturnTrackingId
     */
    protected $ReturnTrackingId = null;

    /**
     * @param Money $CodCollectionAmount
     * @param CodAddTransportationChargesDetail $AddTransportationChargesDetail
     * @param CodCollectionType $CollectionType
     * @param Party $CodRecipient
     * @param ContactAndAddress $FinancialInstitutionContactAndAddress
     * @param string $RemitToName
     * @param CodReturnReferenceIndicatorType $ReferenceIndicator
     * @param TrackingId $ReturnTrackingId
     */
    public function __construct($CodCollectionAmount = null, $AddTransportationChargesDetail = null, $CollectionType = null, $CodRecipient = null, $FinancialInstitutionContactAndAddress = null, $RemitToName = null, $ReferenceIndicator = null, $ReturnTrackingId = null)
    {
      $this->CodCollectionAmount = $CodCollectionAmount;
      $this->AddTransportationChargesDetail = $AddTransportationChargesDetail;
      $this->CollectionType = $CollectionType;
      $this->CodRecipient = $CodRecipient;
      $this->FinancialInstitutionContactAndAddress = $FinancialInstitutionContactAndAddress;
      $this->RemitToName = $RemitToName;
      $this->ReferenceIndicator = $ReferenceIndicator;
      $this->ReturnTrackingId = $ReturnTrackingId;
    }

    /**
     * @return Money
     */
    public function getCodCollectionAmount()
    {
      return $this->CodCollectionAmount;
    }

    /**
     * @param Money $CodCollectionAmount
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setCodCollectionAmount($CodCollectionAmount)
    {
      $this->CodCollectionAmount = $CodCollectionAmount;
      return $this;
    }

    /**
     * @return CodAddTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail()
    {
      return $this->AddTransportationChargesDetail;
    }

    /**
     * @param CodAddTransportationChargesDetail $AddTransportationChargesDetail
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setAddTransportationChargesDetail($AddTransportationChargesDetail)
    {
      $this->AddTransportationChargesDetail = $AddTransportationChargesDetail;
      return $this;
    }

    /**
     * @return CodCollectionType
     */
    public function getCollectionType()
    {
      return $this->CollectionType;
    }

    /**
     * @param CodCollectionType $CollectionType
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setCollectionType($CollectionType)
    {
      $this->CollectionType = $CollectionType;
      return $this;
    }

    /**
     * @return Party
     */
    public function getCodRecipient()
    {
      return $this->CodRecipient;
    }

    /**
     * @param Party $CodRecipient
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setCodRecipient($CodRecipient)
    {
      $this->CodRecipient = $CodRecipient;
      return $this;
    }

    /**
     * @return ContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress()
    {
      return $this->FinancialInstitutionContactAndAddress;
    }

    /**
     * @param ContactAndAddress $FinancialInstitutionContactAndAddress
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setFinancialInstitutionContactAndAddress($FinancialInstitutionContactAndAddress)
    {
      $this->FinancialInstitutionContactAndAddress = $FinancialInstitutionContactAndAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemitToName()
    {
      return $this->RemitToName;
    }

    /**
     * @param string $RemitToName
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setRemitToName($RemitToName)
    {
      $this->RemitToName = $RemitToName;
      return $this;
    }

    /**
     * @return CodReturnReferenceIndicatorType
     */
    public function getReferenceIndicator()
    {
      return $this->ReferenceIndicator;
    }

    /**
     * @param CodReturnReferenceIndicatorType $ReferenceIndicator
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setReferenceIndicator($ReferenceIndicator)
    {
      $this->ReferenceIndicator = $ReferenceIndicator;
      return $this;
    }

    /**
     * @return TrackingId
     */
    public function getReturnTrackingId()
    {
      return $this->ReturnTrackingId;
    }

    /**
     * @param TrackingId $ReturnTrackingId
     * @return \FedexApiClass\Lib\CodDetail
     */
    public function setReturnTrackingId($ReturnTrackingId)
    {
      $this->ReturnTrackingId = $ReturnTrackingId;
      return $this;
    }

}

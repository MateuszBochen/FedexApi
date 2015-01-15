<?php

namespace FedexApiClass\Lib;

class PendingShipmentDetail
{

    /**
     * @var PendingShipmentType $Type
     */
    protected $Type = null;

    /**
     * @var date $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var EMailLabelDetail $EmailLabelDetail
     */
    protected $EmailLabelDetail = null;

    /**
     * @var PendingShipmentProcessingOptionsRequested $ProcessingOptions
     */
    protected $ProcessingOptions = null;

    /**
     * @var RecommendedDocumentSpecification $RecommendedDocumentSpecification
     */
    protected $RecommendedDocumentSpecification = null;

    /**
     * @var UploadDocumentReferenceDetail[] $DocumentReferences
     */
    protected $DocumentReferences = null;

    /**
     * @param PendingShipmentType $Type
     * @param date $ExpirationDate
     * @param EMailLabelDetail $EmailLabelDetail
     * @param PendingShipmentProcessingOptionsRequested $ProcessingOptions
     * @param RecommendedDocumentSpecification $RecommendedDocumentSpecification
     * @param UploadDocumentReferenceDetail[] $DocumentReferences
     */
    public function __construct($Type, $ExpirationDate, $EmailLabelDetail, $ProcessingOptions, $RecommendedDocumentSpecification, array $DocumentReferences)
    {
      $this->Type = $Type;
      $this->ExpirationDate = $ExpirationDate;
      $this->EmailLabelDetail = $EmailLabelDetail;
      $this->ProcessingOptions = $ProcessingOptions;
      $this->RecommendedDocumentSpecification = $RecommendedDocumentSpecification;
      $this->DocumentReferences = $DocumentReferences;
    }

    /**
     * @return PendingShipmentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PendingShipmentType $Type
     * @return \FedexApiClass\Lib\PendingShipmentDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param date $ExpirationDate
     * @return \FedexApiClass\Lib\PendingShipmentDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return EMailLabelDetail
     */
    public function getEmailLabelDetail()
    {
      return $this->EmailLabelDetail;
    }

    /**
     * @param EMailLabelDetail $EmailLabelDetail
     * @return \FedexApiClass\Lib\PendingShipmentDetail
     */
    public function setEmailLabelDetail($EmailLabelDetail)
    {
      $this->EmailLabelDetail = $EmailLabelDetail;
      return $this;
    }

    /**
     * @return PendingShipmentProcessingOptionsRequested
     */
    public function getProcessingOptions()
    {
      return $this->ProcessingOptions;
    }

    /**
     * @param PendingShipmentProcessingOptionsRequested $ProcessingOptions
     * @return \FedexApiClass\Lib\PendingShipmentDetail
     */
    public function setProcessingOptions($ProcessingOptions)
    {
      $this->ProcessingOptions = $ProcessingOptions;
      return $this;
    }

    /**
     * @return RecommendedDocumentSpecification
     */
    public function getRecommendedDocumentSpecification()
    {
      return $this->RecommendedDocumentSpecification;
    }

    /**
     * @param RecommendedDocumentSpecification $RecommendedDocumentSpecification
     * @return \FedexApiClass\Lib\PendingShipmentDetail
     */
    public function setRecommendedDocumentSpecification($RecommendedDocumentSpecification)
    {
      $this->RecommendedDocumentSpecification = $RecommendedDocumentSpecification;
      return $this;
    }

    /**
     * @return UploadDocumentReferenceDetail[]
     */
    public function getDocumentReferences()
    {
      return $this->DocumentReferences;
    }

    /**
     * @param UploadDocumentReferenceDetail[] $DocumentReferences
     * @return \FedexApiClass\Lib\PendingShipmentDetail
     */
    public function setDocumentReferences(array $DocumentReferences)
    {
      $this->DocumentReferences = $DocumentReferences;
      return $this;
    }

}

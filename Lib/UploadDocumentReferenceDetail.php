<?php

namespace FedexApiClass\Lib;

class UploadDocumentReferenceDetail
{

    /**
     * @var int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var UploadDocumentProducerType $DocumentProducer
     */
    protected $DocumentProducer = null;

    /**
     * @var UploadDocumentType $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var string $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @var UploadDocumentIdProducer $DocumentIdProducer
     */
    protected $DocumentIdProducer = null;

    /**
     * @param int $LineNumber
     * @param string $CustomerReference
     * @param string $Description
     * @param UploadDocumentProducerType $DocumentProducer
     * @param UploadDocumentType $DocumentType
     * @param string $DocumentId
     * @param UploadDocumentIdProducer $DocumentIdProducer
     */
    public function __construct($LineNumber, $CustomerReference, $Description, $DocumentProducer, $DocumentType, $DocumentId, $DocumentIdProducer)
    {
      $this->LineNumber = $LineNumber;
      $this->CustomerReference = $CustomerReference;
      $this->Description = $Description;
      $this->DocumentProducer = $DocumentProducer;
      $this->DocumentType = $DocumentType;
      $this->DocumentId = $DocumentId;
      $this->DocumentIdProducer = $DocumentIdProducer;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
      return $this->LineNumber;
    }

    /**
     * @param int $LineNumber
     * @return \FedexApiClass\Lib\UploadDocumentReferenceDetail
     */
    public function setLineNumber($LineNumber)
    {
      $this->LineNumber = $LineNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
      return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     * @return \FedexApiClass\Lib\UploadDocumentReferenceDetail
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FedexApiClass\Lib\UploadDocumentReferenceDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return UploadDocumentProducerType
     */
    public function getDocumentProducer()
    {
      return $this->DocumentProducer;
    }

    /**
     * @param UploadDocumentProducerType $DocumentProducer
     * @return \FedexApiClass\Lib\UploadDocumentReferenceDetail
     */
    public function setDocumentProducer($DocumentProducer)
    {
      $this->DocumentProducer = $DocumentProducer;
      return $this;
    }

    /**
     * @return UploadDocumentType
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param UploadDocumentType $DocumentType
     * @return \FedexApiClass\Lib\UploadDocumentReferenceDetail
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
      return $this->DocumentId;
    }

    /**
     * @param string $DocumentId
     * @return \FedexApiClass\Lib\UploadDocumentReferenceDetail
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
      return $this;
    }

    /**
     * @return UploadDocumentIdProducer
     */
    public function getDocumentIdProducer()
    {
      return $this->DocumentIdProducer;
    }

    /**
     * @param UploadDocumentIdProducer $DocumentIdProducer
     * @return \FedexApiClass\Lib\UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer($DocumentIdProducer)
    {
      $this->DocumentIdProducer = $DocumentIdProducer;
      return $this;
    }

}

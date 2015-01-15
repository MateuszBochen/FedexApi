<?php

namespace FedexApiClass\Lib;

class UploadDocumentDetail
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
     * @var UploadDocumentProducerType $DocumentProducer
     */
    protected $DocumentProducer = null;

    /**
     * @var UploadDocumentType $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var base64Binary $DocumentContent
     */
    protected $DocumentContent = null;

    /**
     * @var date $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @param int $LineNumber
     * @param string $CustomerReference
     * @param UploadDocumentProducerType $DocumentProducer
     * @param UploadDocumentType $DocumentType
     * @param string $FileName
     * @param base64Binary $DocumentContent
     * @param date $ExpirationDate
     */
    public function __construct($LineNumber, $CustomerReference, $DocumentProducer, $DocumentType, $FileName, $DocumentContent, $ExpirationDate)
    {
      $this->LineNumber = $LineNumber;
      $this->CustomerReference = $CustomerReference;
      $this->DocumentProducer = $DocumentProducer;
      $this->DocumentType = $DocumentType;
      $this->FileName = $FileName;
      $this->DocumentContent = $DocumentContent;
      $this->ExpirationDate = $ExpirationDate;
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
     * @return \FedexApiClass\Lib\UploadDocumentDetail
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
     * @return \FedexApiClass\Lib\UploadDocumentDetail
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
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
     * @return \FedexApiClass\Lib\UploadDocumentDetail
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
     * @return \FedexApiClass\Lib\UploadDocumentDetail
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \FedexApiClass\Lib\UploadDocumentDetail
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getDocumentContent()
    {
      return $this->DocumentContent;
    }

    /**
     * @param base64Binary $DocumentContent
     * @return \FedexApiClass\Lib\UploadDocumentDetail
     */
    public function setDocumentContent($DocumentContent)
    {
      $this->DocumentContent = $DocumentContent;
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
     * @return \FedexApiClass\Lib\UploadDocumentDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

}

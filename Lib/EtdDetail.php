<?php

namespace FedexApiClass\Lib;

class EtdDetail
{

    /**
     * @var RequestedShippingDocumentType[] $RequestedDocumentCopies
     */
    protected $RequestedDocumentCopies = null;

    /**
     * @var UploadDocumentDetail[] $Documents
     */
    protected $Documents = null;

    /**
     * @var UploadDocumentReferenceDetail[] $DocumentReferences
     */
    protected $DocumentReferences = null;

    /**
     * @param RequestedShippingDocumentType[] $RequestedDocumentCopies
     * @param UploadDocumentDetail[] $Documents
     * @param UploadDocumentReferenceDetail[] $DocumentReferences
     */
    public function __construct(array $RequestedDocumentCopies, array $Documents, array $DocumentReferences)
    {
      $this->RequestedDocumentCopies = $RequestedDocumentCopies;
      $this->Documents = $Documents;
      $this->DocumentReferences = $DocumentReferences;
    }

    /**
     * @return RequestedShippingDocumentType[]
     */
    public function getRequestedDocumentCopies()
    {
      return $this->RequestedDocumentCopies;
    }

    /**
     * @param RequestedShippingDocumentType[] $RequestedDocumentCopies
     * @return \FedexApiClass\Lib\EtdDetail
     */
    public function setRequestedDocumentCopies(array $RequestedDocumentCopies)
    {
      $this->RequestedDocumentCopies = $RequestedDocumentCopies;
      return $this;
    }

    /**
     * @return UploadDocumentDetail[]
     */
    public function getDocuments()
    {
      return $this->Documents;
    }

    /**
     * @param UploadDocumentDetail[] $Documents
     * @return \FedexApiClass\Lib\EtdDetail
     */
    public function setDocuments(array $Documents)
    {
      $this->Documents = $Documents;
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
     * @return \FedexApiClass\Lib\EtdDetail
     */
    public function setDocumentReferences(array $DocumentReferences)
    {
      $this->DocumentReferences = $DocumentReferences;
      return $this;
    }

}

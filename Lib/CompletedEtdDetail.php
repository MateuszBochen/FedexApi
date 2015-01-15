<?php

namespace FedexApi\Lib;

class CompletedEtdDetail
{

    /**
     * @var string $FolderId
     */
    protected $FolderId = null;

    /**
     * @var UploadDocumentReferenceDetail[] $UploadDocumentReferenceDetails
     */
    protected $UploadDocumentReferenceDetails = null;

    /**
     * @param string $FolderId
     * @param UploadDocumentReferenceDetail[] $UploadDocumentReferenceDetails
     */
    public function __construct($FolderId, array $UploadDocumentReferenceDetails)
    {
      $this->FolderId = $FolderId;
      $this->UploadDocumentReferenceDetails = $UploadDocumentReferenceDetails;
    }

    /**
     * @return string
     */
    public function getFolderId()
    {
      return $this->FolderId;
    }

    /**
     * @param string $FolderId
     * @return \FedexApi\Lib\CompletedEtdDetail
     */
    public function setFolderId($FolderId)
    {
      $this->FolderId = $FolderId;
      return $this;
    }

    /**
     * @return UploadDocumentReferenceDetail[]
     */
    public function getUploadDocumentReferenceDetails()
    {
      return $this->UploadDocumentReferenceDetails;
    }

    /**
     * @param UploadDocumentReferenceDetail[] $UploadDocumentReferenceDetails
     * @return \FedexApi\Lib\CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $UploadDocumentReferenceDetails)
    {
      $this->UploadDocumentReferenceDetails = $UploadDocumentReferenceDetails;
      return $this;
    }

}

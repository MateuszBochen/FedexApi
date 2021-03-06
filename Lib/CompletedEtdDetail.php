<?php

namespace FedexApiClass\Lib;

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
    public function __construct($FolderId = null, array $UploadDocumentReferenceDetails = null)
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
     * @return \FedexApiClass\Lib\CompletedEtdDetail
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
     * @return \FedexApiClass\Lib\CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $UploadDocumentReferenceDetails)
    {
      $this->UploadDocumentReferenceDetails = $UploadDocumentReferenceDetails;
      return $this;
    }

}

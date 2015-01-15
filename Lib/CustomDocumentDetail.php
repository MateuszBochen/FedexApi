<?php

namespace FedexApi\Lib;

class CustomDocumentDetail
{

    /**
     * @var ShippingDocumentFormat $Format
     */
    protected $Format = null;

    /**
     * @var LabelPrintingOrientationType $LabelPrintingOrientation
     */
    protected $LabelPrintingOrientation = null;

    /**
     * @var LabelRotationType $LabelRotation
     */
    protected $LabelRotation = null;

    /**
     * @var string $SpecificationId
     */
    protected $SpecificationId = null;

    /**
     * @var string $CustomDocumentIdentifier
     */
    protected $CustomDocumentIdentifier = null;

    /**
     * @var DocTabContent $DocTabContent
     */
    protected $DocTabContent = null;

    /**
     * @param ShippingDocumentFormat $Format
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * @param LabelRotationType $LabelRotation
     * @param string $SpecificationId
     * @param string $CustomDocumentIdentifier
     * @param DocTabContent $DocTabContent
     */
    public function __construct($Format, $LabelPrintingOrientation, $LabelRotation, $SpecificationId, $CustomDocumentIdentifier, $DocTabContent)
    {
      $this->Format = $Format;
      $this->LabelPrintingOrientation = $LabelPrintingOrientation;
      $this->LabelRotation = $LabelRotation;
      $this->SpecificationId = $SpecificationId;
      $this->CustomDocumentIdentifier = $CustomDocumentIdentifier;
      $this->DocTabContent = $DocTabContent;
    }

    /**
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param ShippingDocumentFormat $Format
     * @return \FedexApi\Lib\CustomDocumentDetail
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return LabelPrintingOrientationType
     */
    public function getLabelPrintingOrientation()
    {
      return $this->LabelPrintingOrientation;
    }

    /**
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * @return \FedexApi\Lib\CustomDocumentDetail
     */
    public function setLabelPrintingOrientation($LabelPrintingOrientation)
    {
      $this->LabelPrintingOrientation = $LabelPrintingOrientation;
      return $this;
    }

    /**
     * @return LabelRotationType
     */
    public function getLabelRotation()
    {
      return $this->LabelRotation;
    }

    /**
     * @param LabelRotationType $LabelRotation
     * @return \FedexApi\Lib\CustomDocumentDetail
     */
    public function setLabelRotation($LabelRotation)
    {
      $this->LabelRotation = $LabelRotation;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecificationId()
    {
      return $this->SpecificationId;
    }

    /**
     * @param string $SpecificationId
     * @return \FedexApi\Lib\CustomDocumentDetail
     */
    public function setSpecificationId($SpecificationId)
    {
      $this->SpecificationId = $SpecificationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomDocumentIdentifier()
    {
      return $this->CustomDocumentIdentifier;
    }

    /**
     * @param string $CustomDocumentIdentifier
     * @return \FedexApi\Lib\CustomDocumentDetail
     */
    public function setCustomDocumentIdentifier($CustomDocumentIdentifier)
    {
      $this->CustomDocumentIdentifier = $CustomDocumentIdentifier;
      return $this;
    }

    /**
     * @return DocTabContent
     */
    public function getDocTabContent()
    {
      return $this->DocTabContent;
    }

    /**
     * @param DocTabContent $DocTabContent
     * @return \FedexApi\Lib\CustomDocumentDetail
     */
    public function setDocTabContent($DocTabContent)
    {
      $this->DocTabContent = $DocTabContent;
      return $this;
    }

}

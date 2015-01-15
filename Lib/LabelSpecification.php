<?php

namespace FedexApiClass\Lib;

class LabelSpecification
{

    /**
     * @var ShippingDocumentDispositionDetail[] $Dispositions
     */
    protected $Dispositions = null;

    /**
     * @var LabelFormatType $LabelFormatType
     */
    protected $LabelFormatType = null;

    /**
     * @var ShippingDocumentImageType $ImageType
     */
    protected $ImageType = null;

    /**
     * @var LabelStockType $LabelStockType
     */
    protected $LabelStockType = null;

    /**
     * @var LabelPrintingOrientationType $LabelPrintingOrientation
     */
    protected $LabelPrintingOrientation = null;

    /**
     * @var LabelOrderType $LabelOrder
     */
    protected $LabelOrder = null;

    /**
     * @var ContactAndAddress $PrintedLabelOrigin
     */
    protected $PrintedLabelOrigin = null;

    /**
     * @var CustomerSpecifiedLabelDetail $CustomerSpecifiedDetail
     */
    protected $CustomerSpecifiedDetail = null;

    /**
     * @param ShippingDocumentDispositionDetail[] $Dispositions
     * @param LabelFormatType $LabelFormatType
     * @param ShippingDocumentImageType $ImageType
     * @param LabelStockType $LabelStockType
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * @param LabelOrderType $LabelOrder
     * @param ContactAndAddress $PrintedLabelOrigin
     * @param CustomerSpecifiedLabelDetail $CustomerSpecifiedDetail
     */
    public function __construct(array $Dispositions = null, $LabelFormatType = null, $ImageType = null, $LabelStockType = null, $LabelPrintingOrientation = null, $LabelOrder = null, $PrintedLabelOrigin = null, $CustomerSpecifiedDetail = null)
    {
      $this->Dispositions = $Dispositions;
      $this->LabelFormatType = $LabelFormatType;
      $this->ImageType = $ImageType;
      $this->LabelStockType = $LabelStockType;
      $this->LabelPrintingOrientation = $LabelPrintingOrientation;
      $this->LabelOrder = $LabelOrder;
      $this->PrintedLabelOrigin = $PrintedLabelOrigin;
      $this->CustomerSpecifiedDetail = $CustomerSpecifiedDetail;
    }

    /**
     * @return ShippingDocumentDispositionDetail[]
     */
    public function getDispositions()
    {
      return $this->Dispositions;
    }

    /**
     * @param ShippingDocumentDispositionDetail[] $Dispositions
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setDispositions(array $Dispositions)
    {
      $this->Dispositions = $Dispositions;
      return $this;
    }

    /**
     * @return LabelFormatType
     */
    public function getLabelFormatType()
    {
      return $this->LabelFormatType;
    }

    /**
     * @param LabelFormatType $LabelFormatType
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setLabelFormatType($LabelFormatType)
    {
      $this->LabelFormatType = $LabelFormatType;
      return $this;
    }

    /**
     * @return ShippingDocumentImageType
     */
    public function getImageType()
    {
      return $this->ImageType;
    }

    /**
     * @param ShippingDocumentImageType $ImageType
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setImageType($ImageType)
    {
      $this->ImageType = $ImageType;
      return $this;
    }

    /**
     * @return LabelStockType
     */
    public function getLabelStockType()
    {
      return $this->LabelStockType;
    }

    /**
     * @param LabelStockType $LabelStockType
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setLabelStockType($LabelStockType)
    {
      $this->LabelStockType = $LabelStockType;
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
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setLabelPrintingOrientation($LabelPrintingOrientation)
    {
      $this->LabelPrintingOrientation = $LabelPrintingOrientation;
      return $this;
    }

    /**
     * @return LabelOrderType
     */
    public function getLabelOrder()
    {
      return $this->LabelOrder;
    }

    /**
     * @param LabelOrderType $LabelOrder
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setLabelOrder($LabelOrder)
    {
      $this->LabelOrder = $LabelOrder;
      return $this;
    }

    /**
     * @return ContactAndAddress
     */
    public function getPrintedLabelOrigin()
    {
      return $this->PrintedLabelOrigin;
    }

    /**
     * @param ContactAndAddress $PrintedLabelOrigin
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setPrintedLabelOrigin($PrintedLabelOrigin)
    {
      $this->PrintedLabelOrigin = $PrintedLabelOrigin;
      return $this;
    }

    /**
     * @return CustomerSpecifiedLabelDetail
     */
    public function getCustomerSpecifiedDetail()
    {
      return $this->CustomerSpecifiedDetail;
    }

    /**
     * @param CustomerSpecifiedLabelDetail $CustomerSpecifiedDetail
     * @return \FedexApiClass\Lib\LabelSpecification
     */
    public function setCustomerSpecifiedDetail($CustomerSpecifiedDetail)
    {
      $this->CustomerSpecifiedDetail = $CustomerSpecifiedDetail;
      return $this;
    }

}

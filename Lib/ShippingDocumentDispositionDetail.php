<?php

namespace FedexApiClass\Lib;

class ShippingDocumentDispositionDetail
{

    /**
     * @var ShippingDocumentDispositionType $DispositionType
     */
    protected $DispositionType = null;

    /**
     * @var ShippingDocumentGroupingType $Grouping
     */
    protected $Grouping = null;

    /**
     * @var ShippingDocumentEMailDetail $EMailDetail
     */
    protected $EMailDetail = null;

    /**
     * @var ShippingDocumentPrintDetail $PrintDetail
     */
    protected $PrintDetail = null;

    /**
     * @param ShippingDocumentDispositionType $DispositionType
     * @param ShippingDocumentGroupingType $Grouping
     * @param ShippingDocumentEMailDetail $EMailDetail
     * @param ShippingDocumentPrintDetail $PrintDetail
     */
    public function __construct($DispositionType = null, $Grouping = null, $EMailDetail = null, $PrintDetail = null)
    {
      $this->DispositionType = $DispositionType;
      $this->Grouping = $Grouping;
      $this->EMailDetail = $EMailDetail;
      $this->PrintDetail = $PrintDetail;
    }

    /**
     * @return ShippingDocumentDispositionType
     */
    public function getDispositionType()
    {
      return $this->DispositionType;
    }

    /**
     * @param ShippingDocumentDispositionType $DispositionType
     * @return \FedexApiClass\Lib\ShippingDocumentDispositionDetail
     */
    public function setDispositionType($DispositionType)
    {
      $this->DispositionType = $DispositionType;
      return $this;
    }

    /**
     * @return ShippingDocumentGroupingType
     */
    public function getGrouping()
    {
      return $this->Grouping;
    }

    /**
     * @param ShippingDocumentGroupingType $Grouping
     * @return \FedexApiClass\Lib\ShippingDocumentDispositionDetail
     */
    public function setGrouping($Grouping)
    {
      $this->Grouping = $Grouping;
      return $this;
    }

    /**
     * @return ShippingDocumentEMailDetail
     */
    public function getEMailDetail()
    {
      return $this->EMailDetail;
    }

    /**
     * @param ShippingDocumentEMailDetail $EMailDetail
     * @return \FedexApiClass\Lib\ShippingDocumentDispositionDetail
     */
    public function setEMailDetail($EMailDetail)
    {
      $this->EMailDetail = $EMailDetail;
      return $this;
    }

    /**
     * @return ShippingDocumentPrintDetail
     */
    public function getPrintDetail()
    {
      return $this->PrintDetail;
    }

    /**
     * @param ShippingDocumentPrintDetail $PrintDetail
     * @return \FedexApiClass\Lib\ShippingDocumentDispositionDetail
     */
    public function setPrintDetail($PrintDetail)
    {
      $this->PrintDetail = $PrintDetail;
      return $this;
    }

}

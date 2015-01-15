<?php

namespace FedexApiClass\Lib;

class FreightAddressLabelDetail
{

    /**
     * @var ShippingDocumentFormat $Format
     */
    protected $Format = null;

    /**
     * @var int $Copies
     */
    protected $Copies = null;

    /**
     * @var PageQuadrantType $StartingPosition
     */
    protected $StartingPosition = null;

    /**
     * @var DocTabContent $DocTabContent
     */
    protected $DocTabContent = null;

    /**
     * @var RelativeVerticalPositionType $CustomContentPosition
     */
    protected $CustomContentPosition = null;

    /**
     * @var CustomLabelDetail $CustomContent
     */
    protected $CustomContent = null;

    /**
     * @param ShippingDocumentFormat $Format
     * @param int $Copies
     * @param PageQuadrantType $StartingPosition
     * @param DocTabContent $DocTabContent
     * @param RelativeVerticalPositionType $CustomContentPosition
     * @param CustomLabelDetail $CustomContent
     */
    public function __construct($Format = null, $Copies = null, $StartingPosition = null, $DocTabContent = null, $CustomContentPosition = null, $CustomContent = null)
    {
      $this->Format = $Format;
      $this->Copies = $Copies;
      $this->StartingPosition = $StartingPosition;
      $this->DocTabContent = $DocTabContent;
      $this->CustomContentPosition = $CustomContentPosition;
      $this->CustomContent = $CustomContent;
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
     * @return \FedexApiClass\Lib\FreightAddressLabelDetail
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return int
     */
    public function getCopies()
    {
      return $this->Copies;
    }

    /**
     * @param int $Copies
     * @return \FedexApiClass\Lib\FreightAddressLabelDetail
     */
    public function setCopies($Copies)
    {
      $this->Copies = $Copies;
      return $this;
    }

    /**
     * @return PageQuadrantType
     */
    public function getStartingPosition()
    {
      return $this->StartingPosition;
    }

    /**
     * @param PageQuadrantType $StartingPosition
     * @return \FedexApiClass\Lib\FreightAddressLabelDetail
     */
    public function setStartingPosition($StartingPosition)
    {
      $this->StartingPosition = $StartingPosition;
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
     * @return \FedexApiClass\Lib\FreightAddressLabelDetail
     */
    public function setDocTabContent($DocTabContent)
    {
      $this->DocTabContent = $DocTabContent;
      return $this;
    }

    /**
     * @return RelativeVerticalPositionType
     */
    public function getCustomContentPosition()
    {
      return $this->CustomContentPosition;
    }

    /**
     * @param RelativeVerticalPositionType $CustomContentPosition
     * @return \FedexApiClass\Lib\FreightAddressLabelDetail
     */
    public function setCustomContentPosition($CustomContentPosition)
    {
      $this->CustomContentPosition = $CustomContentPosition;
      return $this;
    }

    /**
     * @return CustomLabelDetail
     */
    public function getCustomContent()
    {
      return $this->CustomContent;
    }

    /**
     * @param CustomLabelDetail $CustomContent
     * @return \FedexApiClass\Lib\FreightAddressLabelDetail
     */
    public function setCustomContent($CustomContent)
    {
      $this->CustomContent = $CustomContent;
      return $this;
    }

}

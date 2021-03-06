<?php

namespace FedexApiClass\Lib;

class CodReturnPackageDetail
{

    /**
     * @var Money $CollectionAmount
     */
    protected $CollectionAmount = null;

    /**
     * @var CodAdjustmentType $AdjustmentType
     */
    protected $AdjustmentType = null;

    /**
     * @var boolean $Electronic
     */
    protected $Electronic = null;

    /**
     * @var PackageBarcodes $Barcodes
     */
    protected $Barcodes = null;

    /**
     * @var ShippingDocument $Label
     */
    protected $Label = null;

    /**
     * @param Money $CollectionAmount
     * @param CodAdjustmentType $AdjustmentType
     * @param boolean $Electronic
     * @param PackageBarcodes $Barcodes
     * @param ShippingDocument $Label
     */
    public function __construct($CollectionAmount = null, $AdjustmentType = null, $Electronic = null, $Barcodes = null, $Label = null)
    {
      $this->CollectionAmount = $CollectionAmount;
      $this->AdjustmentType = $AdjustmentType;
      $this->Electronic = $Electronic;
      $this->Barcodes = $Barcodes;
      $this->Label = $Label;
    }

    /**
     * @return Money
     */
    public function getCollectionAmount()
    {
      return $this->CollectionAmount;
    }

    /**
     * @param Money $CollectionAmount
     * @return \FedexApiClass\Lib\CodReturnPackageDetail
     */
    public function setCollectionAmount($CollectionAmount)
    {
      $this->CollectionAmount = $CollectionAmount;
      return $this;
    }

    /**
     * @return CodAdjustmentType
     */
    public function getAdjustmentType()
    {
      return $this->AdjustmentType;
    }

    /**
     * @param CodAdjustmentType $AdjustmentType
     * @return \FedexApiClass\Lib\CodReturnPackageDetail
     */
    public function setAdjustmentType($AdjustmentType)
    {
      $this->AdjustmentType = $AdjustmentType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getElectronic()
    {
      return $this->Electronic;
    }

    /**
     * @param boolean $Electronic
     * @return \FedexApiClass\Lib\CodReturnPackageDetail
     */
    public function setElectronic($Electronic)
    {
      $this->Electronic = $Electronic;
      return $this;
    }

    /**
     * @return PackageBarcodes
     */
    public function getBarcodes()
    {
      return $this->Barcodes;
    }

    /**
     * @param PackageBarcodes $Barcodes
     * @return \FedexApiClass\Lib\CodReturnPackageDetail
     */
    public function setBarcodes($Barcodes)
    {
      $this->Barcodes = $Barcodes;
      return $this;
    }

    /**
     * @return ShippingDocument
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param ShippingDocument $Label
     * @return \FedexApiClass\Lib\CodReturnPackageDetail
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

}

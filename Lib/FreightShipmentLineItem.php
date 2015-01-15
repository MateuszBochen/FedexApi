<?php

namespace FedexApi\Lib;

class FreightShipmentLineItem
{

    /**
     * @var FreightClassType $FreightClass
     */
    protected $FreightClass = null;

    /**
     * @var boolean $ClassProvidedByCustomer
     */
    protected $ClassProvidedByCustomer = null;

    /**
     * @var int $HandlingUnits
     */
    protected $HandlingUnits = null;

    /**
     * @var PhysicalPackagingType $Packaging
     */
    protected $Packaging = null;

    /**
     * @var int $Pieces
     */
    protected $Pieces = null;

    /**
     * @var string $NmfcCode
     */
    protected $NmfcCode = null;

    /**
     * @var HazardousCommodityOptionType $HazardousMaterials
     */
    protected $HazardousMaterials = null;

    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var Weight $Weight
     */
    protected $Weight = null;

    /**
     * @var Dimensions $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var Volume $Volume
     */
    protected $Volume = null;

    /**
     * @param FreightClassType $FreightClass
     * @param boolean $ClassProvidedByCustomer
     * @param int $HandlingUnits
     * @param PhysicalPackagingType $Packaging
     * @param int $Pieces
     * @param string $NmfcCode
     * @param HazardousCommodityOptionType $HazardousMaterials
     * @param string $PurchaseOrderNumber
     * @param string $Description
     * @param Weight $Weight
     * @param Dimensions $Dimensions
     * @param Volume $Volume
     */
    public function __construct($FreightClass, $ClassProvidedByCustomer, $HandlingUnits, $Packaging, $Pieces, $NmfcCode, $HazardousMaterials, $PurchaseOrderNumber, $Description, $Weight, $Dimensions, $Volume)
    {
      $this->FreightClass = $FreightClass;
      $this->ClassProvidedByCustomer = $ClassProvidedByCustomer;
      $this->HandlingUnits = $HandlingUnits;
      $this->Packaging = $Packaging;
      $this->Pieces = $Pieces;
      $this->NmfcCode = $NmfcCode;
      $this->HazardousMaterials = $HazardousMaterials;
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
      $this->Description = $Description;
      $this->Weight = $Weight;
      $this->Dimensions = $Dimensions;
      $this->Volume = $Volume;
    }

    /**
     * @return FreightClassType
     */
    public function getFreightClass()
    {
      return $this->FreightClass;
    }

    /**
     * @param FreightClassType $FreightClass
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setFreightClass($FreightClass)
    {
      $this->FreightClass = $FreightClass;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassProvidedByCustomer()
    {
      return $this->ClassProvidedByCustomer;
    }

    /**
     * @param boolean $ClassProvidedByCustomer
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setClassProvidedByCustomer($ClassProvidedByCustomer)
    {
      $this->ClassProvidedByCustomer = $ClassProvidedByCustomer;
      return $this;
    }

    /**
     * @return int
     */
    public function getHandlingUnits()
    {
      return $this->HandlingUnits;
    }

    /**
     * @param int $HandlingUnits
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setHandlingUnits($HandlingUnits)
    {
      $this->HandlingUnits = $HandlingUnits;
      return $this;
    }

    /**
     * @return PhysicalPackagingType
     */
    public function getPackaging()
    {
      return $this->Packaging;
    }

    /**
     * @param PhysicalPackagingType $Packaging
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setPackaging($Packaging)
    {
      $this->Packaging = $Packaging;
      return $this;
    }

    /**
     * @return int
     */
    public function getPieces()
    {
      return $this->Pieces;
    }

    /**
     * @param int $Pieces
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setPieces($Pieces)
    {
      $this->Pieces = $Pieces;
      return $this;
    }

    /**
     * @return string
     */
    public function getNmfcCode()
    {
      return $this->NmfcCode;
    }

    /**
     * @param string $NmfcCode
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setNmfcCode($NmfcCode)
    {
      $this->NmfcCode = $NmfcCode;
      return $this;
    }

    /**
     * @return HazardousCommodityOptionType
     */
    public function getHazardousMaterials()
    {
      return $this->HazardousMaterials;
    }

    /**
     * @param HazardousCommodityOptionType $HazardousMaterials
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setHazardousMaterials($HazardousMaterials)
    {
      $this->HazardousMaterials = $HazardousMaterials;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
      return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
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
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param Weight $Weight
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return Dimensions
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param Dimensions $Dimensions
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return Volume
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param Volume $Volume
     * @return \FedexApi\Lib\FreightShipmentLineItem
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

}

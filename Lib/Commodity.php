<?php

namespace FedexApiClass\Lib;

class Commodity
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $NumberOfPieces
     */
    protected $NumberOfPieces = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $CountryOfManufacture
     */
    protected $CountryOfManufacture = null;

    /**
     * @var string $HarmonizedCode
     */
    protected $HarmonizedCode = null;

    /**
     * @var Weight $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $QuantityUnits
     */
    protected $QuantityUnits = null;

    /**
     * @var Measure[] $AdditionalMeasures
     */
    protected $AdditionalMeasures = null;

    /**
     * @var Money $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var Money $CustomsValue
     */
    protected $CustomsValue = null;

    /**
     * @var EdtExciseCondition[] $ExciseConditions
     */
    protected $ExciseConditions = null;

    /**
     * @var string $ExportLicenseNumber
     */
    protected $ExportLicenseNumber = null;

    /**
     * @var date $ExportLicenseExpirationDate
     */
    protected $ExportLicenseExpirationDate = null;

    /**
     * @var string $CIMarksAndNumbers
     */
    protected $CIMarksAndNumbers = null;

    /**
     * @var string $PartNumber
     */
    protected $PartNumber = null;

    /**
     * @var NaftaCommodityDetail $NaftaDetail
     */
    protected $NaftaDetail = null;

    /**
     * @param string $Name
     * @param int $NumberOfPieces
     * @param string $Description
     * @param string $CountryOfManufacture
     * @param string $HarmonizedCode
     * @param Weight $Weight
     * @param float $Quantity
     * @param string $QuantityUnits
     * @param Measure[] $AdditionalMeasures
     * @param Money $UnitPrice
     * @param Money $CustomsValue
     * @param EdtExciseCondition[] $ExciseConditions
     * @param string $ExportLicenseNumber
     * @param date $ExportLicenseExpirationDate
     * @param string $CIMarksAndNumbers
     * @param string $PartNumber
     * @param NaftaCommodityDetail $NaftaDetail
     */
    public function __construct($Name, $NumberOfPieces, $Description, $CountryOfManufacture, $HarmonizedCode, $Weight, $Quantity, $QuantityUnits, array $AdditionalMeasures, $UnitPrice, $CustomsValue, array $ExciseConditions, $ExportLicenseNumber, $ExportLicenseExpirationDate, $CIMarksAndNumbers, $PartNumber, $NaftaDetail)
    {
      $this->Name = $Name;
      $this->NumberOfPieces = $NumberOfPieces;
      $this->Description = $Description;
      $this->CountryOfManufacture = $CountryOfManufacture;
      $this->HarmonizedCode = $HarmonizedCode;
      $this->Weight = $Weight;
      $this->Quantity = $Quantity;
      $this->QuantityUnits = $QuantityUnits;
      $this->AdditionalMeasures = $AdditionalMeasures;
      $this->UnitPrice = $UnitPrice;
      $this->CustomsValue = $CustomsValue;
      $this->ExciseConditions = $ExciseConditions;
      $this->ExportLicenseNumber = $ExportLicenseNumber;
      $this->ExportLicenseExpirationDate = $ExportLicenseExpirationDate;
      $this->CIMarksAndNumbers = $CIMarksAndNumbers;
      $this->PartNumber = $PartNumber;
      $this->NaftaDetail = $NaftaDetail;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces()
    {
      return $this->NumberOfPieces;
    }

    /**
     * @param int $NumberOfPieces
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
      $this->NumberOfPieces = $NumberOfPieces;
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
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfManufacture()
    {
      return $this->CountryOfManufacture;
    }

    /**
     * @param string $CountryOfManufacture
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setCountryOfManufacture($CountryOfManufacture)
    {
      $this->CountryOfManufacture = $CountryOfManufacture;
      return $this;
    }

    /**
     * @return string
     */
    public function getHarmonizedCode()
    {
      return $this->HarmonizedCode;
    }

    /**
     * @param string $HarmonizedCode
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setHarmonizedCode($HarmonizedCode)
    {
      $this->HarmonizedCode = $HarmonizedCode;
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
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantityUnits()
    {
      return $this->QuantityUnits;
    }

    /**
     * @param string $QuantityUnits
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setQuantityUnits($QuantityUnits)
    {
      $this->QuantityUnits = $QuantityUnits;
      return $this;
    }

    /**
     * @return Measure[]
     */
    public function getAdditionalMeasures()
    {
      return $this->AdditionalMeasures;
    }

    /**
     * @param Measure[] $AdditionalMeasures
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setAdditionalMeasures(array $AdditionalMeasures)
    {
      $this->AdditionalMeasures = $AdditionalMeasures;
      return $this;
    }

    /**
     * @return Money
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param Money $UnitPrice
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCustomsValue()
    {
      return $this->CustomsValue;
    }

    /**
     * @param Money $CustomsValue
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setCustomsValue($CustomsValue)
    {
      $this->CustomsValue = $CustomsValue;
      return $this;
    }

    /**
     * @return EdtExciseCondition[]
     */
    public function getExciseConditions()
    {
      return $this->ExciseConditions;
    }

    /**
     * @param EdtExciseCondition[] $ExciseConditions
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setExciseConditions(array $ExciseConditions)
    {
      $this->ExciseConditions = $ExciseConditions;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportLicenseNumber()
    {
      return $this->ExportLicenseNumber;
    }

    /**
     * @param string $ExportLicenseNumber
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setExportLicenseNumber($ExportLicenseNumber)
    {
      $this->ExportLicenseNumber = $ExportLicenseNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getExportLicenseExpirationDate()
    {
      return $this->ExportLicenseExpirationDate;
    }

    /**
     * @param date $ExportLicenseExpirationDate
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setExportLicenseExpirationDate($ExportLicenseExpirationDate)
    {
      $this->ExportLicenseExpirationDate = $ExportLicenseExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCIMarksAndNumbers()
    {
      return $this->CIMarksAndNumbers;
    }

    /**
     * @param string $CIMarksAndNumbers
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setCIMarksAndNumbers($CIMarksAndNumbers)
    {
      $this->CIMarksAndNumbers = $CIMarksAndNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartNumber()
    {
      return $this->PartNumber;
    }

    /**
     * @param string $PartNumber
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setPartNumber($PartNumber)
    {
      $this->PartNumber = $PartNumber;
      return $this;
    }

    /**
     * @return NaftaCommodityDetail
     */
    public function getNaftaDetail()
    {
      return $this->NaftaDetail;
    }

    /**
     * @param NaftaCommodityDetail $NaftaDetail
     * @return \FedexApiClass\Lib\Commodity
     */
    public function setNaftaDetail($NaftaDetail)
    {
      $this->NaftaDetail = $NaftaDetail;
      return $this;
    }

}

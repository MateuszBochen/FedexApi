<?php

namespace FedexApi\Lib;

class ShippingDocument
{

    /**
     * @var ReturnedShippingDocumentType $Type
     */
    protected $Type = null;

    /**
     * @var Localization[] $Localizations
     */
    protected $Localizations = null;

    /**
     * @var ShippingDocumentGroupingType $Grouping
     */
    protected $Grouping = null;

    /**
     * @var ShippingDocumentDispositionType $ShippingDocumentDisposition
     */
    protected $ShippingDocumentDisposition = null;

    /**
     * @var string $AccessReference
     */
    protected $AccessReference = null;

    /**
     * @var ShippingDocumentImageType $ImageType
     */
    protected $ImageType = null;

    /**
     * @var int $Resolution
     */
    protected $Resolution = null;

    /**
     * @var int $CopiesToPrint
     */
    protected $CopiesToPrint = null;

    /**
     * @var ShippingDocumentPart[] $Parts
     */
    protected $Parts = null;

    /**
     * @param ReturnedShippingDocumentType $Type
     * @param Localization[] $Localizations
     * @param ShippingDocumentGroupingType $Grouping
     * @param ShippingDocumentDispositionType $ShippingDocumentDisposition
     * @param string $AccessReference
     * @param ShippingDocumentImageType $ImageType
     * @param int $Resolution
     * @param int $CopiesToPrint
     * @param ShippingDocumentPart[] $Parts
     */
    public function __construct($Type, array $Localizations, $Grouping, $ShippingDocumentDisposition, $AccessReference, $ImageType, $Resolution, $CopiesToPrint, array $Parts)
    {
      $this->Type = $Type;
      $this->Localizations = $Localizations;
      $this->Grouping = $Grouping;
      $this->ShippingDocumentDisposition = $ShippingDocumentDisposition;
      $this->AccessReference = $AccessReference;
      $this->ImageType = $ImageType;
      $this->Resolution = $Resolution;
      $this->CopiesToPrint = $CopiesToPrint;
      $this->Parts = $Parts;
    }

    /**
     * @return ReturnedShippingDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ReturnedShippingDocumentType $Type
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return Localization[]
     */
    public function getLocalizations()
    {
      return $this->Localizations;
    }

    /**
     * @param Localization[] $Localizations
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setLocalizations(array $Localizations)
    {
      $this->Localizations = $Localizations;
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
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setGrouping($Grouping)
    {
      $this->Grouping = $Grouping;
      return $this;
    }

    /**
     * @return ShippingDocumentDispositionType
     */
    public function getShippingDocumentDisposition()
    {
      return $this->ShippingDocumentDisposition;
    }

    /**
     * @param ShippingDocumentDispositionType $ShippingDocumentDisposition
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setShippingDocumentDisposition($ShippingDocumentDisposition)
    {
      $this->ShippingDocumentDisposition = $ShippingDocumentDisposition;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccessReference()
    {
      return $this->AccessReference;
    }

    /**
     * @param string $AccessReference
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setAccessReference($AccessReference)
    {
      $this->AccessReference = $AccessReference;
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
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setImageType($ImageType)
    {
      $this->ImageType = $ImageType;
      return $this;
    }

    /**
     * @return int
     */
    public function getResolution()
    {
      return $this->Resolution;
    }

    /**
     * @param int $Resolution
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setResolution($Resolution)
    {
      $this->Resolution = $Resolution;
      return $this;
    }

    /**
     * @return int
     */
    public function getCopiesToPrint()
    {
      return $this->CopiesToPrint;
    }

    /**
     * @param int $CopiesToPrint
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setCopiesToPrint($CopiesToPrint)
    {
      $this->CopiesToPrint = $CopiesToPrint;
      return $this;
    }

    /**
     * @return ShippingDocumentPart[]
     */
    public function getParts()
    {
      return $this->Parts;
    }

    /**
     * @param ShippingDocumentPart[] $Parts
     * @return \FedexApi\Lib\ShippingDocument
     */
    public function setParts(array $Parts)
    {
      $this->Parts = $Parts;
      return $this;
    }

}

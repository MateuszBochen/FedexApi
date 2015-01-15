<?php

namespace FedexApi\Lib;

class ShippingDocumentFormat
{

    /**
     * @var ShippingDocumentDispositionDetail[] $Dispositions
     */
    protected $Dispositions = null;

    /**
     * @var LinearMeasure $TopOfPageOffset
     */
    protected $TopOfPageOffset = null;

    /**
     * @var ShippingDocumentImageType $ImageType
     */
    protected $ImageType = null;

    /**
     * @var ShippingDocumentStockType $StockType
     */
    protected $StockType = null;

    /**
     * @var boolean $ProvideInstructions
     */
    protected $ProvideInstructions = null;

    /**
     * @var DocumentFormatOptionsRequested $OptionsRequested
     */
    protected $OptionsRequested = null;

    /**
     * @var Localization $Localization
     */
    protected $Localization = null;

    /**
     * @var string $CustomDocumentIdentifier
     */
    protected $CustomDocumentIdentifier = null;

    /**
     * @param ShippingDocumentDispositionDetail[] $Dispositions
     * @param LinearMeasure $TopOfPageOffset
     * @param ShippingDocumentImageType $ImageType
     * @param ShippingDocumentStockType $StockType
     * @param boolean $ProvideInstructions
     * @param DocumentFormatOptionsRequested $OptionsRequested
     * @param Localization $Localization
     * @param string $CustomDocumentIdentifier
     */
    public function __construct(array $Dispositions, $TopOfPageOffset, $ImageType, $StockType, $ProvideInstructions, $OptionsRequested, $Localization, $CustomDocumentIdentifier)
    {
      $this->Dispositions = $Dispositions;
      $this->TopOfPageOffset = $TopOfPageOffset;
      $this->ImageType = $ImageType;
      $this->StockType = $StockType;
      $this->ProvideInstructions = $ProvideInstructions;
      $this->OptionsRequested = $OptionsRequested;
      $this->Localization = $Localization;
      $this->CustomDocumentIdentifier = $CustomDocumentIdentifier;
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
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setDispositions(array $Dispositions)
    {
      $this->Dispositions = $Dispositions;
      return $this;
    }

    /**
     * @return LinearMeasure
     */
    public function getTopOfPageOffset()
    {
      return $this->TopOfPageOffset;
    }

    /**
     * @param LinearMeasure $TopOfPageOffset
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setTopOfPageOffset($TopOfPageOffset)
    {
      $this->TopOfPageOffset = $TopOfPageOffset;
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
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setImageType($ImageType)
    {
      $this->ImageType = $ImageType;
      return $this;
    }

    /**
     * @return ShippingDocumentStockType
     */
    public function getStockType()
    {
      return $this->StockType;
    }

    /**
     * @param ShippingDocumentStockType $StockType
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setStockType($StockType)
    {
      $this->StockType = $StockType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProvideInstructions()
    {
      return $this->ProvideInstructions;
    }

    /**
     * @param boolean $ProvideInstructions
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setProvideInstructions($ProvideInstructions)
    {
      $this->ProvideInstructions = $ProvideInstructions;
      return $this;
    }

    /**
     * @return DocumentFormatOptionsRequested
     */
    public function getOptionsRequested()
    {
      return $this->OptionsRequested;
    }

    /**
     * @param DocumentFormatOptionsRequested $OptionsRequested
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setOptionsRequested($OptionsRequested)
    {
      $this->OptionsRequested = $OptionsRequested;
      return $this;
    }

    /**
     * @return Localization
     */
    public function getLocalization()
    {
      return $this->Localization;
    }

    /**
     * @param Localization $Localization
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setLocalization($Localization)
    {
      $this->Localization = $Localization;
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
     * @return \FedexApi\Lib\ShippingDocumentFormat
     */
    public function setCustomDocumentIdentifier($CustomDocumentIdentifier)
    {
      $this->CustomDocumentIdentifier = $CustomDocumentIdentifier;
      return $this;
    }

}

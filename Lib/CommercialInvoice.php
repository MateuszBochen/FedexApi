<?php

namespace FedexApi\Lib;

class CommercialInvoice
{

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var Money $FreightCharge
     */
    protected $FreightCharge = null;

    /**
     * @var Money $TaxesOrMiscellaneousCharge
     */
    protected $TaxesOrMiscellaneousCharge = null;

    /**
     * @var TaxesOrMiscellaneousChargeType $TaxesOrMiscellaneousChargeType
     */
    protected $TaxesOrMiscellaneousChargeType = null;

    /**
     * @var Money $PackingCosts
     */
    protected $PackingCosts = null;

    /**
     * @var Money $HandlingCosts
     */
    protected $HandlingCosts = null;

    /**
     * @var string $SpecialInstructions
     */
    protected $SpecialInstructions = null;

    /**
     * @var string $DeclarationStatement
     */
    protected $DeclarationStatement = null;

    /**
     * @var string $PaymentTerms
     */
    protected $PaymentTerms = null;

    /**
     * @var PurposeOfShipmentType $Purpose
     */
    protected $Purpose = null;

    /**
     * @var CustomerReference[] $CustomerReferences
     */
    protected $CustomerReferences = null;

    /**
     * @var string $OriginatorName
     */
    protected $OriginatorName = null;

    /**
     * @var string $TermsOfSale
     */
    protected $TermsOfSale = null;

    /**
     * @param string $Comments
     * @param Money $FreightCharge
     * @param Money $TaxesOrMiscellaneousCharge
     * @param TaxesOrMiscellaneousChargeType $TaxesOrMiscellaneousChargeType
     * @param Money $PackingCosts
     * @param Money $HandlingCosts
     * @param string $SpecialInstructions
     * @param string $DeclarationStatement
     * @param string $PaymentTerms
     * @param PurposeOfShipmentType $Purpose
     * @param CustomerReference[] $CustomerReferences
     * @param string $OriginatorName
     * @param string $TermsOfSale
     */
    public function __construct($Comments, $FreightCharge, $TaxesOrMiscellaneousCharge, $TaxesOrMiscellaneousChargeType, $PackingCosts, $HandlingCosts, $SpecialInstructions, $DeclarationStatement, $PaymentTerms, $Purpose, array $CustomerReferences, $OriginatorName, $TermsOfSale)
    {
      $this->Comments = $Comments;
      $this->FreightCharge = $FreightCharge;
      $this->TaxesOrMiscellaneousCharge = $TaxesOrMiscellaneousCharge;
      $this->TaxesOrMiscellaneousChargeType = $TaxesOrMiscellaneousChargeType;
      $this->PackingCosts = $PackingCosts;
      $this->HandlingCosts = $HandlingCosts;
      $this->SpecialInstructions = $SpecialInstructions;
      $this->DeclarationStatement = $DeclarationStatement;
      $this->PaymentTerms = $PaymentTerms;
      $this->Purpose = $Purpose;
      $this->CustomerReferences = $CustomerReferences;
      $this->OriginatorName = $OriginatorName;
      $this->TermsOfSale = $TermsOfSale;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return Money
     */
    public function getFreightCharge()
    {
      return $this->FreightCharge;
    }

    /**
     * @param Money $FreightCharge
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setFreightCharge($FreightCharge)
    {
      $this->FreightCharge = $FreightCharge;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTaxesOrMiscellaneousCharge()
    {
      return $this->TaxesOrMiscellaneousCharge;
    }

    /**
     * @param Money $TaxesOrMiscellaneousCharge
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge($TaxesOrMiscellaneousCharge)
    {
      $this->TaxesOrMiscellaneousCharge = $TaxesOrMiscellaneousCharge;
      return $this;
    }

    /**
     * @return TaxesOrMiscellaneousChargeType
     */
    public function getTaxesOrMiscellaneousChargeType()
    {
      return $this->TaxesOrMiscellaneousChargeType;
    }

    /**
     * @param TaxesOrMiscellaneousChargeType $TaxesOrMiscellaneousChargeType
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setTaxesOrMiscellaneousChargeType($TaxesOrMiscellaneousChargeType)
    {
      $this->TaxesOrMiscellaneousChargeType = $TaxesOrMiscellaneousChargeType;
      return $this;
    }

    /**
     * @return Money
     */
    public function getPackingCosts()
    {
      return $this->PackingCosts;
    }

    /**
     * @param Money $PackingCosts
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setPackingCosts($PackingCosts)
    {
      $this->PackingCosts = $PackingCosts;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHandlingCosts()
    {
      return $this->HandlingCosts;
    }

    /**
     * @param Money $HandlingCosts
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setHandlingCosts($HandlingCosts)
    {
      $this->HandlingCosts = $HandlingCosts;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialInstructions()
    {
      return $this->SpecialInstructions;
    }

    /**
     * @param string $SpecialInstructions
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setSpecialInstructions($SpecialInstructions)
    {
      $this->SpecialInstructions = $SpecialInstructions;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeclarationStatement()
    {
      return $this->DeclarationStatement;
    }

    /**
     * @param string $DeclarationStatement
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setDeclarationStatement($DeclarationStatement)
    {
      $this->DeclarationStatement = $DeclarationStatement;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentTerms()
    {
      return $this->PaymentTerms;
    }

    /**
     * @param string $PaymentTerms
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setPaymentTerms($PaymentTerms)
    {
      $this->PaymentTerms = $PaymentTerms;
      return $this;
    }

    /**
     * @return PurposeOfShipmentType
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param PurposeOfShipmentType $Purpose
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

    /**
     * @return CustomerReference[]
     */
    public function getCustomerReferences()
    {
      return $this->CustomerReferences;
    }

    /**
     * @param CustomerReference[] $CustomerReferences
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setCustomerReferences(array $CustomerReferences)
    {
      $this->CustomerReferences = $CustomerReferences;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginatorName()
    {
      return $this->OriginatorName;
    }

    /**
     * @param string $OriginatorName
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setOriginatorName($OriginatorName)
    {
      $this->OriginatorName = $OriginatorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfSale()
    {
      return $this->TermsOfSale;
    }

    /**
     * @param string $TermsOfSale
     * @return \FedexApi\Lib\CommercialInvoice
     */
    public function setTermsOfSale($TermsOfSale)
    {
      $this->TermsOfSale = $TermsOfSale;
      return $this;
    }

}

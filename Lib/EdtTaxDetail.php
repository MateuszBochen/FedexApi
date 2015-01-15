<?php

namespace FedexApi\Lib;

class EdtTaxDetail
{

    /**
     * @var EdtTaxType $TaxType
     */
    protected $TaxType = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var Money $TaxableValue
     */
    protected $TaxableValue = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Formula
     */
    protected $Formula = null;

    /**
     * @var Money $Amount
     */
    protected $Amount = null;

    /**
     * @param EdtTaxType $TaxType
     * @param date $EffectiveDate
     * @param string $Name
     * @param Money $TaxableValue
     * @param string $Description
     * @param string $Formula
     * @param Money $Amount
     */
    public function __construct($TaxType, $EffectiveDate, $Name, $TaxableValue, $Description, $Formula, $Amount)
    {
      $this->TaxType = $TaxType;
      $this->EffectiveDate = $EffectiveDate;
      $this->Name = $Name;
      $this->TaxableValue = $TaxableValue;
      $this->Description = $Description;
      $this->Formula = $Formula;
      $this->Amount = $Amount;
    }

    /**
     * @return EdtTaxType
     */
    public function getTaxType()
    {
      return $this->TaxType;
    }

    /**
     * @param EdtTaxType $TaxType
     * @return \FedexApi\Lib\EdtTaxDetail
     */
    public function setTaxType($TaxType)
    {
      $this->TaxType = $TaxType;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \FedexApi\Lib\EdtTaxDetail
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
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
     * @return \FedexApi\Lib\EdtTaxDetail
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTaxableValue()
    {
      return $this->TaxableValue;
    }

    /**
     * @param Money $TaxableValue
     * @return \FedexApi\Lib\EdtTaxDetail
     */
    public function setTaxableValue($TaxableValue)
    {
      $this->TaxableValue = $TaxableValue;
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
     * @return \FedexApi\Lib\EdtTaxDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormula()
    {
      return $this->Formula;
    }

    /**
     * @param string $Formula
     * @return \FedexApi\Lib\EdtTaxDetail
     */
    public function setFormula($Formula)
    {
      $this->Formula = $Formula;
      return $this;
    }

    /**
     * @return Money
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param Money $Amount
     * @return \FedexApi\Lib\EdtTaxDetail
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}

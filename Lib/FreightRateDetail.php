<?php

namespace FedexApiClass\Lib;

class FreightRateDetail
{

    /**
     * @var string $QuoteNumber
     */
    protected $QuoteNumber = null;

    /**
     * @var FreightRateQuoteType $QuoteType
     */
    protected $QuoteType = null;

    /**
     * @var FreightBaseChargeCalculationType $BaseChargeCalculation
     */
    protected $BaseChargeCalculation = null;

    /**
     * @var FreightBaseCharge[] $BaseCharges
     */
    protected $BaseCharges = null;

    /**
     * @var FreightRateNotation[] $Notations
     */
    protected $Notations = null;

    /**
     * @param string $QuoteNumber
     * @param FreightRateQuoteType $QuoteType
     * @param FreightBaseChargeCalculationType $BaseChargeCalculation
     * @param FreightBaseCharge[] $BaseCharges
     * @param FreightRateNotation[] $Notations
     */
    public function __construct($QuoteNumber = null, $QuoteType = null, $BaseChargeCalculation = null, array $BaseCharges = null, array $Notations = null)
    {
      $this->QuoteNumber = $QuoteNumber;
      $this->QuoteType = $QuoteType;
      $this->BaseChargeCalculation = $BaseChargeCalculation;
      $this->BaseCharges = $BaseCharges;
      $this->Notations = $Notations;
    }

    /**
     * @return string
     */
    public function getQuoteNumber()
    {
      return $this->QuoteNumber;
    }

    /**
     * @param string $QuoteNumber
     * @return \FedexApiClass\Lib\FreightRateDetail
     */
    public function setQuoteNumber($QuoteNumber)
    {
      $this->QuoteNumber = $QuoteNumber;
      return $this;
    }

    /**
     * @return FreightRateQuoteType
     */
    public function getQuoteType()
    {
      return $this->QuoteType;
    }

    /**
     * @param FreightRateQuoteType $QuoteType
     * @return \FedexApiClass\Lib\FreightRateDetail
     */
    public function setQuoteType($QuoteType)
    {
      $this->QuoteType = $QuoteType;
      return $this;
    }

    /**
     * @return FreightBaseChargeCalculationType
     */
    public function getBaseChargeCalculation()
    {
      return $this->BaseChargeCalculation;
    }

    /**
     * @param FreightBaseChargeCalculationType $BaseChargeCalculation
     * @return \FedexApiClass\Lib\FreightRateDetail
     */
    public function setBaseChargeCalculation($BaseChargeCalculation)
    {
      $this->BaseChargeCalculation = $BaseChargeCalculation;
      return $this;
    }

    /**
     * @return FreightBaseCharge[]
     */
    public function getBaseCharges()
    {
      return $this->BaseCharges;
    }

    /**
     * @param FreightBaseCharge[] $BaseCharges
     * @return \FedexApiClass\Lib\FreightRateDetail
     */
    public function setBaseCharges(array $BaseCharges)
    {
      $this->BaseCharges = $BaseCharges;
      return $this;
    }

    /**
     * @return FreightRateNotation[]
     */
    public function getNotations()
    {
      return $this->Notations;
    }

    /**
     * @param FreightRateNotation[] $Notations
     * @return \FedexApiClass\Lib\FreightRateDetail
     */
    public function setNotations(array $Notations)
    {
      $this->Notations = $Notations;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class VariableHandlingChargeDetail
{

    /**
     * @var Money $FixedValue
     */
    protected $FixedValue = null;

    /**
     * @var float $PercentValue
     */
    protected $PercentValue = null;

    /**
     * @var RateElementBasisType $RateElementBasis
     */
    protected $RateElementBasis = null;

    /**
     * @var RateTypeBasisType $RateTypeBasis
     */
    protected $RateTypeBasis = null;

    /**
     * @param Money $FixedValue
     * @param float $PercentValue
     * @param RateElementBasisType $RateElementBasis
     * @param RateTypeBasisType $RateTypeBasis
     */
    public function __construct($FixedValue, $PercentValue, $RateElementBasis, $RateTypeBasis)
    {
      $this->FixedValue = $FixedValue;
      $this->PercentValue = $PercentValue;
      $this->RateElementBasis = $RateElementBasis;
      $this->RateTypeBasis = $RateTypeBasis;
    }

    /**
     * @return Money
     */
    public function getFixedValue()
    {
      return $this->FixedValue;
    }

    /**
     * @param Money $FixedValue
     * @return \FedexApiClass\Lib\VariableHandlingChargeDetail
     */
    public function setFixedValue($FixedValue)
    {
      $this->FixedValue = $FixedValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentValue()
    {
      return $this->PercentValue;
    }

    /**
     * @param float $PercentValue
     * @return \FedexApiClass\Lib\VariableHandlingChargeDetail
     */
    public function setPercentValue($PercentValue)
    {
      $this->PercentValue = $PercentValue;
      return $this;
    }

    /**
     * @return RateElementBasisType
     */
    public function getRateElementBasis()
    {
      return $this->RateElementBasis;
    }

    /**
     * @param RateElementBasisType $RateElementBasis
     * @return \FedexApiClass\Lib\VariableHandlingChargeDetail
     */
    public function setRateElementBasis($RateElementBasis)
    {
      $this->RateElementBasis = $RateElementBasis;
      return $this;
    }

    /**
     * @return RateTypeBasisType
     */
    public function getRateTypeBasis()
    {
      return $this->RateTypeBasis;
    }

    /**
     * @param RateTypeBasisType $RateTypeBasis
     * @return \FedexApiClass\Lib\VariableHandlingChargeDetail
     */
    public function setRateTypeBasis($RateTypeBasis)
    {
      $this->RateTypeBasis = $RateTypeBasis;
      return $this;
    }

}

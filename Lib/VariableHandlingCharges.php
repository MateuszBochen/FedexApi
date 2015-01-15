<?php

namespace FedexApi\Lib;

class VariableHandlingCharges
{

    /**
     * @var Money $VariableHandlingCharge
     */
    protected $VariableHandlingCharge = null;

    /**
     * @var Money $FixedVariableHandlingCharge
     */
    protected $FixedVariableHandlingCharge = null;

    /**
     * @var Money $PercentVariableHandlingCharge
     */
    protected $PercentVariableHandlingCharge = null;

    /**
     * @var Money $TotalCustomerCharge
     */
    protected $TotalCustomerCharge = null;

    /**
     * @param Money $VariableHandlingCharge
     * @param Money $FixedVariableHandlingCharge
     * @param Money $PercentVariableHandlingCharge
     * @param Money $TotalCustomerCharge
     */
    public function __construct($VariableHandlingCharge, $FixedVariableHandlingCharge, $PercentVariableHandlingCharge, $TotalCustomerCharge)
    {
      $this->VariableHandlingCharge = $VariableHandlingCharge;
      $this->FixedVariableHandlingCharge = $FixedVariableHandlingCharge;
      $this->PercentVariableHandlingCharge = $PercentVariableHandlingCharge;
      $this->TotalCustomerCharge = $TotalCustomerCharge;
    }

    /**
     * @return Money
     */
    public function getVariableHandlingCharge()
    {
      return $this->VariableHandlingCharge;
    }

    /**
     * @param Money $VariableHandlingCharge
     * @return \FedexApi\Lib\VariableHandlingCharges
     */
    public function setVariableHandlingCharge($VariableHandlingCharge)
    {
      $this->VariableHandlingCharge = $VariableHandlingCharge;
      return $this;
    }

    /**
     * @return Money
     */
    public function getFixedVariableHandlingCharge()
    {
      return $this->FixedVariableHandlingCharge;
    }

    /**
     * @param Money $FixedVariableHandlingCharge
     * @return \FedexApi\Lib\VariableHandlingCharges
     */
    public function setFixedVariableHandlingCharge($FixedVariableHandlingCharge)
    {
      $this->FixedVariableHandlingCharge = $FixedVariableHandlingCharge;
      return $this;
    }

    /**
     * @return Money
     */
    public function getPercentVariableHandlingCharge()
    {
      return $this->PercentVariableHandlingCharge;
    }

    /**
     * @param Money $PercentVariableHandlingCharge
     * @return \FedexApi\Lib\VariableHandlingCharges
     */
    public function setPercentVariableHandlingCharge($PercentVariableHandlingCharge)
    {
      $this->PercentVariableHandlingCharge = $PercentVariableHandlingCharge;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalCustomerCharge()
    {
      return $this->TotalCustomerCharge;
    }

    /**
     * @param Money $TotalCustomerCharge
     * @return \FedexApi\Lib\VariableHandlingCharges
     */
    public function setTotalCustomerCharge($TotalCustomerCharge)
    {
      $this->TotalCustomerCharge = $TotalCustomerCharge;
      return $this;
    }

}

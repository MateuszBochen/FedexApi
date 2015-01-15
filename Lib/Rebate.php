<?php

namespace FedexApiClass\Lib;

class Rebate
{

    /**
     * @var RebateType $RebateType
     */
    protected $RebateType = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var Money $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Percent
     */
    protected $Percent = null;

    /**
     * @param RebateType $RebateType
     * @param string $Description
     * @param Money $Amount
     * @param float $Percent
     */
    public function __construct($RebateType, $Description, $Amount, $Percent)
    {
      $this->RebateType = $RebateType;
      $this->Description = $Description;
      $this->Amount = $Amount;
      $this->Percent = $Percent;
    }

    /**
     * @return RebateType
     */
    public function getRebateType()
    {
      return $this->RebateType;
    }

    /**
     * @param RebateType $RebateType
     * @return \FedexApiClass\Lib\Rebate
     */
    public function setRebateType($RebateType)
    {
      $this->RebateType = $RebateType;
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
     * @return \FedexApiClass\Lib\Rebate
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FedexApiClass\Lib\Rebate
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param float $Percent
     * @return \FedexApiClass\Lib\Rebate
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

}

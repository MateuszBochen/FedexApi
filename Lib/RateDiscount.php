<?php

namespace FedexApi\Lib;

class RateDiscount
{

    /**
     * @var RateDiscountType $RateDiscountType
     */
    protected $RateDiscountType = null;

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
     * @param RateDiscountType $RateDiscountType
     * @param string $Description
     * @param Money $Amount
     * @param float $Percent
     */
    public function __construct($RateDiscountType, $Description, $Amount, $Percent)
    {
      $this->RateDiscountType = $RateDiscountType;
      $this->Description = $Description;
      $this->Amount = $Amount;
      $this->Percent = $Percent;
    }

    /**
     * @return RateDiscountType
     */
    public function getRateDiscountType()
    {
      return $this->RateDiscountType;
    }

    /**
     * @param RateDiscountType $RateDiscountType
     * @return \FedexApi\Lib\RateDiscount
     */
    public function setRateDiscountType($RateDiscountType)
    {
      $this->RateDiscountType = $RateDiscountType;
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
     * @return \FedexApi\Lib\RateDiscount
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
     * @return \FedexApi\Lib\RateDiscount
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
     * @return \FedexApi\Lib\RateDiscount
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

}

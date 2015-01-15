<?php

namespace FedexApiClass\Lib;

class Money
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param string $Currency
     * @param float $Amount
     */
    public function __construct($Currency, $Amount)
    {
      $this->Currency = $Currency;
      $this->Amount = $Amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \FedexApiClass\Lib\Money
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \FedexApiClass\Lib\Money
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}

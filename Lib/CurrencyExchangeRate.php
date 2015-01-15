<?php

namespace FedexApiClass\Lib;

class CurrencyExchangeRate
{

    /**
     * @var string $FromCurrency
     */
    protected $FromCurrency = null;

    /**
     * @var string $IntoCurrency
     */
    protected $IntoCurrency = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @param string $FromCurrency
     * @param string $IntoCurrency
     * @param float $Rate
     */
    public function __construct($FromCurrency, $IntoCurrency, $Rate)
    {
      $this->FromCurrency = $FromCurrency;
      $this->IntoCurrency = $IntoCurrency;
      $this->Rate = $Rate;
    }

    /**
     * @return string
     */
    public function getFromCurrency()
    {
      return $this->FromCurrency;
    }

    /**
     * @param string $FromCurrency
     * @return \FedexApiClass\Lib\CurrencyExchangeRate
     */
    public function setFromCurrency($FromCurrency)
    {
      $this->FromCurrency = $FromCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntoCurrency()
    {
      return $this->IntoCurrency;
    }

    /**
     * @param string $IntoCurrency
     * @return \FedexApiClass\Lib\CurrencyExchangeRate
     */
    public function setIntoCurrency($IntoCurrency)
    {
      $this->IntoCurrency = $IntoCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \FedexApiClass\Lib\CurrencyExchangeRate
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

}

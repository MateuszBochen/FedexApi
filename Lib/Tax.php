<?php

namespace FedexApiClass\Lib;

class Tax
{

    /**
     * @var TaxType $TaxType
     */
    protected $TaxType = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var Money $Amount
     */
    protected $Amount = null;

    /**
     * @param TaxType $TaxType
     * @param string $Description
     * @param Money $Amount
     */
    public function __construct($TaxType = null, $Description = null, $Amount = null)
    {
      $this->TaxType = $TaxType;
      $this->Description = $Description;
      $this->Amount = $Amount;
    }

    /**
     * @return TaxType
     */
    public function getTaxType()
    {
      return $this->TaxType;
    }

    /**
     * @param TaxType $TaxType
     * @return \FedexApiClass\Lib\Tax
     */
    public function setTaxType($TaxType)
    {
      $this->TaxType = $TaxType;
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
     * @return \FedexApiClass\Lib\Tax
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
     * @return \FedexApiClass\Lib\Tax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class EdtCommodityTax
{

    /**
     * @var string $HarmonizedCode
     */
    protected $HarmonizedCode = null;

    /**
     * @var EdtTaxDetail[] $Taxes
     */
    protected $Taxes = null;

    /**
     * @param string $HarmonizedCode
     * @param EdtTaxDetail[] $Taxes
     */
    public function __construct($HarmonizedCode = null, array $Taxes = null)
    {
      $this->HarmonizedCode = $HarmonizedCode;
      $this->Taxes = $Taxes;
    }

    /**
     * @return string
     */
    public function getHarmonizedCode()
    {
      return $this->HarmonizedCode;
    }

    /**
     * @param string $HarmonizedCode
     * @return \FedexApiClass\Lib\EdtCommodityTax
     */
    public function setHarmonizedCode($HarmonizedCode)
    {
      $this->HarmonizedCode = $HarmonizedCode;
      return $this;
    }

    /**
     * @return EdtTaxDetail[]
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param EdtTaxDetail[] $Taxes
     * @return \FedexApiClass\Lib\EdtCommodityTax
     */
    public function setTaxes(array $Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

}

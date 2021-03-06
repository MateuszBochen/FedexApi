<?php

namespace FedexApiClass\Lib;

class PackageRateDetail
{

    /**
     * @var ReturnedRateType $RateType
     */
    protected $RateType = null;

    /**
     * @var RatedWeightMethod $RatedWeightMethod
     */
    protected $RatedWeightMethod = null;

    /**
     * @var MinimumChargeType $MinimumChargeType
     */
    protected $MinimumChargeType = null;

    /**
     * @var Weight $BillingWeight
     */
    protected $BillingWeight = null;

    /**
     * @var Weight $DimWeight
     */
    protected $DimWeight = null;

    /**
     * @var Weight $OversizeWeight
     */
    protected $OversizeWeight = null;

    /**
     * @var Money $BaseCharge
     */
    protected $BaseCharge = null;

    /**
     * @var Money $TotalFreightDiscounts
     */
    protected $TotalFreightDiscounts = null;

    /**
     * @var Money $NetFreight
     */
    protected $NetFreight = null;

    /**
     * @var Money $TotalSurcharges
     */
    protected $TotalSurcharges = null;

    /**
     * @var Money $NetFedExCharge
     */
    protected $NetFedExCharge = null;

    /**
     * @var Money $TotalTaxes
     */
    protected $TotalTaxes = null;

    /**
     * @var Money $NetCharge
     */
    protected $NetCharge = null;

    /**
     * @var Money $TotalRebates
     */
    protected $TotalRebates = null;

    /**
     * @var RateDiscount[] $FreightDiscounts
     */
    protected $FreightDiscounts = null;

    /**
     * @var Rebate[] $Rebates
     */
    protected $Rebates = null;

    /**
     * @var Surcharge[] $Surcharges
     */
    protected $Surcharges = null;

    /**
     * @var Tax[] $Taxes
     */
    protected $Taxes = null;

    /**
     * @var VariableHandlingCharges $VariableHandlingCharges
     */
    protected $VariableHandlingCharges = null;

    /**
     * @param ReturnedRateType $RateType
     * @param RatedWeightMethod $RatedWeightMethod
     * @param MinimumChargeType $MinimumChargeType
     * @param Weight $BillingWeight
     * @param Weight $DimWeight
     * @param Weight $OversizeWeight
     * @param Money $BaseCharge
     * @param Money $TotalFreightDiscounts
     * @param Money $NetFreight
     * @param Money $TotalSurcharges
     * @param Money $NetFedExCharge
     * @param Money $TotalTaxes
     * @param Money $NetCharge
     * @param Money $TotalRebates
     * @param RateDiscount[] $FreightDiscounts
     * @param Rebate[] $Rebates
     * @param Surcharge[] $Surcharges
     * @param Tax[] $Taxes
     * @param VariableHandlingCharges $VariableHandlingCharges
     */
    public function __construct($RateType = null, $RatedWeightMethod = null, $MinimumChargeType = null, $BillingWeight = null, $DimWeight = null, $OversizeWeight = null, $BaseCharge = null, $TotalFreightDiscounts = null, $NetFreight = null, $TotalSurcharges = null, $NetFedExCharge = null, $TotalTaxes = null, $NetCharge = null, $TotalRebates = null, array $FreightDiscounts = null, array $Rebates = null, array $Surcharges = null, array $Taxes = null, $VariableHandlingCharges = null)
    {
      $this->RateType = $RateType;
      $this->RatedWeightMethod = $RatedWeightMethod;
      $this->MinimumChargeType = $MinimumChargeType;
      $this->BillingWeight = $BillingWeight;
      $this->DimWeight = $DimWeight;
      $this->OversizeWeight = $OversizeWeight;
      $this->BaseCharge = $BaseCharge;
      $this->TotalFreightDiscounts = $TotalFreightDiscounts;
      $this->NetFreight = $NetFreight;
      $this->TotalSurcharges = $TotalSurcharges;
      $this->NetFedExCharge = $NetFedExCharge;
      $this->TotalTaxes = $TotalTaxes;
      $this->NetCharge = $NetCharge;
      $this->TotalRebates = $TotalRebates;
      $this->FreightDiscounts = $FreightDiscounts;
      $this->Rebates = $Rebates;
      $this->Surcharges = $Surcharges;
      $this->Taxes = $Taxes;
      $this->VariableHandlingCharges = $VariableHandlingCharges;
    }

    /**
     * @return ReturnedRateType
     */
    public function getRateType()
    {
      return $this->RateType;
    }

    /**
     * @param ReturnedRateType $RateType
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setRateType($RateType)
    {
      $this->RateType = $RateType;
      return $this;
    }

    /**
     * @return RatedWeightMethod
     */
    public function getRatedWeightMethod()
    {
      return $this->RatedWeightMethod;
    }

    /**
     * @param RatedWeightMethod $RatedWeightMethod
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setRatedWeightMethod($RatedWeightMethod)
    {
      $this->RatedWeightMethod = $RatedWeightMethod;
      return $this;
    }

    /**
     * @return MinimumChargeType
     */
    public function getMinimumChargeType()
    {
      return $this->MinimumChargeType;
    }

    /**
     * @param MinimumChargeType $MinimumChargeType
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setMinimumChargeType($MinimumChargeType)
    {
      $this->MinimumChargeType = $MinimumChargeType;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getBillingWeight()
    {
      return $this->BillingWeight;
    }

    /**
     * @param Weight $BillingWeight
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setBillingWeight($BillingWeight)
    {
      $this->BillingWeight = $BillingWeight;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getDimWeight()
    {
      return $this->DimWeight;
    }

    /**
     * @param Weight $DimWeight
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setDimWeight($DimWeight)
    {
      $this->DimWeight = $DimWeight;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getOversizeWeight()
    {
      return $this->OversizeWeight;
    }

    /**
     * @param Weight $OversizeWeight
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setOversizeWeight($OversizeWeight)
    {
      $this->OversizeWeight = $OversizeWeight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getBaseCharge()
    {
      return $this->BaseCharge;
    }

    /**
     * @param Money $BaseCharge
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setBaseCharge($BaseCharge)
    {
      $this->BaseCharge = $BaseCharge;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalFreightDiscounts()
    {
      return $this->TotalFreightDiscounts;
    }

    /**
     * @param Money $TotalFreightDiscounts
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setTotalFreightDiscounts($TotalFreightDiscounts)
    {
      $this->TotalFreightDiscounts = $TotalFreightDiscounts;
      return $this;
    }

    /**
     * @return Money
     */
    public function getNetFreight()
    {
      return $this->NetFreight;
    }

    /**
     * @param Money $NetFreight
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setNetFreight($NetFreight)
    {
      $this->NetFreight = $NetFreight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalSurcharges()
    {
      return $this->TotalSurcharges;
    }

    /**
     * @param Money $TotalSurcharges
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setTotalSurcharges($TotalSurcharges)
    {
      $this->TotalSurcharges = $TotalSurcharges;
      return $this;
    }

    /**
     * @return Money
     */
    public function getNetFedExCharge()
    {
      return $this->NetFedExCharge;
    }

    /**
     * @param Money $NetFedExCharge
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setNetFedExCharge($NetFedExCharge)
    {
      $this->NetFedExCharge = $NetFedExCharge;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalTaxes()
    {
      return $this->TotalTaxes;
    }

    /**
     * @param Money $TotalTaxes
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setTotalTaxes($TotalTaxes)
    {
      $this->TotalTaxes = $TotalTaxes;
      return $this;
    }

    /**
     * @return Money
     */
    public function getNetCharge()
    {
      return $this->NetCharge;
    }

    /**
     * @param Money $NetCharge
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setNetCharge($NetCharge)
    {
      $this->NetCharge = $NetCharge;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalRebates()
    {
      return $this->TotalRebates;
    }

    /**
     * @param Money $TotalRebates
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setTotalRebates($TotalRebates)
    {
      $this->TotalRebates = $TotalRebates;
      return $this;
    }

    /**
     * @return RateDiscount[]
     */
    public function getFreightDiscounts()
    {
      return $this->FreightDiscounts;
    }

    /**
     * @param RateDiscount[] $FreightDiscounts
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setFreightDiscounts(array $FreightDiscounts)
    {
      $this->FreightDiscounts = $FreightDiscounts;
      return $this;
    }

    /**
     * @return Rebate[]
     */
    public function getRebates()
    {
      return $this->Rebates;
    }

    /**
     * @param Rebate[] $Rebates
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setRebates(array $Rebates)
    {
      $this->Rebates = $Rebates;
      return $this;
    }

    /**
     * @return Surcharge[]
     */
    public function getSurcharges()
    {
      return $this->Surcharges;
    }

    /**
     * @param Surcharge[] $Surcharges
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setSurcharges(array $Surcharges)
    {
      $this->Surcharges = $Surcharges;
      return $this;
    }

    /**
     * @return Tax[]
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param Tax[] $Taxes
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setTaxes(array $Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return VariableHandlingCharges
     */
    public function getVariableHandlingCharges()
    {
      return $this->VariableHandlingCharges;
    }

    /**
     * @param VariableHandlingCharges $VariableHandlingCharges
     * @return \FedexApiClass\Lib\PackageRateDetail
     */
    public function setVariableHandlingCharges($VariableHandlingCharges)
    {
      $this->VariableHandlingCharges = $VariableHandlingCharges;
      return $this;
    }

}

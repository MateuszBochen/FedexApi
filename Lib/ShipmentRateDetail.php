<?php

namespace FedexApiClass\Lib;

class ShipmentRateDetail
{

    /**
     * @var ReturnedRateType $RateType
     */
    protected $RateType = null;

    /**
     * @var string $RateScale
     */
    protected $RateScale = null;

    /**
     * @var string $RateZone
     */
    protected $RateZone = null;

    /**
     * @var PricingCodeType $PricingCode
     */
    protected $PricingCode = null;

    /**
     * @var RatedWeightMethod $RatedWeightMethod
     */
    protected $RatedWeightMethod = null;

    /**
     * @var MinimumChargeType $MinimumChargeType
     */
    protected $MinimumChargeType = null;

    /**
     * @var CurrencyExchangeRate $CurrencyExchangeRate
     */
    protected $CurrencyExchangeRate = null;

    /**
     * @var SpecialRatingAppliedType[] $SpecialRatingApplied
     */
    protected $SpecialRatingApplied = null;

    /**
     * @var int $DimDivisor
     */
    protected $DimDivisor = null;

    /**
     * @var RateDimensionalDivisorType $DimDivisorType
     */
    protected $DimDivisorType = null;

    /**
     * @var float $FuelSurchargePercent
     */
    protected $FuelSurchargePercent = null;

    /**
     * @var Weight $TotalBillingWeight
     */
    protected $TotalBillingWeight = null;

    /**
     * @var Weight $TotalDimWeight
     */
    protected $TotalDimWeight = null;

    /**
     * @var Money $TotalBaseCharge
     */
    protected $TotalBaseCharge = null;

    /**
     * @var Money $TotalFreightDiscounts
     */
    protected $TotalFreightDiscounts = null;

    /**
     * @var Money $TotalNetFreight
     */
    protected $TotalNetFreight = null;

    /**
     * @var Money $TotalSurcharges
     */
    protected $TotalSurcharges = null;

    /**
     * @var Money $TotalNetFedExCharge
     */
    protected $TotalNetFedExCharge = null;

    /**
     * @var Money $TotalTaxes
     */
    protected $TotalTaxes = null;

    /**
     * @var Money $TotalNetCharge
     */
    protected $TotalNetCharge = null;

    /**
     * @var Money $TotalRebates
     */
    protected $TotalRebates = null;

    /**
     * @var Money $TotalDutiesAndTaxes
     */
    protected $TotalDutiesAndTaxes = null;

    /**
     * @var Money $TotalNetChargeWithDutiesAndTaxes
     */
    protected $TotalNetChargeWithDutiesAndTaxes = null;

    /**
     * @var ShipmentLegRateDetail[] $ShipmentLegRateDetails
     */
    protected $ShipmentLegRateDetails = null;

    /**
     * @var FreightRateDetail $FreightRateDetail
     */
    protected $FreightRateDetail = null;

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
     * @var EdtCommodityTax[] $DutiesAndTaxes
     */
    protected $DutiesAndTaxes = null;

    /**
     * @var VariableHandlingCharges $VariableHandlingCharges
     */
    protected $VariableHandlingCharges = null;

    /**
     * @var VariableHandlingCharges $TotalVariableHandlingCharges
     */
    protected $TotalVariableHandlingCharges = null;

    /**
     * @param ReturnedRateType $RateType
     * @param string $RateScale
     * @param string $RateZone
     * @param PricingCodeType $PricingCode
     * @param RatedWeightMethod $RatedWeightMethod
     * @param MinimumChargeType $MinimumChargeType
     * @param CurrencyExchangeRate $CurrencyExchangeRate
     * @param SpecialRatingAppliedType[] $SpecialRatingApplied
     * @param int $DimDivisor
     * @param RateDimensionalDivisorType $DimDivisorType
     * @param float $FuelSurchargePercent
     * @param Weight $TotalBillingWeight
     * @param Weight $TotalDimWeight
     * @param Money $TotalBaseCharge
     * @param Money $TotalFreightDiscounts
     * @param Money $TotalNetFreight
     * @param Money $TotalSurcharges
     * @param Money $TotalNetFedExCharge
     * @param Money $TotalTaxes
     * @param Money $TotalNetCharge
     * @param Money $TotalRebates
     * @param Money $TotalDutiesAndTaxes
     * @param Money $TotalNetChargeWithDutiesAndTaxes
     * @param ShipmentLegRateDetail[] $ShipmentLegRateDetails
     * @param FreightRateDetail $FreightRateDetail
     * @param RateDiscount[] $FreightDiscounts
     * @param Rebate[] $Rebates
     * @param Surcharge[] $Surcharges
     * @param Tax[] $Taxes
     * @param EdtCommodityTax[] $DutiesAndTaxes
     * @param VariableHandlingCharges $VariableHandlingCharges
     * @param VariableHandlingCharges $TotalVariableHandlingCharges
     */
    public function __construct($RateType = null, $RateScale = null, $RateZone = null, $PricingCode = null, $RatedWeightMethod = null, $MinimumChargeType = null, $CurrencyExchangeRate = null, array $SpecialRatingApplied = null, $DimDivisor = null, $DimDivisorType = null, $FuelSurchargePercent = null, $TotalBillingWeight = null, $TotalDimWeight = null, $TotalBaseCharge = null, $TotalFreightDiscounts = null, $TotalNetFreight = null, $TotalSurcharges = null, $TotalNetFedExCharge = null, $TotalTaxes = null, $TotalNetCharge = null, $TotalRebates = null, $TotalDutiesAndTaxes = null, $TotalNetChargeWithDutiesAndTaxes = null, array $ShipmentLegRateDetails = null, $FreightRateDetail = null, array $FreightDiscounts = null, array $Rebates = null, array $Surcharges = null, array $Taxes = null, array $DutiesAndTaxes = null, $VariableHandlingCharges = null, $TotalVariableHandlingCharges = null)
    {
      $this->RateType = $RateType;
      $this->RateScale = $RateScale;
      $this->RateZone = $RateZone;
      $this->PricingCode = $PricingCode;
      $this->RatedWeightMethod = $RatedWeightMethod;
      $this->MinimumChargeType = $MinimumChargeType;
      $this->CurrencyExchangeRate = $CurrencyExchangeRate;
      $this->SpecialRatingApplied = $SpecialRatingApplied;
      $this->DimDivisor = $DimDivisor;
      $this->DimDivisorType = $DimDivisorType;
      $this->FuelSurchargePercent = $FuelSurchargePercent;
      $this->TotalBillingWeight = $TotalBillingWeight;
      $this->TotalDimWeight = $TotalDimWeight;
      $this->TotalBaseCharge = $TotalBaseCharge;
      $this->TotalFreightDiscounts = $TotalFreightDiscounts;
      $this->TotalNetFreight = $TotalNetFreight;
      $this->TotalSurcharges = $TotalSurcharges;
      $this->TotalNetFedExCharge = $TotalNetFedExCharge;
      $this->TotalTaxes = $TotalTaxes;
      $this->TotalNetCharge = $TotalNetCharge;
      $this->TotalRebates = $TotalRebates;
      $this->TotalDutiesAndTaxes = $TotalDutiesAndTaxes;
      $this->TotalNetChargeWithDutiesAndTaxes = $TotalNetChargeWithDutiesAndTaxes;
      $this->ShipmentLegRateDetails = $ShipmentLegRateDetails;
      $this->FreightRateDetail = $FreightRateDetail;
      $this->FreightDiscounts = $FreightDiscounts;
      $this->Rebates = $Rebates;
      $this->Surcharges = $Surcharges;
      $this->Taxes = $Taxes;
      $this->DutiesAndTaxes = $DutiesAndTaxes;
      $this->VariableHandlingCharges = $VariableHandlingCharges;
      $this->TotalVariableHandlingCharges = $TotalVariableHandlingCharges;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setRateType($RateType)
    {
      $this->RateType = $RateType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateScale()
    {
      return $this->RateScale;
    }

    /**
     * @param string $RateScale
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setRateScale($RateScale)
    {
      $this->RateScale = $RateScale;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateZone()
    {
      return $this->RateZone;
    }

    /**
     * @param string $RateZone
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setRateZone($RateZone)
    {
      $this->RateZone = $RateZone;
      return $this;
    }

    /**
     * @return PricingCodeType
     */
    public function getPricingCode()
    {
      return $this->PricingCode;
    }

    /**
     * @param PricingCodeType $PricingCode
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setPricingCode($PricingCode)
    {
      $this->PricingCode = $PricingCode;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setMinimumChargeType($MinimumChargeType)
    {
      $this->MinimumChargeType = $MinimumChargeType;
      return $this;
    }

    /**
     * @return CurrencyExchangeRate
     */
    public function getCurrencyExchangeRate()
    {
      return $this->CurrencyExchangeRate;
    }

    /**
     * @param CurrencyExchangeRate $CurrencyExchangeRate
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setCurrencyExchangeRate($CurrencyExchangeRate)
    {
      $this->CurrencyExchangeRate = $CurrencyExchangeRate;
      return $this;
    }

    /**
     * @return SpecialRatingAppliedType[]
     */
    public function getSpecialRatingApplied()
    {
      return $this->SpecialRatingApplied;
    }

    /**
     * @param SpecialRatingAppliedType[] $SpecialRatingApplied
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setSpecialRatingApplied(array $SpecialRatingApplied)
    {
      $this->SpecialRatingApplied = $SpecialRatingApplied;
      return $this;
    }

    /**
     * @return int
     */
    public function getDimDivisor()
    {
      return $this->DimDivisor;
    }

    /**
     * @param int $DimDivisor
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setDimDivisor($DimDivisor)
    {
      $this->DimDivisor = $DimDivisor;
      return $this;
    }

    /**
     * @return RateDimensionalDivisorType
     */
    public function getDimDivisorType()
    {
      return $this->DimDivisorType;
    }

    /**
     * @param RateDimensionalDivisorType $DimDivisorType
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setDimDivisorType($DimDivisorType)
    {
      $this->DimDivisorType = $DimDivisorType;
      return $this;
    }

    /**
     * @return float
     */
    public function getFuelSurchargePercent()
    {
      return $this->FuelSurchargePercent;
    }

    /**
     * @param float $FuelSurchargePercent
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setFuelSurchargePercent($FuelSurchargePercent)
    {
      $this->FuelSurchargePercent = $FuelSurchargePercent;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getTotalBillingWeight()
    {
      return $this->TotalBillingWeight;
    }

    /**
     * @param Weight $TotalBillingWeight
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalBillingWeight($TotalBillingWeight)
    {
      $this->TotalBillingWeight = $TotalBillingWeight;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getTotalDimWeight()
    {
      return $this->TotalDimWeight;
    }

    /**
     * @param Weight $TotalDimWeight
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalDimWeight($TotalDimWeight)
    {
      $this->TotalDimWeight = $TotalDimWeight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalBaseCharge()
    {
      return $this->TotalBaseCharge;
    }

    /**
     * @param Money $TotalBaseCharge
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalBaseCharge($TotalBaseCharge)
    {
      $this->TotalBaseCharge = $TotalBaseCharge;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalFreightDiscounts($TotalFreightDiscounts)
    {
      $this->TotalFreightDiscounts = $TotalFreightDiscounts;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalNetFreight()
    {
      return $this->TotalNetFreight;
    }

    /**
     * @param Money $TotalNetFreight
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalNetFreight($TotalNetFreight)
    {
      $this->TotalNetFreight = $TotalNetFreight;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalSurcharges($TotalSurcharges)
    {
      $this->TotalSurcharges = $TotalSurcharges;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalNetFedExCharge()
    {
      return $this->TotalNetFedExCharge;
    }

    /**
     * @param Money $TotalNetFedExCharge
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalNetFedExCharge($TotalNetFedExCharge)
    {
      $this->TotalNetFedExCharge = $TotalNetFedExCharge;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalTaxes($TotalTaxes)
    {
      $this->TotalTaxes = $TotalTaxes;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalNetCharge()
    {
      return $this->TotalNetCharge;
    }

    /**
     * @param Money $TotalNetCharge
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalNetCharge($TotalNetCharge)
    {
      $this->TotalNetCharge = $TotalNetCharge;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalRebates($TotalRebates)
    {
      $this->TotalRebates = $TotalRebates;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalDutiesAndTaxes()
    {
      return $this->TotalDutiesAndTaxes;
    }

    /**
     * @param Money $TotalDutiesAndTaxes
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalDutiesAndTaxes($TotalDutiesAndTaxes)
    {
      $this->TotalDutiesAndTaxes = $TotalDutiesAndTaxes;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotalNetChargeWithDutiesAndTaxes()
    {
      return $this->TotalNetChargeWithDutiesAndTaxes;
    }

    /**
     * @param Money $TotalNetChargeWithDutiesAndTaxes
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes($TotalNetChargeWithDutiesAndTaxes)
    {
      $this->TotalNetChargeWithDutiesAndTaxes = $TotalNetChargeWithDutiesAndTaxes;
      return $this;
    }

    /**
     * @return ShipmentLegRateDetail[]
     */
    public function getShipmentLegRateDetails()
    {
      return $this->ShipmentLegRateDetails;
    }

    /**
     * @param ShipmentLegRateDetail[] $ShipmentLegRateDetails
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setShipmentLegRateDetails(array $ShipmentLegRateDetails)
    {
      $this->ShipmentLegRateDetails = $ShipmentLegRateDetails;
      return $this;
    }

    /**
     * @return FreightRateDetail
     */
    public function getFreightRateDetail()
    {
      return $this->FreightRateDetail;
    }

    /**
     * @param FreightRateDetail $FreightRateDetail
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setFreightRateDetail($FreightRateDetail)
    {
      $this->FreightRateDetail = $FreightRateDetail;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTaxes(array $Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return EdtCommodityTax[]
     */
    public function getDutiesAndTaxes()
    {
      return $this->DutiesAndTaxes;
    }

    /**
     * @param EdtCommodityTax[] $DutiesAndTaxes
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setDutiesAndTaxes(array $DutiesAndTaxes)
    {
      $this->DutiesAndTaxes = $DutiesAndTaxes;
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
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setVariableHandlingCharges($VariableHandlingCharges)
    {
      $this->VariableHandlingCharges = $VariableHandlingCharges;
      return $this;
    }

    /**
     * @return VariableHandlingCharges
     */
    public function getTotalVariableHandlingCharges()
    {
      return $this->TotalVariableHandlingCharges;
    }

    /**
     * @param VariableHandlingCharges $TotalVariableHandlingCharges
     * @return \FedexApiClass\Lib\ShipmentRateDetail
     */
    public function setTotalVariableHandlingCharges($TotalVariableHandlingCharges)
    {
      $this->TotalVariableHandlingCharges = $TotalVariableHandlingCharges;
      return $this;
    }

}

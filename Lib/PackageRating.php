<?php

namespace FedexApiClass\Lib;

class PackageRating
{

    /**
     * @var ReturnedRateType $ActualRateType
     */
    protected $ActualRateType = null;

    /**
     * @var Money $EffectiveNetDiscount
     */
    protected $EffectiveNetDiscount = null;

    /**
     * @var PackageRateDetail[] $PackageRateDetails
     */
    protected $PackageRateDetails = null;

    /**
     * @param ReturnedRateType $ActualRateType
     * @param Money $EffectiveNetDiscount
     * @param PackageRateDetail[] $PackageRateDetails
     */
    public function __construct($ActualRateType, $EffectiveNetDiscount, array $PackageRateDetails)
    {
      $this->ActualRateType = $ActualRateType;
      $this->EffectiveNetDiscount = $EffectiveNetDiscount;
      $this->PackageRateDetails = $PackageRateDetails;
    }

    /**
     * @return ReturnedRateType
     */
    public function getActualRateType()
    {
      return $this->ActualRateType;
    }

    /**
     * @param ReturnedRateType $ActualRateType
     * @return \FedexApiClass\Lib\PackageRating
     */
    public function setActualRateType($ActualRateType)
    {
      $this->ActualRateType = $ActualRateType;
      return $this;
    }

    /**
     * @return Money
     */
    public function getEffectiveNetDiscount()
    {
      return $this->EffectiveNetDiscount;
    }

    /**
     * @param Money $EffectiveNetDiscount
     * @return \FedexApiClass\Lib\PackageRating
     */
    public function setEffectiveNetDiscount($EffectiveNetDiscount)
    {
      $this->EffectiveNetDiscount = $EffectiveNetDiscount;
      return $this;
    }

    /**
     * @return PackageRateDetail[]
     */
    public function getPackageRateDetails()
    {
      return $this->PackageRateDetails;
    }

    /**
     * @param PackageRateDetail[] $PackageRateDetails
     * @return \FedexApiClass\Lib\PackageRating
     */
    public function setPackageRateDetails(array $PackageRateDetails)
    {
      $this->PackageRateDetails = $PackageRateDetails;
      return $this;
    }

}

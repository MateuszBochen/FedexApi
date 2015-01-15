<?php

namespace FedexApi\Lib;

class LiabilityCoverageDetail
{

    /**
     * @var LiabilityCoverageType $CoverageType
     */
    protected $CoverageType = null;

    /**
     * @var Money $CoverageAmount
     */
    protected $CoverageAmount = null;

    /**
     * @param LiabilityCoverageType $CoverageType
     * @param Money $CoverageAmount
     */
    public function __construct($CoverageType, $CoverageAmount)
    {
      $this->CoverageType = $CoverageType;
      $this->CoverageAmount = $CoverageAmount;
    }

    /**
     * @return LiabilityCoverageType
     */
    public function getCoverageType()
    {
      return $this->CoverageType;
    }

    /**
     * @param LiabilityCoverageType $CoverageType
     * @return \FedexApi\Lib\LiabilityCoverageDetail
     */
    public function setCoverageType($CoverageType)
    {
      $this->CoverageType = $CoverageType;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCoverageAmount()
    {
      return $this->CoverageAmount;
    }

    /**
     * @param Money $CoverageAmount
     * @return \FedexApi\Lib\LiabilityCoverageDetail
     */
    public function setCoverageAmount($CoverageAmount)
    {
      $this->CoverageAmount = $CoverageAmount;
      return $this;
    }

}

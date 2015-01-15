<?php

namespace FedexApi\Lib;

class CompletedCodDetail
{

    /**
     * @var Money $CollectionAmount
     */
    protected $CollectionAmount = null;

    /**
     * @var CodAdjustmentType $AdjustmentType
     */
    protected $AdjustmentType = null;

    /**
     * @param Money $CollectionAmount
     * @param CodAdjustmentType $AdjustmentType
     */
    public function __construct($CollectionAmount, $AdjustmentType)
    {
      $this->CollectionAmount = $CollectionAmount;
      $this->AdjustmentType = $AdjustmentType;
    }

    /**
     * @return Money
     */
    public function getCollectionAmount()
    {
      return $this->CollectionAmount;
    }

    /**
     * @param Money $CollectionAmount
     * @return \FedexApi\Lib\CompletedCodDetail
     */
    public function setCollectionAmount($CollectionAmount)
    {
      $this->CollectionAmount = $CollectionAmount;
      return $this;
    }

    /**
     * @return CodAdjustmentType
     */
    public function getAdjustmentType()
    {
      return $this->AdjustmentType;
    }

    /**
     * @param CodAdjustmentType $AdjustmentType
     * @return \FedexApi\Lib\CompletedCodDetail
     */
    public function setAdjustmentType($AdjustmentType)
    {
      $this->AdjustmentType = $AdjustmentType;
      return $this;
    }

}

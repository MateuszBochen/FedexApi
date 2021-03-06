<?php

namespace FedexApiClass\Lib;

class ShipmentRating
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
     * @var ShipmentRateDetail[] $ShipmentRateDetails
     */
    protected $ShipmentRateDetails = null;

    /**
     * @param ReturnedRateType $ActualRateType
     * @param Money $EffectiveNetDiscount
     * @param ShipmentRateDetail[] $ShipmentRateDetails
     */
    public function __construct($ActualRateType = null, $EffectiveNetDiscount = null, array $ShipmentRateDetails = null)
    {
      $this->ActualRateType = $ActualRateType;
      $this->EffectiveNetDiscount = $EffectiveNetDiscount;
      $this->ShipmentRateDetails = $ShipmentRateDetails;
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
     * @return \FedexApiClass\Lib\ShipmentRating
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
     * @return \FedexApiClass\Lib\ShipmentRating
     */
    public function setEffectiveNetDiscount($EffectiveNetDiscount)
    {
      $this->EffectiveNetDiscount = $EffectiveNetDiscount;
      return $this;
    }

    /**
     * @return ShipmentRateDetail[]
     */
    public function getShipmentRateDetails()
    {
      return $this->ShipmentRateDetails;
    }

    /**
     * @param ShipmentRateDetail[] $ShipmentRateDetails
     * @return \FedexApiClass\Lib\ShipmentRating
     */
    public function setShipmentRateDetails(array $ShipmentRateDetails)
    {
      $this->ShipmentRateDetails = $ShipmentRateDetails;
      return $this;
    }

}

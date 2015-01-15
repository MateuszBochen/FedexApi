<?php

namespace FedexApiClass\Lib;

class CodAddTransportationChargesDetail
{

    /**
     * @var RateTypeBasisType $RateTypeBasis
     */
    protected $RateTypeBasis = null;

    /**
     * @var CodAddTransportationChargeBasisType $ChargeBasis
     */
    protected $ChargeBasis = null;

    /**
     * @var ChargeBasisLevelType $ChargeBasisLevel
     */
    protected $ChargeBasisLevel = null;

    /**
     * @param RateTypeBasisType $RateTypeBasis
     * @param CodAddTransportationChargeBasisType $ChargeBasis
     * @param ChargeBasisLevelType $ChargeBasisLevel
     */
    public function __construct($RateTypeBasis, $ChargeBasis, $ChargeBasisLevel)
    {
      $this->RateTypeBasis = $RateTypeBasis;
      $this->ChargeBasis = $ChargeBasis;
      $this->ChargeBasisLevel = $ChargeBasisLevel;
    }

    /**
     * @return RateTypeBasisType
     */
    public function getRateTypeBasis()
    {
      return $this->RateTypeBasis;
    }

    /**
     * @param RateTypeBasisType $RateTypeBasis
     * @return \FedexApiClass\Lib\CodAddTransportationChargesDetail
     */
    public function setRateTypeBasis($RateTypeBasis)
    {
      $this->RateTypeBasis = $RateTypeBasis;
      return $this;
    }

    /**
     * @return CodAddTransportationChargeBasisType
     */
    public function getChargeBasis()
    {
      return $this->ChargeBasis;
    }

    /**
     * @param CodAddTransportationChargeBasisType $ChargeBasis
     * @return \FedexApiClass\Lib\CodAddTransportationChargesDetail
     */
    public function setChargeBasis($ChargeBasis)
    {
      $this->ChargeBasis = $ChargeBasis;
      return $this;
    }

    /**
     * @return ChargeBasisLevelType
     */
    public function getChargeBasisLevel()
    {
      return $this->ChargeBasisLevel;
    }

    /**
     * @param ChargeBasisLevelType $ChargeBasisLevel
     * @return \FedexApiClass\Lib\CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel($ChargeBasisLevel)
    {
      $this->ChargeBasisLevel = $ChargeBasisLevel;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class NaftaCommodityDetail
{

    /**
     * @var NaftaPreferenceCriterionCode $PreferenceCriterion
     */
    protected $PreferenceCriterion = null;

    /**
     * @var NaftaProducerDeterminationCode $ProducerDetermination
     */
    protected $ProducerDetermination = null;

    /**
     * @var string $ProducerId
     */
    protected $ProducerId = null;

    /**
     * @var NaftaNetCostMethodCode $NetCostMethod
     */
    protected $NetCostMethod = null;

    /**
     * @var DateRange $NetCostDateRange
     */
    protected $NetCostDateRange = null;

    /**
     * @param NaftaPreferenceCriterionCode $PreferenceCriterion
     * @param NaftaProducerDeterminationCode $ProducerDetermination
     * @param string $ProducerId
     * @param NaftaNetCostMethodCode $NetCostMethod
     * @param DateRange $NetCostDateRange
     */
    public function __construct($PreferenceCriterion, $ProducerDetermination, $ProducerId, $NetCostMethod, $NetCostDateRange)
    {
      $this->PreferenceCriterion = $PreferenceCriterion;
      $this->ProducerDetermination = $ProducerDetermination;
      $this->ProducerId = $ProducerId;
      $this->NetCostMethod = $NetCostMethod;
      $this->NetCostDateRange = $NetCostDateRange;
    }

    /**
     * @return NaftaPreferenceCriterionCode
     */
    public function getPreferenceCriterion()
    {
      return $this->PreferenceCriterion;
    }

    /**
     * @param NaftaPreferenceCriterionCode $PreferenceCriterion
     * @return \FedexApiClass\Lib\NaftaCommodityDetail
     */
    public function setPreferenceCriterion($PreferenceCriterion)
    {
      $this->PreferenceCriterion = $PreferenceCriterion;
      return $this;
    }

    /**
     * @return NaftaProducerDeterminationCode
     */
    public function getProducerDetermination()
    {
      return $this->ProducerDetermination;
    }

    /**
     * @param NaftaProducerDeterminationCode $ProducerDetermination
     * @return \FedexApiClass\Lib\NaftaCommodityDetail
     */
    public function setProducerDetermination($ProducerDetermination)
    {
      $this->ProducerDetermination = $ProducerDetermination;
      return $this;
    }

    /**
     * @return string
     */
    public function getProducerId()
    {
      return $this->ProducerId;
    }

    /**
     * @param string $ProducerId
     * @return \FedexApiClass\Lib\NaftaCommodityDetail
     */
    public function setProducerId($ProducerId)
    {
      $this->ProducerId = $ProducerId;
      return $this;
    }

    /**
     * @return NaftaNetCostMethodCode
     */
    public function getNetCostMethod()
    {
      return $this->NetCostMethod;
    }

    /**
     * @param NaftaNetCostMethodCode $NetCostMethod
     * @return \FedexApiClass\Lib\NaftaCommodityDetail
     */
    public function setNetCostMethod($NetCostMethod)
    {
      $this->NetCostMethod = $NetCostMethod;
      return $this;
    }

    /**
     * @return DateRange
     */
    public function getNetCostDateRange()
    {
      return $this->NetCostDateRange;
    }

    /**
     * @param DateRange $NetCostDateRange
     * @return \FedexApiClass\Lib\NaftaCommodityDetail
     */
    public function setNetCostDateRange($NetCostDateRange)
    {
      $this->NetCostDateRange = $NetCostDateRange;
      return $this;
    }

}

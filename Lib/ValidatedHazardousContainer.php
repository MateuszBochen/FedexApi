<?php

namespace FedexApiClass\Lib;

class ValidatedHazardousContainer
{

    /**
     * @var float $QValue
     */
    protected $QValue = null;

    /**
     * @var ValidatedHazardousCommodityContent[] $HazardousCommodities
     */
    protected $HazardousCommodities = null;

    /**
     * @param float $QValue
     * @param ValidatedHazardousCommodityContent[] $HazardousCommodities
     */
    public function __construct($QValue = null, array $HazardousCommodities = null)
    {
      $this->QValue = $QValue;
      $this->HazardousCommodities = $HazardousCommodities;
    }

    /**
     * @return float
     */
    public function getQValue()
    {
      return $this->QValue;
    }

    /**
     * @param float $QValue
     * @return \FedexApiClass\Lib\ValidatedHazardousContainer
     */
    public function setQValue($QValue)
    {
      $this->QValue = $QValue;
      return $this;
    }

    /**
     * @return ValidatedHazardousCommodityContent[]
     */
    public function getHazardousCommodities()
    {
      return $this->HazardousCommodities;
    }

    /**
     * @param ValidatedHazardousCommodityContent[] $HazardousCommodities
     * @return \FedexApiClass\Lib\ValidatedHazardousContainer
     */
    public function setHazardousCommodities(array $HazardousCommodities)
    {
      $this->HazardousCommodities = $HazardousCommodities;
      return $this;
    }

}

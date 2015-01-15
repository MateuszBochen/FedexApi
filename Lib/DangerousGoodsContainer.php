<?php

namespace FedexApiClass\Lib;

class DangerousGoodsContainer
{

    /**
     * @var HazardousContainerPackingType $PackingType
     */
    protected $PackingType = null;

    /**
     * @var string $ContainerType
     */
    protected $ContainerType = null;

    /**
     * @var RadioactiveContainerClassType $RadioactiveContainerClass
     */
    protected $RadioactiveContainerClass = null;

    /**
     * @var int $NumberOfContainers
     */
    protected $NumberOfContainers = null;

    /**
     * @var HazardousCommodityContent[] $HazardousCommodities
     */
    protected $HazardousCommodities = null;

    /**
     * @param HazardousContainerPackingType $PackingType
     * @param string $ContainerType
     * @param RadioactiveContainerClassType $RadioactiveContainerClass
     * @param int $NumberOfContainers
     * @param HazardousCommodityContent[] $HazardousCommodities
     */
    public function __construct($PackingType, $ContainerType, $RadioactiveContainerClass, $NumberOfContainers, array $HazardousCommodities)
    {
      $this->PackingType = $PackingType;
      $this->ContainerType = $ContainerType;
      $this->RadioactiveContainerClass = $RadioactiveContainerClass;
      $this->NumberOfContainers = $NumberOfContainers;
      $this->HazardousCommodities = $HazardousCommodities;
    }

    /**
     * @return HazardousContainerPackingType
     */
    public function getPackingType()
    {
      return $this->PackingType;
    }

    /**
     * @param HazardousContainerPackingType $PackingType
     * @return \FedexApiClass\Lib\DangerousGoodsContainer
     */
    public function setPackingType($PackingType)
    {
      $this->PackingType = $PackingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerType()
    {
      return $this->ContainerType;
    }

    /**
     * @param string $ContainerType
     * @return \FedexApiClass\Lib\DangerousGoodsContainer
     */
    public function setContainerType($ContainerType)
    {
      $this->ContainerType = $ContainerType;
      return $this;
    }

    /**
     * @return RadioactiveContainerClassType
     */
    public function getRadioactiveContainerClass()
    {
      return $this->RadioactiveContainerClass;
    }

    /**
     * @param RadioactiveContainerClassType $RadioactiveContainerClass
     * @return \FedexApiClass\Lib\DangerousGoodsContainer
     */
    public function setRadioactiveContainerClass($RadioactiveContainerClass)
    {
      $this->RadioactiveContainerClass = $RadioactiveContainerClass;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfContainers()
    {
      return $this->NumberOfContainers;
    }

    /**
     * @param int $NumberOfContainers
     * @return \FedexApiClass\Lib\DangerousGoodsContainer
     */
    public function setNumberOfContainers($NumberOfContainers)
    {
      $this->NumberOfContainers = $NumberOfContainers;
      return $this;
    }

    /**
     * @return HazardousCommodityContent[]
     */
    public function getHazardousCommodities()
    {
      return $this->HazardousCommodities;
    }

    /**
     * @param HazardousCommodityContent[] $HazardousCommodities
     * @return \FedexApiClass\Lib\DangerousGoodsContainer
     */
    public function setHazardousCommodities(array $HazardousCommodities)
    {
      $this->HazardousCommodities = $HazardousCommodities;
      return $this;
    }

}

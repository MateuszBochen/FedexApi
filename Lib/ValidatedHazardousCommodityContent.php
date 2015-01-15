<?php

namespace FedexApiClass\Lib;

class ValidatedHazardousCommodityContent
{

    /**
     * @var ValidatedHazardousCommodityDescription $Description
     */
    protected $Description = null;

    /**
     * @var HazardousCommodityQuantityDetail $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $MassPoints
     */
    protected $MassPoints = null;

    /**
     * @var HazardousCommodityOptionDetail $Options
     */
    protected $Options = null;

    /**
     * @param ValidatedHazardousCommodityDescription $Description
     * @param HazardousCommodityQuantityDetail $Quantity
     * @param float $MassPoints
     * @param HazardousCommodityOptionDetail $Options
     */
    public function __construct($Description, $Quantity, $MassPoints, $Options)
    {
      $this->Description = $Description;
      $this->Quantity = $Quantity;
      $this->MassPoints = $MassPoints;
      $this->Options = $Options;
    }

    /**
     * @return ValidatedHazardousCommodityDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param ValidatedHazardousCommodityDescription $Description
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityContent
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return HazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param HazardousCommodityQuantityDetail $Quantity
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityContent
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getMassPoints()
    {
      return $this->MassPoints;
    }

    /**
     * @param float $MassPoints
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityContent
     */
    public function setMassPoints($MassPoints)
    {
      $this->MassPoints = $MassPoints;
      return $this;
    }

    /**
     * @return HazardousCommodityOptionDetail
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param HazardousCommodityOptionDetail $Options
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityContent
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

}

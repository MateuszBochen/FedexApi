<?php

namespace FedexApiClass\Lib;

class HazardousCommodityContent
{

    /**
     * @var HazardousCommodityDescription $Description
     */
    protected $Description = null;

    /**
     * @var HazardousCommodityQuantityDetail $Quantity
     */
    protected $Quantity = null;

    /**
     * @var HazardousCommodityInnerReceptacleDetail[] $InnerReceptacles
     */
    protected $InnerReceptacles = null;

    /**
     * @var HazardousCommodityOptionDetail $Options
     */
    protected $Options = null;

    /**
     * @var RadionuclideDetail $RadionuclideDetail
     */
    protected $RadionuclideDetail = null;

    /**
     * @param HazardousCommodityDescription $Description
     * @param HazardousCommodityQuantityDetail $Quantity
     * @param HazardousCommodityInnerReceptacleDetail[] $InnerReceptacles
     * @param HazardousCommodityOptionDetail $Options
     * @param RadionuclideDetail $RadionuclideDetail
     */
    public function __construct($Description, $Quantity, array $InnerReceptacles, $Options, $RadionuclideDetail)
    {
      $this->Description = $Description;
      $this->Quantity = $Quantity;
      $this->InnerReceptacles = $InnerReceptacles;
      $this->Options = $Options;
      $this->RadionuclideDetail = $RadionuclideDetail;
    }

    /**
     * @return HazardousCommodityDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param HazardousCommodityDescription $Description
     * @return \FedexApiClass\Lib\HazardousCommodityContent
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
     * @return \FedexApiClass\Lib\HazardousCommodityContent
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return HazardousCommodityInnerReceptacleDetail[]
     */
    public function getInnerReceptacles()
    {
      return $this->InnerReceptacles;
    }

    /**
     * @param HazardousCommodityInnerReceptacleDetail[] $InnerReceptacles
     * @return \FedexApiClass\Lib\HazardousCommodityContent
     */
    public function setInnerReceptacles(array $InnerReceptacles)
    {
      $this->InnerReceptacles = $InnerReceptacles;
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
     * @return \FedexApiClass\Lib\HazardousCommodityContent
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return RadionuclideDetail
     */
    public function getRadionuclideDetail()
    {
      return $this->RadionuclideDetail;
    }

    /**
     * @param RadionuclideDetail $RadionuclideDetail
     * @return \FedexApiClass\Lib\HazardousCommodityContent
     */
    public function setRadionuclideDetail($RadionuclideDetail)
    {
      $this->RadionuclideDetail = $RadionuclideDetail;
      return $this;
    }

}

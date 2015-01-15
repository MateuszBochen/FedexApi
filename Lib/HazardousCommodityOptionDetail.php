<?php

namespace FedexApi\Lib;

class HazardousCommodityOptionDetail
{

    /**
     * @var HazardousCommodityLabelTextOptionType $LabelTextOption
     */
    protected $LabelTextOption = null;

    /**
     * @var string $CustomerSuppliedLabelText
     */
    protected $CustomerSuppliedLabelText = null;

    /**
     * @param HazardousCommodityLabelTextOptionType $LabelTextOption
     * @param string $CustomerSuppliedLabelText
     */
    public function __construct($LabelTextOption, $CustomerSuppliedLabelText)
    {
      $this->LabelTextOption = $LabelTextOption;
      $this->CustomerSuppliedLabelText = $CustomerSuppliedLabelText;
    }

    /**
     * @return HazardousCommodityLabelTextOptionType
     */
    public function getLabelTextOption()
    {
      return $this->LabelTextOption;
    }

    /**
     * @param HazardousCommodityLabelTextOptionType $LabelTextOption
     * @return \FedexApi\Lib\HazardousCommodityOptionDetail
     */
    public function setLabelTextOption($LabelTextOption)
    {
      $this->LabelTextOption = $LabelTextOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerSuppliedLabelText()
    {
      return $this->CustomerSuppliedLabelText;
    }

    /**
     * @param string $CustomerSuppliedLabelText
     * @return \FedexApi\Lib\HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($CustomerSuppliedLabelText)
    {
      $this->CustomerSuppliedLabelText = $CustomerSuppliedLabelText;
      return $this;
    }

}

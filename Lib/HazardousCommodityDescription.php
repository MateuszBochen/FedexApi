<?php

namespace FedexApiClass\Lib;

class HazardousCommodityDescription
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var HazardousCommodityPackingGroupType $PackingGroup
     */
    protected $PackingGroup = null;

    /**
     * @var HazardousCommodityPackingDetail $PackingDetails
     */
    protected $PackingDetails = null;

    /**
     * @var boolean $ReportableQuantity
     */
    protected $ReportableQuantity = null;

    /**
     * @var string $ProperShippingName
     */
    protected $ProperShippingName = null;

    /**
     * @var string $TechnicalName
     */
    protected $TechnicalName = null;

    /**
     * @var float $Percentage
     */
    protected $Percentage = null;

    /**
     * @var string $HazardClass
     */
    protected $HazardClass = null;

    /**
     * @var string[] $SubsidiaryClasses
     */
    protected $SubsidiaryClasses = null;

    /**
     * @var string $LabelText
     */
    protected $LabelText = null;

    /**
     * @var HazardousCommodityDescriptionProcessingOptionType[] $ProcessingOptions
     */
    protected $ProcessingOptions = null;

    /**
     * @var string $Authorization
     */
    protected $Authorization = null;

    /**
     * @param string $Id
     * @param int $SequenceNumber
     * @param HazardousCommodityPackingGroupType $PackingGroup
     * @param HazardousCommodityPackingDetail $PackingDetails
     * @param boolean $ReportableQuantity
     * @param string $ProperShippingName
     * @param string $TechnicalName
     * @param float $Percentage
     * @param string $HazardClass
     * @param string[] $SubsidiaryClasses
     * @param string $LabelText
     * @param HazardousCommodityDescriptionProcessingOptionType[] $ProcessingOptions
     * @param string $Authorization
     */
    public function __construct($Id, $SequenceNumber, $PackingGroup, $PackingDetails, $ReportableQuantity, $ProperShippingName, $TechnicalName, $Percentage, $HazardClass, array $SubsidiaryClasses, $LabelText, array $ProcessingOptions, $Authorization)
    {
      $this->Id = $Id;
      $this->SequenceNumber = $SequenceNumber;
      $this->PackingGroup = $PackingGroup;
      $this->PackingDetails = $PackingDetails;
      $this->ReportableQuantity = $ReportableQuantity;
      $this->ProperShippingName = $ProperShippingName;
      $this->TechnicalName = $TechnicalName;
      $this->Percentage = $Percentage;
      $this->HazardClass = $HazardClass;
      $this->SubsidiaryClasses = $SubsidiaryClasses;
      $this->LabelText = $LabelText;
      $this->ProcessingOptions = $ProcessingOptions;
      $this->Authorization = $Authorization;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return HazardousCommodityPackingGroupType
     */
    public function getPackingGroup()
    {
      return $this->PackingGroup;
    }

    /**
     * @param HazardousCommodityPackingGroupType $PackingGroup
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setPackingGroup($PackingGroup)
    {
      $this->PackingGroup = $PackingGroup;
      return $this;
    }

    /**
     * @return HazardousCommodityPackingDetail
     */
    public function getPackingDetails()
    {
      return $this->PackingDetails;
    }

    /**
     * @param HazardousCommodityPackingDetail $PackingDetails
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setPackingDetails($PackingDetails)
    {
      $this->PackingDetails = $PackingDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReportableQuantity()
    {
      return $this->ReportableQuantity;
    }

    /**
     * @param boolean $ReportableQuantity
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setReportableQuantity($ReportableQuantity)
    {
      $this->ReportableQuantity = $ReportableQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getProperShippingName()
    {
      return $this->ProperShippingName;
    }

    /**
     * @param string $ProperShippingName
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setProperShippingName($ProperShippingName)
    {
      $this->ProperShippingName = $ProperShippingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTechnicalName()
    {
      return $this->TechnicalName;
    }

    /**
     * @param string $TechnicalName
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setTechnicalName($TechnicalName)
    {
      $this->TechnicalName = $TechnicalName;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param float $Percentage
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazardClass()
    {
      return $this->HazardClass;
    }

    /**
     * @param string $HazardClass
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setHazardClass($HazardClass)
    {
      $this->HazardClass = $HazardClass;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSubsidiaryClasses()
    {
      return $this->SubsidiaryClasses;
    }

    /**
     * @param string[] $SubsidiaryClasses
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $SubsidiaryClasses)
    {
      $this->SubsidiaryClasses = $SubsidiaryClasses;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelText()
    {
      return $this->LabelText;
    }

    /**
     * @param string $LabelText
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setLabelText($LabelText)
    {
      $this->LabelText = $LabelText;
      return $this;
    }

    /**
     * @return HazardousCommodityDescriptionProcessingOptionType[]
     */
    public function getProcessingOptions()
    {
      return $this->ProcessingOptions;
    }

    /**
     * @param HazardousCommodityDescriptionProcessingOptionType[] $ProcessingOptions
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setProcessingOptions(array $ProcessingOptions)
    {
      $this->ProcessingOptions = $ProcessingOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorization()
    {
      return $this->Authorization;
    }

    /**
     * @param string $Authorization
     * @return \FedexApiClass\Lib\HazardousCommodityDescription
     */
    public function setAuthorization($Authorization)
    {
      $this->Authorization = $Authorization;
      return $this;
    }

}

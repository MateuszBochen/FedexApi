<?php

namespace FedexApiClass\Lib;

class ValidatedHazardousCommodityDescription
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
     * @var string $PackingInstructions
     */
    protected $PackingInstructions = null;

    /**
     * @var string $ProperShippingName
     */
    protected $ProperShippingName = null;

    /**
     * @var string $ProperShippingNameAndDescription
     */
    protected $ProperShippingNameAndDescription = null;

    /**
     * @var string $TechnicalName
     */
    protected $TechnicalName = null;

    /**
     * @var string $HazardClass
     */
    protected $HazardClass = null;

    /**
     * @var string[] $SubsidiaryClasses
     */
    protected $SubsidiaryClasses = null;

    /**
     * @var string $Symbols
     */
    protected $Symbols = null;

    /**
     * @var string $TunnelRestrictionCode
     */
    protected $TunnelRestrictionCode = null;

    /**
     * @var string $SpecialProvisions
     */
    protected $SpecialProvisions = null;

    /**
     * @var HazardousCommodityAttributeType[] $Attributes
     */
    protected $Attributes = null;

    /**
     * @var string $Authorization
     */
    protected $Authorization = null;

    /**
     * @var string $LabelText
     */
    protected $LabelText = null;

    /**
     * @param string $Id
     * @param int $SequenceNumber
     * @param HazardousCommodityPackingGroupType $PackingGroup
     * @param string $PackingInstructions
     * @param string $ProperShippingName
     * @param string $ProperShippingNameAndDescription
     * @param string $TechnicalName
     * @param string $HazardClass
     * @param string[] $SubsidiaryClasses
     * @param string $Symbols
     * @param string $TunnelRestrictionCode
     * @param string $SpecialProvisions
     * @param HazardousCommodityAttributeType[] $Attributes
     * @param string $Authorization
     * @param string $LabelText
     */
    public function __construct($Id, $SequenceNumber, $PackingGroup, $PackingInstructions, $ProperShippingName, $ProperShippingNameAndDescription, $TechnicalName, $HazardClass, array $SubsidiaryClasses, $Symbols, $TunnelRestrictionCode, $SpecialProvisions, array $Attributes, $Authorization, $LabelText)
    {
      $this->Id = $Id;
      $this->SequenceNumber = $SequenceNumber;
      $this->PackingGroup = $PackingGroup;
      $this->PackingInstructions = $PackingInstructions;
      $this->ProperShippingName = $ProperShippingName;
      $this->ProperShippingNameAndDescription = $ProperShippingNameAndDescription;
      $this->TechnicalName = $TechnicalName;
      $this->HazardClass = $HazardClass;
      $this->SubsidiaryClasses = $SubsidiaryClasses;
      $this->Symbols = $Symbols;
      $this->TunnelRestrictionCode = $TunnelRestrictionCode;
      $this->SpecialProvisions = $SpecialProvisions;
      $this->Attributes = $Attributes;
      $this->Authorization = $Authorization;
      $this->LabelText = $LabelText;
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setPackingGroup($PackingGroup)
    {
      $this->PackingGroup = $PackingGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackingInstructions()
    {
      return $this->PackingInstructions;
    }

    /**
     * @param string $PackingInstructions
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setPackingInstructions($PackingInstructions)
    {
      $this->PackingInstructions = $PackingInstructions;
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setProperShippingName($ProperShippingName)
    {
      $this->ProperShippingName = $ProperShippingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProperShippingNameAndDescription()
    {
      return $this->ProperShippingNameAndDescription;
    }

    /**
     * @param string $ProperShippingNameAndDescription
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setProperShippingNameAndDescription($ProperShippingNameAndDescription)
    {
      $this->ProperShippingNameAndDescription = $ProperShippingNameAndDescription;
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setTechnicalName($TechnicalName)
    {
      $this->TechnicalName = $TechnicalName;
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $SubsidiaryClasses)
    {
      $this->SubsidiaryClasses = $SubsidiaryClasses;
      return $this;
    }

    /**
     * @return string
     */
    public function getSymbols()
    {
      return $this->Symbols;
    }

    /**
     * @param string $Symbols
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setSymbols($Symbols)
    {
      $this->Symbols = $Symbols;
      return $this;
    }

    /**
     * @return string
     */
    public function getTunnelRestrictionCode()
    {
      return $this->TunnelRestrictionCode;
    }

    /**
     * @param string $TunnelRestrictionCode
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setTunnelRestrictionCode($TunnelRestrictionCode)
    {
      $this->TunnelRestrictionCode = $TunnelRestrictionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialProvisions()
    {
      return $this->SpecialProvisions;
    }

    /**
     * @param string $SpecialProvisions
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setSpecialProvisions($SpecialProvisions)
    {
      $this->SpecialProvisions = $SpecialProvisions;
      return $this;
    }

    /**
     * @return HazardousCommodityAttributeType[]
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param HazardousCommodityAttributeType[] $Attributes
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setAttributes(array $Attributes)
    {
      $this->Attributes = $Attributes;
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setAuthorization($Authorization)
    {
      $this->Authorization = $Authorization;
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
     * @return \FedexApiClass\Lib\ValidatedHazardousCommodityDescription
     */
    public function setLabelText($LabelText)
    {
      $this->LabelText = $LabelText;
      return $this;
    }

}

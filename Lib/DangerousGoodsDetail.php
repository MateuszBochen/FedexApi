<?php

namespace FedexApi\Lib;

class DangerousGoodsDetail
{

    /**
     * @var HazardousCommodityRegulationType $Regulation
     */
    protected $Regulation = null;

    /**
     * @var DangerousGoodsAccessibilityType $Accessibility
     */
    protected $Accessibility = null;

    /**
     * @var boolean $CargoAircraftOnly
     */
    protected $CargoAircraftOnly = null;

    /**
     * @var HazardousCommodityOptionType[] $Options
     */
    protected $Options = null;

    /**
     * @var DangerousGoodsPackingOptionType $PackingOption
     */
    protected $PackingOption = null;

    /**
     * @var string $ReferenceId
     */
    protected $ReferenceId = null;

    /**
     * @var DangerousGoodsContainer[] $Containers
     */
    protected $Containers = null;

    /**
     * @var HazardousCommodityPackagingDetail $Packaging
     */
    protected $Packaging = null;

    /**
     * @var DangerousGoodsSignatory $Signatory
     */
    protected $Signatory = null;

    /**
     * @var string $EmergencyContactNumber
     */
    protected $EmergencyContactNumber = null;

    /**
     * @var string $Offeror
     */
    protected $Offeror = null;

    /**
     * @var Contact $InfectiousSubstanceResponsibleContact
     */
    protected $InfectiousSubstanceResponsibleContact = null;

    /**
     * @var string $AdditionalHandling
     */
    protected $AdditionalHandling = null;

    /**
     * @var RadioactivityDetail $RadioactivityDetail
     */
    protected $RadioactivityDetail = null;

    /**
     * @param HazardousCommodityRegulationType $Regulation
     * @param DangerousGoodsAccessibilityType $Accessibility
     * @param boolean $CargoAircraftOnly
     * @param HazardousCommodityOptionType[] $Options
     * @param DangerousGoodsPackingOptionType $PackingOption
     * @param string $ReferenceId
     * @param DangerousGoodsContainer[] $Containers
     * @param HazardousCommodityPackagingDetail $Packaging
     * @param DangerousGoodsSignatory $Signatory
     * @param string $EmergencyContactNumber
     * @param string $Offeror
     * @param Contact $InfectiousSubstanceResponsibleContact
     * @param string $AdditionalHandling
     * @param RadioactivityDetail $RadioactivityDetail
     */
    public function __construct($Regulation, $Accessibility, $CargoAircraftOnly, array $Options, $PackingOption, $ReferenceId, array $Containers, $Packaging, $Signatory, $EmergencyContactNumber, $Offeror, $InfectiousSubstanceResponsibleContact, $AdditionalHandling, $RadioactivityDetail)
    {
      $this->Regulation = $Regulation;
      $this->Accessibility = $Accessibility;
      $this->CargoAircraftOnly = $CargoAircraftOnly;
      $this->Options = $Options;
      $this->PackingOption = $PackingOption;
      $this->ReferenceId = $ReferenceId;
      $this->Containers = $Containers;
      $this->Packaging = $Packaging;
      $this->Signatory = $Signatory;
      $this->EmergencyContactNumber = $EmergencyContactNumber;
      $this->Offeror = $Offeror;
      $this->InfectiousSubstanceResponsibleContact = $InfectiousSubstanceResponsibleContact;
      $this->AdditionalHandling = $AdditionalHandling;
      $this->RadioactivityDetail = $RadioactivityDetail;
    }

    /**
     * @return HazardousCommodityRegulationType
     */
    public function getRegulation()
    {
      return $this->Regulation;
    }

    /**
     * @param HazardousCommodityRegulationType $Regulation
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setRegulation($Regulation)
    {
      $this->Regulation = $Regulation;
      return $this;
    }

    /**
     * @return DangerousGoodsAccessibilityType
     */
    public function getAccessibility()
    {
      return $this->Accessibility;
    }

    /**
     * @param DangerousGoodsAccessibilityType $Accessibility
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setAccessibility($Accessibility)
    {
      $this->Accessibility = $Accessibility;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
      return $this->CargoAircraftOnly;
    }

    /**
     * @param boolean $CargoAircraftOnly
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($CargoAircraftOnly)
    {
      $this->CargoAircraftOnly = $CargoAircraftOnly;
      return $this;
    }

    /**
     * @return HazardousCommodityOptionType[]
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param HazardousCommodityOptionType[] $Options
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setOptions(array $Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return DangerousGoodsPackingOptionType
     */
    public function getPackingOption()
    {
      return $this->PackingOption;
    }

    /**
     * @param DangerousGoodsPackingOptionType $PackingOption
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setPackingOption($PackingOption)
    {
      $this->PackingOption = $PackingOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
      return $this->ReferenceId;
    }

    /**
     * @param string $ReferenceId
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
      return $this;
    }

    /**
     * @return DangerousGoodsContainer[]
     */
    public function getContainers()
    {
      return $this->Containers;
    }

    /**
     * @param DangerousGoodsContainer[] $Containers
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setContainers(array $Containers)
    {
      $this->Containers = $Containers;
      return $this;
    }

    /**
     * @return HazardousCommodityPackagingDetail
     */
    public function getPackaging()
    {
      return $this->Packaging;
    }

    /**
     * @param HazardousCommodityPackagingDetail $Packaging
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setPackaging($Packaging)
    {
      $this->Packaging = $Packaging;
      return $this;
    }

    /**
     * @return DangerousGoodsSignatory
     */
    public function getSignatory()
    {
      return $this->Signatory;
    }

    /**
     * @param DangerousGoodsSignatory $Signatory
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setSignatory($Signatory)
    {
      $this->Signatory = $Signatory;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmergencyContactNumber()
    {
      return $this->EmergencyContactNumber;
    }

    /**
     * @param string $EmergencyContactNumber
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($EmergencyContactNumber)
    {
      $this->EmergencyContactNumber = $EmergencyContactNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfferor()
    {
      return $this->Offeror;
    }

    /**
     * @param string $Offeror
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setOfferor($Offeror)
    {
      $this->Offeror = $Offeror;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getInfectiousSubstanceResponsibleContact()
    {
      return $this->InfectiousSubstanceResponsibleContact;
    }

    /**
     * @param Contact $InfectiousSubstanceResponsibleContact
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setInfectiousSubstanceResponsibleContact($InfectiousSubstanceResponsibleContact)
    {
      $this->InfectiousSubstanceResponsibleContact = $InfectiousSubstanceResponsibleContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalHandling()
    {
      return $this->AdditionalHandling;
    }

    /**
     * @param string $AdditionalHandling
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setAdditionalHandling($AdditionalHandling)
    {
      $this->AdditionalHandling = $AdditionalHandling;
      return $this;
    }

    /**
     * @return RadioactivityDetail
     */
    public function getRadioactivityDetail()
    {
      return $this->RadioactivityDetail;
    }

    /**
     * @param RadioactivityDetail $RadioactivityDetail
     * @return \FedexApi\Lib\DangerousGoodsDetail
     */
    public function setRadioactivityDetail($RadioactivityDetail)
    {
      $this->RadioactivityDetail = $RadioactivityDetail;
      return $this;
    }

}

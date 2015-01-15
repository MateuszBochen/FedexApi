<?php

namespace FedexApiClass\Lib;

class CompletedHazardousPackageDetail
{

    /**
     * @var string $ReferenceId
     */
    protected $ReferenceId = null;

    /**
     * @var DangerousGoodsAccessibilityType $Accessibility
     */
    protected $Accessibility = null;

    /**
     * @var boolean $CargoAircraftOnly
     */
    protected $CargoAircraftOnly = null;

    /**
     * @var HazardousCommodityRegulationType $Regulation
     */
    protected $Regulation = null;

    /**
     * @var float $RadioactiveTransportIndex
     */
    protected $RadioactiveTransportIndex = null;

    /**
     * @var RadioactiveLabelType $LabelType
     */
    protected $LabelType = null;

    /**
     * @var ValidatedHazardousContainer[] $Containers
     */
    protected $Containers = null;

    /**
     * @param string $ReferenceId
     * @param DangerousGoodsAccessibilityType $Accessibility
     * @param boolean $CargoAircraftOnly
     * @param HazardousCommodityRegulationType $Regulation
     * @param float $RadioactiveTransportIndex
     * @param RadioactiveLabelType $LabelType
     * @param ValidatedHazardousContainer[] $Containers
     */
    public function __construct($ReferenceId = null, $Accessibility = null, $CargoAircraftOnly = null, $Regulation = null, $RadioactiveTransportIndex = null, $LabelType = null, array $Containers = null)
    {
      $this->ReferenceId = $ReferenceId;
      $this->Accessibility = $Accessibility;
      $this->CargoAircraftOnly = $CargoAircraftOnly;
      $this->Regulation = $Regulation;
      $this->RadioactiveTransportIndex = $RadioactiveTransportIndex;
      $this->LabelType = $LabelType;
      $this->Containers = $Containers;
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
     * @return \FedexApiClass\Lib\CompletedHazardousPackageDetail
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
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
     * @return \FedexApiClass\Lib\CompletedHazardousPackageDetail
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
     * @return \FedexApiClass\Lib\CompletedHazardousPackageDetail
     */
    public function setCargoAircraftOnly($CargoAircraftOnly)
    {
      $this->CargoAircraftOnly = $CargoAircraftOnly;
      return $this;
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
     * @return \FedexApiClass\Lib\CompletedHazardousPackageDetail
     */
    public function setRegulation($Regulation)
    {
      $this->Regulation = $Regulation;
      return $this;
    }

    /**
     * @return float
     */
    public function getRadioactiveTransportIndex()
    {
      return $this->RadioactiveTransportIndex;
    }

    /**
     * @param float $RadioactiveTransportIndex
     * @return \FedexApiClass\Lib\CompletedHazardousPackageDetail
     */
    public function setRadioactiveTransportIndex($RadioactiveTransportIndex)
    {
      $this->RadioactiveTransportIndex = $RadioactiveTransportIndex;
      return $this;
    }

    /**
     * @return RadioactiveLabelType
     */
    public function getLabelType()
    {
      return $this->LabelType;
    }

    /**
     * @param RadioactiveLabelType $LabelType
     * @return \FedexApiClass\Lib\CompletedHazardousPackageDetail
     */
    public function setLabelType($LabelType)
    {
      $this->LabelType = $LabelType;
      return $this;
    }

    /**
     * @return ValidatedHazardousContainer[]
     */
    public function getContainers()
    {
      return $this->Containers;
    }

    /**
     * @param ValidatedHazardousContainer[] $Containers
     * @return \FedexApiClass\Lib\CompletedHazardousPackageDetail
     */
    public function setContainers(array $Containers)
    {
      $this->Containers = $Containers;
      return $this;
    }

}

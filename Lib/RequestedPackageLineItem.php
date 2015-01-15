<?php

namespace FedexApiClass\Lib;

class RequestedPackageLineItem
{

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var int $GroupNumber
     */
    protected $GroupNumber = null;

    /**
     * @var int $GroupPackageCount
     */
    protected $GroupPackageCount = null;

    /**
     * @var VariableHandlingChargeDetail $VariableHandlingChargeDetail
     */
    protected $VariableHandlingChargeDetail = null;

    /**
     * @var Money $InsuredValue
     */
    protected $InsuredValue = null;

    /**
     * @var Weight $Weight
     */
    protected $Weight = null;

    /**
     * @var Dimensions $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var PhysicalPackagingType $PhysicalPackaging
     */
    protected $PhysicalPackaging = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var string $ItemDescriptionForClearance
     */
    protected $ItemDescriptionForClearance = null;

    /**
     * @var CustomerReference $CustomerReferences
     */
    protected $CustomerReferences = null;

    /**
     * @var PackageSpecialServicesRequested $SpecialServicesRequested
     */
    protected $SpecialServicesRequested = null;

    /**
     * @var ContentRecord[] $ContentRecords
     */
    protected $ContentRecords = null;

    /**
     * @param int $SequenceNumber
     * @param int $GroupNumber
     * @param int $GroupPackageCount
     * @param VariableHandlingChargeDetail $VariableHandlingChargeDetail
     * @param Money $InsuredValue
     * @param Weight $Weight
     * @param Dimensions $Dimensions
     * @param PhysicalPackagingType $PhysicalPackaging
     * @param string $ItemDescription
     * @param string $ItemDescriptionForClearance
     * @param CustomerReference $CustomerReferences
     * @param PackageSpecialServicesRequested $SpecialServicesRequested
     * @param ContentRecord[] $ContentRecords
     */
    public function __construct($SequenceNumber, $GroupNumber, $GroupPackageCount, $VariableHandlingChargeDetail, $InsuredValue, $Weight, $Dimensions, $PhysicalPackaging, $ItemDescription, $ItemDescriptionForClearance, $CustomerReferences, $SpecialServicesRequested, array $ContentRecords)
    {
      $this->SequenceNumber = $SequenceNumber;
      $this->GroupNumber = $GroupNumber;
      $this->GroupPackageCount = $GroupPackageCount;
      $this->VariableHandlingChargeDetail = $VariableHandlingChargeDetail;
      $this->InsuredValue = $InsuredValue;
      $this->Weight = $Weight;
      $this->Dimensions = $Dimensions;
      $this->PhysicalPackaging = $PhysicalPackaging;
      $this->ItemDescription = $ItemDescription;
      $this->ItemDescriptionForClearance = $ItemDescriptionForClearance;
      $this->CustomerReferences = $CustomerReferences;
      $this->SpecialServicesRequested = $SpecialServicesRequested;
      $this->ContentRecords = $ContentRecords;
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
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroupNumber()
    {
      return $this->GroupNumber;
    }

    /**
     * @param int $GroupNumber
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setGroupNumber($GroupNumber)
    {
      $this->GroupNumber = $GroupNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroupPackageCount()
    {
      return $this->GroupPackageCount;
    }

    /**
     * @param int $GroupPackageCount
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setGroupPackageCount($GroupPackageCount)
    {
      $this->GroupPackageCount = $GroupPackageCount;
      return $this;
    }

    /**
     * @return VariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
      return $this->VariableHandlingChargeDetail;
    }

    /**
     * @param VariableHandlingChargeDetail $VariableHandlingChargeDetail
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail($VariableHandlingChargeDetail)
    {
      $this->VariableHandlingChargeDetail = $VariableHandlingChargeDetail;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInsuredValue()
    {
      return $this->InsuredValue;
    }

    /**
     * @param Money $InsuredValue
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setInsuredValue($InsuredValue)
    {
      $this->InsuredValue = $InsuredValue;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param Weight $Weight
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return Dimensions
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param Dimensions $Dimensions
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return PhysicalPackagingType
     */
    public function getPhysicalPackaging()
    {
      return $this->PhysicalPackaging;
    }

    /**
     * @param PhysicalPackagingType $PhysicalPackaging
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setPhysicalPackaging($PhysicalPackaging)
    {
      $this->PhysicalPackaging = $PhysicalPackaging;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
      return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setItemDescription($ItemDescription)
    {
      $this->ItemDescription = $ItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescriptionForClearance()
    {
      return $this->ItemDescriptionForClearance;
    }

    /**
     * @param string $ItemDescriptionForClearance
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setItemDescriptionForClearance($ItemDescriptionForClearance)
    {
      $this->ItemDescriptionForClearance = $ItemDescriptionForClearance;
      return $this;
    }

    /**
     * @return CustomerReference
     */
    public function getCustomerReferences()
    {
      return $this->CustomerReferences;
    }

    /**
     * @param CustomerReference $CustomerReferences
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setCustomerReferences($CustomerReferences)
    {
      $this->CustomerReferences = $CustomerReferences;
      return $this;
    }

    /**
     * @return PackageSpecialServicesRequested
     */
    public function getSpecialServicesRequested()
    {
      return $this->SpecialServicesRequested;
    }

    /**
     * @param PackageSpecialServicesRequested $SpecialServicesRequested
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setSpecialServicesRequested($SpecialServicesRequested)
    {
      $this->SpecialServicesRequested = $SpecialServicesRequested;
      return $this;
    }

    /**
     * @return ContentRecord[]
     */
    public function getContentRecords()
    {
      return $this->ContentRecords;
    }

    /**
     * @param ContentRecord[] $ContentRecords
     * @return \FedexApiClass\Lib\RequestedPackageLineItem
     */
    public function setContentRecords(array $ContentRecords)
    {
      $this->ContentRecords = $ContentRecords;
      return $this;
    }

}

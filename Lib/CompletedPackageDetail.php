<?php

namespace FedexApiClass\Lib;

class CompletedPackageDetail
{

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var TrackingId[] $TrackingIds
     */
    protected $TrackingIds = null;

    /**
     * @var int $GroupNumber
     */
    protected $GroupNumber = null;

    /**
     * @var OversizeClassType $OversizeClass
     */
    protected $OversizeClass = null;

    /**
     * @var PackageRating $PackageRating
     */
    protected $PackageRating = null;

    /**
     * @var PackageOperationalDetail $OperationalDetail
     */
    protected $OperationalDetail = null;

    /**
     * @var ShippingDocument $Label
     */
    protected $Label = null;

    /**
     * @var ShippingDocument[] $PackageDocuments
     */
    protected $PackageDocuments = null;

    /**
     * @var CodReturnPackageDetail $CodReturnDetail
     */
    protected $CodReturnDetail = null;

    /**
     * @var SignatureOptionType $SignatureOption
     */
    protected $SignatureOption = null;

    /**
     * @var Weight $DryIceWeight
     */
    protected $DryIceWeight = null;

    /**
     * @var CompletedHazardousPackageDetail $HazardousPackageDetail
     */
    protected $HazardousPackageDetail = null;

    /**
     * @param int $SequenceNumber
     * @param TrackingId[] $TrackingIds
     * @param int $GroupNumber
     * @param OversizeClassType $OversizeClass
     * @param PackageRating $PackageRating
     * @param PackageOperationalDetail $OperationalDetail
     * @param ShippingDocument $Label
     * @param ShippingDocument[] $PackageDocuments
     * @param CodReturnPackageDetail $CodReturnDetail
     * @param SignatureOptionType $SignatureOption
     * @param Weight $DryIceWeight
     * @param CompletedHazardousPackageDetail $HazardousPackageDetail
     */
    public function __construct($SequenceNumber, array $TrackingIds, $GroupNumber, $OversizeClass, $PackageRating, $OperationalDetail, $Label, array $PackageDocuments, $CodReturnDetail, $SignatureOption, $DryIceWeight, $HazardousPackageDetail)
    {
      $this->SequenceNumber = $SequenceNumber;
      $this->TrackingIds = $TrackingIds;
      $this->GroupNumber = $GroupNumber;
      $this->OversizeClass = $OversizeClass;
      $this->PackageRating = $PackageRating;
      $this->OperationalDetail = $OperationalDetail;
      $this->Label = $Label;
      $this->PackageDocuments = $PackageDocuments;
      $this->CodReturnDetail = $CodReturnDetail;
      $this->SignatureOption = $SignatureOption;
      $this->DryIceWeight = $DryIceWeight;
      $this->HazardousPackageDetail = $HazardousPackageDetail;
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
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return TrackingId[]
     */
    public function getTrackingIds()
    {
      return $this->TrackingIds;
    }

    /**
     * @param TrackingId[] $TrackingIds
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setTrackingIds(array $TrackingIds)
    {
      $this->TrackingIds = $TrackingIds;
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
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setGroupNumber($GroupNumber)
    {
      $this->GroupNumber = $GroupNumber;
      return $this;
    }

    /**
     * @return OversizeClassType
     */
    public function getOversizeClass()
    {
      return $this->OversizeClass;
    }

    /**
     * @param OversizeClassType $OversizeClass
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setOversizeClass($OversizeClass)
    {
      $this->OversizeClass = $OversizeClass;
      return $this;
    }

    /**
     * @return PackageRating
     */
    public function getPackageRating()
    {
      return $this->PackageRating;
    }

    /**
     * @param PackageRating $PackageRating
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setPackageRating($PackageRating)
    {
      $this->PackageRating = $PackageRating;
      return $this;
    }

    /**
     * @return PackageOperationalDetail
     */
    public function getOperationalDetail()
    {
      return $this->OperationalDetail;
    }

    /**
     * @param PackageOperationalDetail $OperationalDetail
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setOperationalDetail($OperationalDetail)
    {
      $this->OperationalDetail = $OperationalDetail;
      return $this;
    }

    /**
     * @return ShippingDocument
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param ShippingDocument $Label
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return ShippingDocument[]
     */
    public function getPackageDocuments()
    {
      return $this->PackageDocuments;
    }

    /**
     * @param ShippingDocument[] $PackageDocuments
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setPackageDocuments(array $PackageDocuments)
    {
      $this->PackageDocuments = $PackageDocuments;
      return $this;
    }

    /**
     * @return CodReturnPackageDetail
     */
    public function getCodReturnDetail()
    {
      return $this->CodReturnDetail;
    }

    /**
     * @param CodReturnPackageDetail $CodReturnDetail
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setCodReturnDetail($CodReturnDetail)
    {
      $this->CodReturnDetail = $CodReturnDetail;
      return $this;
    }

    /**
     * @return SignatureOptionType
     */
    public function getSignatureOption()
    {
      return $this->SignatureOption;
    }

    /**
     * @param SignatureOptionType $SignatureOption
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setSignatureOption($SignatureOption)
    {
      $this->SignatureOption = $SignatureOption;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getDryIceWeight()
    {
      return $this->DryIceWeight;
    }

    /**
     * @param Weight $DryIceWeight
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setDryIceWeight($DryIceWeight)
    {
      $this->DryIceWeight = $DryIceWeight;
      return $this;
    }

    /**
     * @return CompletedHazardousPackageDetail
     */
    public function getHazardousPackageDetail()
    {
      return $this->HazardousPackageDetail;
    }

    /**
     * @param CompletedHazardousPackageDetail $HazardousPackageDetail
     * @return \FedexApiClass\Lib\CompletedPackageDetail
     */
    public function setHazardousPackageDetail($HazardousPackageDetail)
    {
      $this->HazardousPackageDetail = $HazardousPackageDetail;
      return $this;
    }

}

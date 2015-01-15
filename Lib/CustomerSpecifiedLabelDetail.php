<?php

namespace FedexApiClass\Lib;

class CustomerSpecifiedLabelDetail
{

    /**
     * @var DocTabContent $DocTabContent
     */
    protected $DocTabContent = null;

    /**
     * @var RelativeVerticalPositionType $CustomContentPosition
     */
    protected $CustomContentPosition = null;

    /**
     * @var CustomLabelDetail $CustomContent
     */
    protected $CustomContent = null;

    /**
     * @var ConfigurableLabelReferenceEntry[] $ConfigurableReferenceEntries
     */
    protected $ConfigurableReferenceEntries = null;

    /**
     * @var LabelMaskableDataType[] $MaskedData
     */
    protected $MaskedData = null;

    /**
     * @var SecondaryBarcodeType $SecondaryBarcode
     */
    protected $SecondaryBarcode = null;

    /**
     * @var Localization $TermsAndConditionsLocalization
     */
    protected $TermsAndConditionsLocalization = null;

    /**
     * @var RegulatoryLabelContentDetail[] $RegulatoryLabels
     */
    protected $RegulatoryLabels = null;

    /**
     * @var AdditionalLabelsDetail[] $AdditionalLabels
     */
    protected $AdditionalLabels = null;

    /**
     * @var int $AirWaybillSuppressionCount
     */
    protected $AirWaybillSuppressionCount = null;

    /**
     * @param DocTabContent $DocTabContent
     * @param RelativeVerticalPositionType $CustomContentPosition
     * @param CustomLabelDetail $CustomContent
     * @param ConfigurableLabelReferenceEntry[] $ConfigurableReferenceEntries
     * @param LabelMaskableDataType[] $MaskedData
     * @param SecondaryBarcodeType $SecondaryBarcode
     * @param Localization $TermsAndConditionsLocalization
     * @param RegulatoryLabelContentDetail[] $RegulatoryLabels
     * @param AdditionalLabelsDetail[] $AdditionalLabels
     * @param int $AirWaybillSuppressionCount
     */
    public function __construct($DocTabContent, $CustomContentPosition, $CustomContent, array $ConfigurableReferenceEntries, array $MaskedData, $SecondaryBarcode, $TermsAndConditionsLocalization, array $RegulatoryLabels, array $AdditionalLabels, $AirWaybillSuppressionCount)
    {
      $this->DocTabContent = $DocTabContent;
      $this->CustomContentPosition = $CustomContentPosition;
      $this->CustomContent = $CustomContent;
      $this->ConfigurableReferenceEntries = $ConfigurableReferenceEntries;
      $this->MaskedData = $MaskedData;
      $this->SecondaryBarcode = $SecondaryBarcode;
      $this->TermsAndConditionsLocalization = $TermsAndConditionsLocalization;
      $this->RegulatoryLabels = $RegulatoryLabels;
      $this->AdditionalLabels = $AdditionalLabels;
      $this->AirWaybillSuppressionCount = $AirWaybillSuppressionCount;
    }

    /**
     * @return DocTabContent
     */
    public function getDocTabContent()
    {
      return $this->DocTabContent;
    }

    /**
     * @param DocTabContent $DocTabContent
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent($DocTabContent)
    {
      $this->DocTabContent = $DocTabContent;
      return $this;
    }

    /**
     * @return RelativeVerticalPositionType
     */
    public function getCustomContentPosition()
    {
      return $this->CustomContentPosition;
    }

    /**
     * @param RelativeVerticalPositionType $CustomContentPosition
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setCustomContentPosition($CustomContentPosition)
    {
      $this->CustomContentPosition = $CustomContentPosition;
      return $this;
    }

    /**
     * @return CustomLabelDetail
     */
    public function getCustomContent()
    {
      return $this->CustomContent;
    }

    /**
     * @param CustomLabelDetail $CustomContent
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setCustomContent($CustomContent)
    {
      $this->CustomContent = $CustomContent;
      return $this;
    }

    /**
     * @return ConfigurableLabelReferenceEntry[]
     */
    public function getConfigurableReferenceEntries()
    {
      return $this->ConfigurableReferenceEntries;
    }

    /**
     * @param ConfigurableLabelReferenceEntry[] $ConfigurableReferenceEntries
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(array $ConfigurableReferenceEntries)
    {
      $this->ConfigurableReferenceEntries = $ConfigurableReferenceEntries;
      return $this;
    }

    /**
     * @return LabelMaskableDataType[]
     */
    public function getMaskedData()
    {
      return $this->MaskedData;
    }

    /**
     * @param LabelMaskableDataType[] $MaskedData
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setMaskedData(array $MaskedData)
    {
      $this->MaskedData = $MaskedData;
      return $this;
    }

    /**
     * @return SecondaryBarcodeType
     */
    public function getSecondaryBarcode()
    {
      return $this->SecondaryBarcode;
    }

    /**
     * @param SecondaryBarcodeType $SecondaryBarcode
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode($SecondaryBarcode)
    {
      $this->SecondaryBarcode = $SecondaryBarcode;
      return $this;
    }

    /**
     * @return Localization
     */
    public function getTermsAndConditionsLocalization()
    {
      return $this->TermsAndConditionsLocalization;
    }

    /**
     * @param Localization $TermsAndConditionsLocalization
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization($TermsAndConditionsLocalization)
    {
      $this->TermsAndConditionsLocalization = $TermsAndConditionsLocalization;
      return $this;
    }

    /**
     * @return RegulatoryLabelContentDetail[]
     */
    public function getRegulatoryLabels()
    {
      return $this->RegulatoryLabels;
    }

    /**
     * @param RegulatoryLabelContentDetail[] $RegulatoryLabels
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setRegulatoryLabels(array $RegulatoryLabels)
    {
      $this->RegulatoryLabels = $RegulatoryLabels;
      return $this;
    }

    /**
     * @return AdditionalLabelsDetail[]
     */
    public function getAdditionalLabels()
    {
      return $this->AdditionalLabels;
    }

    /**
     * @param AdditionalLabelsDetail[] $AdditionalLabels
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(array $AdditionalLabels)
    {
      $this->AdditionalLabels = $AdditionalLabels;
      return $this;
    }

    /**
     * @return int
     */
    public function getAirWaybillSuppressionCount()
    {
      return $this->AirWaybillSuppressionCount;
    }

    /**
     * @param int $AirWaybillSuppressionCount
     * @return \FedexApiClass\Lib\CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($AirWaybillSuppressionCount)
    {
      $this->AirWaybillSuppressionCount = $AirWaybillSuppressionCount;
      return $this;
    }

}

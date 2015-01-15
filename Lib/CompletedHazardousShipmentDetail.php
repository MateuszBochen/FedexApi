<?php

namespace FedexApi\Lib;

class CompletedHazardousShipmentDetail
{

    /**
     * @var CompletedHazardousSummaryDetail $HazardousSummaryDetail
     */
    protected $HazardousSummaryDetail = null;

    /**
     * @var ShipmentDryIceDetail $DryIceDetail
     */
    protected $DryIceDetail = null;

    /**
     * @var AdrLicenseDetail $AdrLicense
     */
    protected $AdrLicense = null;

    /**
     * @param CompletedHazardousSummaryDetail $HazardousSummaryDetail
     * @param ShipmentDryIceDetail $DryIceDetail
     * @param AdrLicenseDetail $AdrLicense
     */
    public function __construct($HazardousSummaryDetail, $DryIceDetail, $AdrLicense)
    {
      $this->HazardousSummaryDetail = $HazardousSummaryDetail;
      $this->DryIceDetail = $DryIceDetail;
      $this->AdrLicense = $AdrLicense;
    }

    /**
     * @return CompletedHazardousSummaryDetail
     */
    public function getHazardousSummaryDetail()
    {
      return $this->HazardousSummaryDetail;
    }

    /**
     * @param CompletedHazardousSummaryDetail $HazardousSummaryDetail
     * @return \FedexApi\Lib\CompletedHazardousShipmentDetail
     */
    public function setHazardousSummaryDetail($HazardousSummaryDetail)
    {
      $this->HazardousSummaryDetail = $HazardousSummaryDetail;
      return $this;
    }

    /**
     * @return ShipmentDryIceDetail
     */
    public function getDryIceDetail()
    {
      return $this->DryIceDetail;
    }

    /**
     * @param ShipmentDryIceDetail $DryIceDetail
     * @return \FedexApi\Lib\CompletedHazardousShipmentDetail
     */
    public function setDryIceDetail($DryIceDetail)
    {
      $this->DryIceDetail = $DryIceDetail;
      return $this;
    }

    /**
     * @return AdrLicenseDetail
     */
    public function getAdrLicense()
    {
      return $this->AdrLicense;
    }

    /**
     * @param AdrLicenseDetail $AdrLicense
     * @return \FedexApi\Lib\CompletedHazardousShipmentDetail
     */
    public function setAdrLicense($AdrLicense)
    {
      $this->AdrLicense = $AdrLicense;
      return $this;
    }

}

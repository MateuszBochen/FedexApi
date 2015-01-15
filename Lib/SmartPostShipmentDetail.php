<?php

namespace FedexApi\Lib;

class SmartPostShipmentDetail
{

    /**
     * @var SmartPostIndiciaType $Indicia
     */
    protected $Indicia = null;

    /**
     * @var SmartPostAncillaryEndorsementType $AncillaryEndorsement
     */
    protected $AncillaryEndorsement = null;

    /**
     * @var string $HubId
     */
    protected $HubId = null;

    /**
     * @var string $CustomerManifestId
     */
    protected $CustomerManifestId = null;

    /**
     * @param SmartPostIndiciaType $Indicia
     * @param SmartPostAncillaryEndorsementType $AncillaryEndorsement
     * @param string $HubId
     * @param string $CustomerManifestId
     */
    public function __construct($Indicia, $AncillaryEndorsement, $HubId, $CustomerManifestId)
    {
      $this->Indicia = $Indicia;
      $this->AncillaryEndorsement = $AncillaryEndorsement;
      $this->HubId = $HubId;
      $this->CustomerManifestId = $CustomerManifestId;
    }

    /**
     * @return SmartPostIndiciaType
     */
    public function getIndicia()
    {
      return $this->Indicia;
    }

    /**
     * @param SmartPostIndiciaType $Indicia
     * @return \FedexApi\Lib\SmartPostShipmentDetail
     */
    public function setIndicia($Indicia)
    {
      $this->Indicia = $Indicia;
      return $this;
    }

    /**
     * @return SmartPostAncillaryEndorsementType
     */
    public function getAncillaryEndorsement()
    {
      return $this->AncillaryEndorsement;
    }

    /**
     * @param SmartPostAncillaryEndorsementType $AncillaryEndorsement
     * @return \FedexApi\Lib\SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement($AncillaryEndorsement)
    {
      $this->AncillaryEndorsement = $AncillaryEndorsement;
      return $this;
    }

    /**
     * @return string
     */
    public function getHubId()
    {
      return $this->HubId;
    }

    /**
     * @param string $HubId
     * @return \FedexApi\Lib\SmartPostShipmentDetail
     */
    public function setHubId($HubId)
    {
      $this->HubId = $HubId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerManifestId()
    {
      return $this->CustomerManifestId;
    }

    /**
     * @param string $CustomerManifestId
     * @return \FedexApi\Lib\SmartPostShipmentDetail
     */
    public function setCustomerManifestId($CustomerManifestId)
    {
      $this->CustomerManifestId = $CustomerManifestId;
      return $this;
    }

}

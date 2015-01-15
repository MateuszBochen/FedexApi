<?php

namespace FedexApiClass\Lib;

class PackageSpecialServicesRequested
{

    /**
     * @var PackageSpecialServiceType[] $SpecialServiceTypes
     */
    protected $SpecialServiceTypes = null;

    /**
     * @var CodDetail $CodDetail
     */
    protected $CodDetail = null;

    /**
     * @var DangerousGoodsDetail $DangerousGoodsDetail
     */
    protected $DangerousGoodsDetail = null;

    /**
     * @var Weight $DryIceWeight
     */
    protected $DryIceWeight = null;

    /**
     * @var SignatureOptionDetail $SignatureOptionDetail
     */
    protected $SignatureOptionDetail = null;

    /**
     * @var PriorityAlertDetail $PriorityAlertDetail
     */
    protected $PriorityAlertDetail = null;

    /**
     * @var AlcoholDetail $AlcoholDetail
     */
    protected $AlcoholDetail = null;

    /**
     * @param PackageSpecialServiceType[] $SpecialServiceTypes
     * @param CodDetail $CodDetail
     * @param DangerousGoodsDetail $DangerousGoodsDetail
     * @param Weight $DryIceWeight
     * @param SignatureOptionDetail $SignatureOptionDetail
     * @param PriorityAlertDetail $PriorityAlertDetail
     * @param AlcoholDetail $AlcoholDetail
     */
    public function __construct(array $SpecialServiceTypes, $CodDetail, $DangerousGoodsDetail, $DryIceWeight, $SignatureOptionDetail, $PriorityAlertDetail, $AlcoholDetail)
    {
      $this->SpecialServiceTypes = $SpecialServiceTypes;
      $this->CodDetail = $CodDetail;
      $this->DangerousGoodsDetail = $DangerousGoodsDetail;
      $this->DryIceWeight = $DryIceWeight;
      $this->SignatureOptionDetail = $SignatureOptionDetail;
      $this->PriorityAlertDetail = $PriorityAlertDetail;
      $this->AlcoholDetail = $AlcoholDetail;
    }

    /**
     * @return PackageSpecialServiceType[]
     */
    public function getSpecialServiceTypes()
    {
      return $this->SpecialServiceTypes;
    }

    /**
     * @param PackageSpecialServiceType[] $SpecialServiceTypes
     * @return \FedexApiClass\Lib\PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $SpecialServiceTypes)
    {
      $this->SpecialServiceTypes = $SpecialServiceTypes;
      return $this;
    }

    /**
     * @return CodDetail
     */
    public function getCodDetail()
    {
      return $this->CodDetail;
    }

    /**
     * @param CodDetail $CodDetail
     * @return \FedexApiClass\Lib\PackageSpecialServicesRequested
     */
    public function setCodDetail($CodDetail)
    {
      $this->CodDetail = $CodDetail;
      return $this;
    }

    /**
     * @return DangerousGoodsDetail
     */
    public function getDangerousGoodsDetail()
    {
      return $this->DangerousGoodsDetail;
    }

    /**
     * @param DangerousGoodsDetail $DangerousGoodsDetail
     * @return \FedexApiClass\Lib\PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail($DangerousGoodsDetail)
    {
      $this->DangerousGoodsDetail = $DangerousGoodsDetail;
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
     * @return \FedexApiClass\Lib\PackageSpecialServicesRequested
     */
    public function setDryIceWeight($DryIceWeight)
    {
      $this->DryIceWeight = $DryIceWeight;
      return $this;
    }

    /**
     * @return SignatureOptionDetail
     */
    public function getSignatureOptionDetail()
    {
      return $this->SignatureOptionDetail;
    }

    /**
     * @param SignatureOptionDetail $SignatureOptionDetail
     * @return \FedexApiClass\Lib\PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail($SignatureOptionDetail)
    {
      $this->SignatureOptionDetail = $SignatureOptionDetail;
      return $this;
    }

    /**
     * @return PriorityAlertDetail
     */
    public function getPriorityAlertDetail()
    {
      return $this->PriorityAlertDetail;
    }

    /**
     * @param PriorityAlertDetail $PriorityAlertDetail
     * @return \FedexApiClass\Lib\PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail($PriorityAlertDetail)
    {
      $this->PriorityAlertDetail = $PriorityAlertDetail;
      return $this;
    }

    /**
     * @return AlcoholDetail
     */
    public function getAlcoholDetail()
    {
      return $this->AlcoholDetail;
    }

    /**
     * @param AlcoholDetail $AlcoholDetail
     * @return \FedexApiClass\Lib\PackageSpecialServicesRequested
     */
    public function setAlcoholDetail($AlcoholDetail)
    {
      $this->AlcoholDetail = $AlcoholDetail;
      return $this;
    }

}

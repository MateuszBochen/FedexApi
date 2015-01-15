<?php

namespace FedexApi\Lib;

class CompletedSmartPostDetail
{

    /**
     * @var CarrierCodeType $PickUpCarrier
     */
    protected $PickUpCarrier = null;

    /**
     * @var boolean $Machinable
     */
    protected $Machinable = null;

    /**
     * @param CarrierCodeType $PickUpCarrier
     * @param boolean $Machinable
     */
    public function __construct($PickUpCarrier, $Machinable)
    {
      $this->PickUpCarrier = $PickUpCarrier;
      $this->Machinable = $Machinable;
    }

    /**
     * @return CarrierCodeType
     */
    public function getPickUpCarrier()
    {
      return $this->PickUpCarrier;
    }

    /**
     * @param CarrierCodeType $PickUpCarrier
     * @return \FedexApi\Lib\CompletedSmartPostDetail
     */
    public function setPickUpCarrier($PickUpCarrier)
    {
      $this->PickUpCarrier = $PickUpCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMachinable()
    {
      return $this->Machinable;
    }

    /**
     * @param boolean $Machinable
     * @return \FedexApi\Lib\CompletedSmartPostDetail
     */
    public function setMachinable($Machinable)
    {
      $this->Machinable = $Machinable;
      return $this;
    }

}

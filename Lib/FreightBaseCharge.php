<?php

namespace FedexApi\Lib;

class FreightBaseCharge
{

    /**
     * @var FreightClassType $FreightClass
     */
    protected $FreightClass = null;

    /**
     * @var FreightClassType $RatedAsClass
     */
    protected $RatedAsClass = null;

    /**
     * @var string $NmfcCode
     */
    protected $NmfcCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var Weight $Weight
     */
    protected $Weight = null;

    /**
     * @var Money $ChargeRate
     */
    protected $ChargeRate = null;

    /**
     * @var FreightChargeBasisType $ChargeBasis
     */
    protected $ChargeBasis = null;

    /**
     * @var Money $ExtendedAmount
     */
    protected $ExtendedAmount = null;

    /**
     * @param FreightClassType $FreightClass
     * @param FreightClassType $RatedAsClass
     * @param string $NmfcCode
     * @param string $Description
     * @param Weight $Weight
     * @param Money $ChargeRate
     * @param FreightChargeBasisType $ChargeBasis
     * @param Money $ExtendedAmount
     */
    public function __construct($FreightClass, $RatedAsClass, $NmfcCode, $Description, $Weight, $ChargeRate, $ChargeBasis, $ExtendedAmount)
    {
      $this->FreightClass = $FreightClass;
      $this->RatedAsClass = $RatedAsClass;
      $this->NmfcCode = $NmfcCode;
      $this->Description = $Description;
      $this->Weight = $Weight;
      $this->ChargeRate = $ChargeRate;
      $this->ChargeBasis = $ChargeBasis;
      $this->ExtendedAmount = $ExtendedAmount;
    }

    /**
     * @return FreightClassType
     */
    public function getFreightClass()
    {
      return $this->FreightClass;
    }

    /**
     * @param FreightClassType $FreightClass
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setFreightClass($FreightClass)
    {
      $this->FreightClass = $FreightClass;
      return $this;
    }

    /**
     * @return FreightClassType
     */
    public function getRatedAsClass()
    {
      return $this->RatedAsClass;
    }

    /**
     * @param FreightClassType $RatedAsClass
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setRatedAsClass($RatedAsClass)
    {
      $this->RatedAsClass = $RatedAsClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getNmfcCode()
    {
      return $this->NmfcCode;
    }

    /**
     * @param string $NmfcCode
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setNmfcCode($NmfcCode)
    {
      $this->NmfcCode = $NmfcCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getChargeRate()
    {
      return $this->ChargeRate;
    }

    /**
     * @param Money $ChargeRate
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setChargeRate($ChargeRate)
    {
      $this->ChargeRate = $ChargeRate;
      return $this;
    }

    /**
     * @return FreightChargeBasisType
     */
    public function getChargeBasis()
    {
      return $this->ChargeBasis;
    }

    /**
     * @param FreightChargeBasisType $ChargeBasis
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setChargeBasis($ChargeBasis)
    {
      $this->ChargeBasis = $ChargeBasis;
      return $this;
    }

    /**
     * @return Money
     */
    public function getExtendedAmount()
    {
      return $this->ExtendedAmount;
    }

    /**
     * @param Money $ExtendedAmount
     * @return \FedexApi\Lib\FreightBaseCharge
     */
    public function setExtendedAmount($ExtendedAmount)
    {
      $this->ExtendedAmount = $ExtendedAmount;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class Address
{

    /**
     * @var string $StreetLines
     */
    protected $StreetLines = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $StateOrProvinceCode
     */
    protected $StateOrProvinceCode = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $UrbanizationCode
     */
    protected $UrbanizationCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var boolean $Residential
     */
    protected $Residential = null;

    /**
     * @param string $StreetLines
     * @param string $City
     * @param string $StateOrProvinceCode
     * @param string $PostalCode
     * @param string $UrbanizationCode
     * @param string $CountryCode
     * @param string $CountryName
     * @param boolean $Residential
     */
    public function __construct($StreetLines, $City, $StateOrProvinceCode, $PostalCode, $UrbanizationCode, $CountryCode, $CountryName, $Residential)
    {
      $this->StreetLines = $StreetLines;
      $this->City = $City;
      $this->StateOrProvinceCode = $StateOrProvinceCode;
      $this->PostalCode = $PostalCode;
      $this->UrbanizationCode = $UrbanizationCode;
      $this->CountryCode = $CountryCode;
      $this->CountryName = $CountryName;
      $this->Residential = $Residential;
    }

    /**
     * @return string
     */
    public function getStreetLines()
    {
      return $this->StreetLines;
    }

    /**
     * @param string $StreetLines
     * @return \FedexApiClass\Lib\Address
     */
    public function setStreetLines($StreetLines)
    {
      $this->StreetLines = $StreetLines;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \FedexApiClass\Lib\Address
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvinceCode()
    {
      return $this->StateOrProvinceCode;
    }

    /**
     * @param string $StateOrProvinceCode
     * @return \FedexApiClass\Lib\Address
     */
    public function setStateOrProvinceCode($StateOrProvinceCode)
    {
      $this->StateOrProvinceCode = $StateOrProvinceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \FedexApiClass\Lib\Address
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrbanizationCode()
    {
      return $this->UrbanizationCode;
    }

    /**
     * @param string $UrbanizationCode
     * @return \FedexApiClass\Lib\Address
     */
    public function setUrbanizationCode($UrbanizationCode)
    {
      $this->UrbanizationCode = $UrbanizationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \FedexApiClass\Lib\Address
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return \FedexApiClass\Lib\Address
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResidential()
    {
      return $this->Residential;
    }

    /**
     * @param boolean $Residential
     * @return \FedexApiClass\Lib\Address
     */
    public function setResidential($Residential)
    {
      $this->Residential = $Residential;
      return $this;
    }

}

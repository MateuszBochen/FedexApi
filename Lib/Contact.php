<?php

namespace FedexApi\Lib;

class Contact
{

    /**
     * @var string $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $PersonName
     */
    protected $PersonName = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $PhoneExtension
     */
    protected $PhoneExtension = null;

    /**
     * @var string $TollFreePhoneNumber
     */
    protected $TollFreePhoneNumber = null;

    /**
     * @var string $PagerNumber
     */
    protected $PagerNumber = null;

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @param string $ContactId
     * @param string $PersonName
     * @param string $Title
     * @param string $CompanyName
     * @param string $PhoneNumber
     * @param string $PhoneExtension
     * @param string $TollFreePhoneNumber
     * @param string $PagerNumber
     * @param string $FaxNumber
     * @param string $EMailAddress
     */
    public function __construct($ContactId, $PersonName, $Title, $CompanyName, $PhoneNumber, $PhoneExtension, $TollFreePhoneNumber, $PagerNumber, $FaxNumber, $EMailAddress)
    {
      $this->ContactId = $ContactId;
      $this->PersonName = $PersonName;
      $this->Title = $Title;
      $this->CompanyName = $CompanyName;
      $this->PhoneNumber = $PhoneNumber;
      $this->PhoneExtension = $PhoneExtension;
      $this->TollFreePhoneNumber = $TollFreePhoneNumber;
      $this->PagerNumber = $PagerNumber;
      $this->FaxNumber = $FaxNumber;
      $this->EMailAddress = $EMailAddress;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
      return $this->ContactId;
    }

    /**
     * @param string $ContactId
     * @return \FedexApi\Lib\Contact
     */
    public function setContactId($ContactId)
    {
      $this->ContactId = $ContactId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
      return $this->PersonName;
    }

    /**
     * @param string $PersonName
     * @return \FedexApi\Lib\Contact
     */
    public function setPersonName($PersonName)
    {
      $this->PersonName = $PersonName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \FedexApi\Lib\Contact
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \FedexApi\Lib\Contact
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \FedexApi\Lib\Contact
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneExtension()
    {
      return $this->PhoneExtension;
    }

    /**
     * @param string $PhoneExtension
     * @return \FedexApi\Lib\Contact
     */
    public function setPhoneExtension($PhoneExtension)
    {
      $this->PhoneExtension = $PhoneExtension;
      return $this;
    }

    /**
     * @return string
     */
    public function getTollFreePhoneNumber()
    {
      return $this->TollFreePhoneNumber;
    }

    /**
     * @param string $TollFreePhoneNumber
     * @return \FedexApi\Lib\Contact
     */
    public function setTollFreePhoneNumber($TollFreePhoneNumber)
    {
      $this->TollFreePhoneNumber = $TollFreePhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPagerNumber()
    {
      return $this->PagerNumber;
    }

    /**
     * @param string $PagerNumber
     * @return \FedexApi\Lib\Contact
     */
    public function setPagerNumber($PagerNumber)
    {
      $this->PagerNumber = $PagerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     * @return \FedexApi\Lib\Contact
     */
    public function setFaxNumber($FaxNumber)
    {
      $this->FaxNumber = $FaxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEMailAddress()
    {
      return $this->EMailAddress;
    }

    /**
     * @param string $EMailAddress
     * @return \FedexApi\Lib\Contact
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

}

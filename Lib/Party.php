<?php

namespace FedexApiClass\Lib;

class Party
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var TaxpayerIdentification[] $Tins
     */
    protected $Tins = null;

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @param string $AccountNumber
     * @param TaxpayerIdentification[] $Tins
     * @param Contact $Contact
     * @param Address $Address
     */
    public function __construct($AccountNumber = null, array $Tins = null, $Contact = null, $Address = null)
    {
      $this->AccountNumber = $AccountNumber;
      $this->Tins = $Tins;
      $this->Contact = $Contact;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \FedexApiClass\Lib\Party
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return TaxpayerIdentification[]
     */
    public function getTins()
    {
      return $this->Tins;
    }

    /**
     * @param TaxpayerIdentification[] $Tins
     * @return \FedexApiClass\Lib\Party
     */
    public function setTins(array $Tins)
    {
      $this->Tins = $Tins;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param Contact $Contact
     * @return \FedexApiClass\Lib\Party
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \FedexApiClass\Lib\Party
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}

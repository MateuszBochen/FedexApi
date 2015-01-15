<?php

namespace FedexApiClass\Lib;

class ContactAndAddress
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @param Contact $Contact
     * @param Address $Address
     */
    public function __construct($Contact, $Address)
    {
      $this->Contact = $Contact;
      $this->Address = $Address;
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
     * @return \FedexApiClass\Lib\ContactAndAddress
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
     * @return \FedexApiClass\Lib\ContactAndAddress
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}

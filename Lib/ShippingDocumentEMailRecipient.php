<?php

namespace FedexApiClass\Lib;

class ShippingDocumentEMailRecipient
{

    /**
     * @var EMailNotificationRecipientType $RecipientType
     */
    protected $RecipientType = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @param EMailNotificationRecipientType $RecipientType
     * @param string $Address
     */
    public function __construct($RecipientType, $Address)
    {
      $this->RecipientType = $RecipientType;
      $this->Address = $Address;
    }

    /**
     * @return EMailNotificationRecipientType
     */
    public function getRecipientType()
    {
      return $this->RecipientType;
    }

    /**
     * @param EMailNotificationRecipientType $RecipientType
     * @return \FedexApiClass\Lib\ShippingDocumentEMailRecipient
     */
    public function setRecipientType($RecipientType)
    {
      $this->RecipientType = $RecipientType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \FedexApiClass\Lib\ShippingDocumentEMailRecipient
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}

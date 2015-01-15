<?php

namespace FedexApiClass\Lib;

class ShippingDocumentEMailDetail
{

    /**
     * @var ShippingDocumentEMailRecipient[] $EMailRecipients
     */
    protected $EMailRecipients = null;

    /**
     * @var ShippingDocumentEMailGroupingType $Grouping
     */
    protected $Grouping = null;

    /**
     * @var Localization $Localization
     */
    protected $Localization = null;

    /**
     * @param ShippingDocumentEMailRecipient[] $EMailRecipients
     * @param ShippingDocumentEMailGroupingType $Grouping
     * @param Localization $Localization
     */
    public function __construct(array $EMailRecipients, $Grouping, $Localization)
    {
      $this->EMailRecipients = $EMailRecipients;
      $this->Grouping = $Grouping;
      $this->Localization = $Localization;
    }

    /**
     * @return ShippingDocumentEMailRecipient[]
     */
    public function getEMailRecipients()
    {
      return $this->EMailRecipients;
    }

    /**
     * @param ShippingDocumentEMailRecipient[] $EMailRecipients
     * @return \FedexApiClass\Lib\ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $EMailRecipients)
    {
      $this->EMailRecipients = $EMailRecipients;
      return $this;
    }

    /**
     * @return ShippingDocumentEMailGroupingType
     */
    public function getGrouping()
    {
      return $this->Grouping;
    }

    /**
     * @param ShippingDocumentEMailGroupingType $Grouping
     * @return \FedexApiClass\Lib\ShippingDocumentEMailDetail
     */
    public function setGrouping($Grouping)
    {
      $this->Grouping = $Grouping;
      return $this;
    }

    /**
     * @return Localization
     */
    public function getLocalization()
    {
      return $this->Localization;
    }

    /**
     * @param Localization $Localization
     * @return \FedexApiClass\Lib\ShippingDocumentEMailDetail
     */
    public function setLocalization($Localization)
    {
      $this->Localization = $Localization;
      return $this;
    }

}

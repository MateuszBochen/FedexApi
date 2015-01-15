<?php

namespace FedexApi\Lib;

class EMailNotificationRecipient
{

    /**
     * @var EMailNotificationRecipientType $EMailNotificationRecipientType
     */
    protected $EMailNotificationRecipientType = null;

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @var EMailNotificationEventType[] $NotificationEventsRequested
     */
    protected $NotificationEventsRequested = null;

    /**
     * @var EMailNotificationFormatType $Format
     */
    protected $Format = null;

    /**
     * @var Localization $Localization
     */
    protected $Localization = null;

    /**
     * @param EMailNotificationRecipientType $EMailNotificationRecipientType
     * @param string $EMailAddress
     * @param EMailNotificationEventType[] $NotificationEventsRequested
     * @param EMailNotificationFormatType $Format
     * @param Localization $Localization
     */
    public function __construct($EMailNotificationRecipientType, $EMailAddress, array $NotificationEventsRequested, $Format, $Localization)
    {
      $this->EMailNotificationRecipientType = $EMailNotificationRecipientType;
      $this->EMailAddress = $EMailAddress;
      $this->NotificationEventsRequested = $NotificationEventsRequested;
      $this->Format = $Format;
      $this->Localization = $Localization;
    }

    /**
     * @return EMailNotificationRecipientType
     */
    public function getEMailNotificationRecipientType()
    {
      return $this->EMailNotificationRecipientType;
    }

    /**
     * @param EMailNotificationRecipientType $EMailNotificationRecipientType
     * @return \FedexApi\Lib\EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType($EMailNotificationRecipientType)
    {
      $this->EMailNotificationRecipientType = $EMailNotificationRecipientType;
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
     * @return \FedexApi\Lib\EMailNotificationRecipient
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

    /**
     * @return EMailNotificationEventType[]
     */
    public function getNotificationEventsRequested()
    {
      return $this->NotificationEventsRequested;
    }

    /**
     * @param EMailNotificationEventType[] $NotificationEventsRequested
     * @return \FedexApi\Lib\EMailNotificationRecipient
     */
    public function setNotificationEventsRequested(array $NotificationEventsRequested)
    {
      $this->NotificationEventsRequested = $NotificationEventsRequested;
      return $this;
    }

    /**
     * @return EMailNotificationFormatType
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param EMailNotificationFormatType $Format
     * @return \FedexApi\Lib\EMailNotificationRecipient
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
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
     * @return \FedexApi\Lib\EMailNotificationRecipient
     */
    public function setLocalization($Localization)
    {
      $this->Localization = $Localization;
      return $this;
    }

}

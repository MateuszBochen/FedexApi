<?php

namespace FedexApi\Lib;

class ShipmentReply
{

    /**
     * @var NotificationSeverityType $HighestSeverity
     */
    protected $HighestSeverity = null;

    /**
     * @var Notification[] $Notifications
     */
    protected $Notifications = null;

    /**
     * @var TransactionDetail $TransactionDetail
     */
    protected $TransactionDetail = null;

    /**
     * @var VersionId $Version
     */
    protected $Version = null;

    /**
     * @param NotificationSeverityType $HighestSeverity
     * @param Notification[] $Notifications
     * @param TransactionDetail $TransactionDetail
     * @param VersionId $Version
     */
    public function __construct($HighestSeverity, array $Notifications, $TransactionDetail, $Version)
    {
      $this->HighestSeverity = $HighestSeverity;
      $this->Notifications = $Notifications;
      $this->TransactionDetail = $TransactionDetail;
      $this->Version = $Version;
    }

    /**
     * @return NotificationSeverityType
     */
    public function getHighestSeverity()
    {
      return $this->HighestSeverity;
    }

    /**
     * @param NotificationSeverityType $HighestSeverity
     * @return \FedexApi\Lib\ShipmentReply
     */
    public function setHighestSeverity($HighestSeverity)
    {
      $this->HighestSeverity = $HighestSeverity;
      return $this;
    }

    /**
     * @return Notification[]
     */
    public function getNotifications()
    {
      return $this->Notifications;
    }

    /**
     * @param Notification[] $Notifications
     * @return \FedexApi\Lib\ShipmentReply
     */
    public function setNotifications(array $Notifications)
    {
      $this->Notifications = $Notifications;
      return $this;
    }

    /**
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
      return $this->TransactionDetail;
    }

    /**
     * @param TransactionDetail $TransactionDetail
     * @return \FedexApi\Lib\ShipmentReply
     */
    public function setTransactionDetail($TransactionDetail)
    {
      $this->TransactionDetail = $TransactionDetail;
      return $this;
    }

    /**
     * @return VersionId
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param VersionId $Version
     * @return \FedexApi\Lib\ShipmentReply
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class ProcessTagReply
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
     * @var CompletedShipmentDetail $CompletedShipmentDetail
     */
    protected $CompletedShipmentDetail = null;

    /**
     * @param NotificationSeverityType $HighestSeverity
     * @param Notification[] $Notifications
     * @param TransactionDetail $TransactionDetail
     * @param VersionId $Version
     * @param CompletedShipmentDetail $CompletedShipmentDetail
     */
    public function __construct($HighestSeverity = null, array $Notifications = null, $TransactionDetail = null, $Version = null, $CompletedShipmentDetail = null)
    {
      $this->HighestSeverity = $HighestSeverity;
      $this->Notifications = $Notifications;
      $this->TransactionDetail = $TransactionDetail;
      $this->Version = $Version;
      $this->CompletedShipmentDetail = $CompletedShipmentDetail;
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
     * @return \FedexApiClass\Lib\ProcessTagReply
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
     * @return \FedexApiClass\Lib\ProcessTagReply
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
     * @return \FedexApiClass\Lib\ProcessTagReply
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
     * @return \FedexApiClass\Lib\ProcessTagReply
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return CompletedShipmentDetail
     */
    public function getCompletedShipmentDetail()
    {
      return $this->CompletedShipmentDetail;
    }

    /**
     * @param CompletedShipmentDetail $CompletedShipmentDetail
     * @return \FedexApiClass\Lib\ProcessTagReply
     */
    public function setCompletedShipmentDetail($CompletedShipmentDetail)
    {
      $this->CompletedShipmentDetail = $CompletedShipmentDetail;
      return $this;
    }

}

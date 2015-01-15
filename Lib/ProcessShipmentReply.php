<?php

namespace FedexApi\Lib;

class ProcessShipmentReply
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
     * @var string $JobId
     */
    protected $JobId = null;

    /**
     * @var CompletedShipmentDetail $CompletedShipmentDetail
     */
    protected $CompletedShipmentDetail = null;

    /**
     * @var ShippingDocument[] $ErrorLabels
     */
    protected $ErrorLabels = null;

    /**
     * @param NotificationSeverityType $HighestSeverity
     * @param Notification[] $Notifications
     * @param TransactionDetail $TransactionDetail
     * @param VersionId $Version
     * @param string $JobId
     * @param CompletedShipmentDetail $CompletedShipmentDetail
     * @param ShippingDocument[] $ErrorLabels
     */
    public function __construct($HighestSeverity, array $Notifications, $TransactionDetail, $Version, $JobId, $CompletedShipmentDetail, array $ErrorLabels)
    {
      $this->HighestSeverity = $HighestSeverity;
      $this->Notifications = $Notifications;
      $this->TransactionDetail = $TransactionDetail;
      $this->Version = $Version;
      $this->JobId = $JobId;
      $this->CompletedShipmentDetail = $CompletedShipmentDetail;
      $this->ErrorLabels = $ErrorLabels;
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
     * @return \FedexApi\Lib\ProcessShipmentReply
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
     * @return \FedexApi\Lib\ProcessShipmentReply
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
     * @return \FedexApi\Lib\ProcessShipmentReply
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
     * @return \FedexApi\Lib\ProcessShipmentReply
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobId()
    {
      return $this->JobId;
    }

    /**
     * @param string $JobId
     * @return \FedexApi\Lib\ProcessShipmentReply
     */
    public function setJobId($JobId)
    {
      $this->JobId = $JobId;
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
     * @return \FedexApi\Lib\ProcessShipmentReply
     */
    public function setCompletedShipmentDetail($CompletedShipmentDetail)
    {
      $this->CompletedShipmentDetail = $CompletedShipmentDetail;
      return $this;
    }

    /**
     * @return ShippingDocument[]
     */
    public function getErrorLabels()
    {
      return $this->ErrorLabels;
    }

    /**
     * @param ShippingDocument[] $ErrorLabels
     * @return \FedexApi\Lib\ProcessShipmentReply
     */
    public function setErrorLabels(array $ErrorLabels)
    {
      $this->ErrorLabels = $ErrorLabels;
      return $this;
    }

}

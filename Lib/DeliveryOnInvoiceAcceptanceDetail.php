<?php

namespace FedexApi\Lib;

class DeliveryOnInvoiceAcceptanceDetail
{

    /**
     * @var Party $Recipient
     */
    protected $Recipient = null;

    /**
     * @var TrackingId $TrackingId
     */
    protected $TrackingId = null;

    /**
     * @param Party $Recipient
     * @param TrackingId $TrackingId
     */
    public function __construct($Recipient, $TrackingId)
    {
      $this->Recipient = $Recipient;
      $this->TrackingId = $TrackingId;
    }

    /**
     * @return Party
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param Party $Recipient
     * @return \FedexApi\Lib\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

    /**
     * @return TrackingId
     */
    public function getTrackingId()
    {
      return $this->TrackingId;
    }

    /**
     * @param TrackingId $TrackingId
     * @return \FedexApi\Lib\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId($TrackingId)
    {
      $this->TrackingId = $TrackingId;
      return $this;
    }

}

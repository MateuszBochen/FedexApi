<?php

namespace FedexApiClass\Lib;

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
    public function __construct($Recipient = null, $TrackingId = null)
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
     * @return \FedexApiClass\Lib\DeliveryOnInvoiceAcceptanceDetail
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
     * @return \FedexApiClass\Lib\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId($TrackingId)
    {
      $this->TrackingId = $TrackingId;
      return $this;
    }

}

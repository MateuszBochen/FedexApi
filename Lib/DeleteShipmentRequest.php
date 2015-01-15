<?php

namespace FedexApiClass\Lib;

class DeleteShipmentRequest
{

    /**
     * @var WebAuthenticationDetail $WebAuthenticationDetail
     */
    protected $WebAuthenticationDetail = null;

    /**
     * @var ClientDetail $ClientDetail
     */
    protected $ClientDetail = null;

    /**
     * @var TransactionDetail $TransactionDetail
     */
    protected $TransactionDetail = null;

    /**
     * @var VersionId $Version
     */
    protected $Version = null;

    /**
     * @var \DateTime $ShipTimestamp
     */
    protected $ShipTimestamp = null;

    /**
     * @var TrackingId $TrackingId
     */
    protected $TrackingId = null;

    /**
     * @var DeletionControlType $DeletionControl
     */
    protected $DeletionControl = null;

    /**
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * @param ClientDetail $ClientDetail
     * @param TransactionDetail $TransactionDetail
     * @param VersionId $Version
     * @param \DateTime $ShipTimestamp
     * @param TrackingId $TrackingId
     * @param DeletionControlType $DeletionControl
     */
    public function __construct($WebAuthenticationDetail = null, $ClientDetail = null, $TransactionDetail = null, $Version = null, \DateTime $ShipTimestamp = null, $TrackingId = null, $DeletionControl = null)
    {
      $this->WebAuthenticationDetail = $WebAuthenticationDetail;
      $this->ClientDetail = $ClientDetail;
      $this->TransactionDetail = $TransactionDetail;
      $this->Version = $Version;
      $this->ShipTimestamp = $ShipTimestamp ? $ShipTimestamp->format(\DateTime::ATOM) : null;
      $this->TrackingId = $TrackingId;
      $this->DeletionControl = $DeletionControl;
    }

    /**
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
      return $this->WebAuthenticationDetail;
    }

    /**
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * @return \FedexApiClass\Lib\DeleteShipmentRequest
     */
    public function setWebAuthenticationDetail($WebAuthenticationDetail)
    {
      $this->WebAuthenticationDetail = $WebAuthenticationDetail;
      return $this;
    }

    /**
     * @return ClientDetail
     */
    public function getClientDetail()
    {
      return $this->ClientDetail;
    }

    /**
     * @param ClientDetail $ClientDetail
     * @return \FedexApiClass\Lib\DeleteShipmentRequest
     */
    public function setClientDetail($ClientDetail)
    {
      $this->ClientDetail = $ClientDetail;
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
     * @return \FedexApiClass\Lib\DeleteShipmentRequest
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
     * @return \FedexApiClass\Lib\DeleteShipmentRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipTimestamp()
    {
      if ($this->ShipTimestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipTimestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipTimestamp
     * @return \FedexApiClass\Lib\DeleteShipmentRequest
     */
    public function setShipTimestamp(\DateTime $ShipTimestamp)
    {
      $this->ShipTimestamp = $ShipTimestamp->format(\DateTime::ATOM);
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
     * @return \FedexApiClass\Lib\DeleteShipmentRequest
     */
    public function setTrackingId($TrackingId)
    {
      $this->TrackingId = $TrackingId;
      return $this;
    }

    /**
     * @return DeletionControlType
     */
    public function getDeletionControl()
    {
      return $this->DeletionControl;
    }

    /**
     * @param DeletionControlType $DeletionControl
     * @return \FedexApiClass\Lib\DeleteShipmentRequest
     */
    public function setDeletionControl($DeletionControl)
    {
      $this->DeletionControl = $DeletionControl;
      return $this;
    }

}

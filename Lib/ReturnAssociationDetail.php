<?php

namespace FedexApiClass\Lib;

class ReturnAssociationDetail
{

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var date $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @param string $TrackingNumber
     * @param date $ShipDate
     */
    public function __construct($TrackingNumber, $ShipDate)
    {
      $this->TrackingNumber = $TrackingNumber;
      $this->ShipDate = $ShipDate;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return \FedexApiClass\Lib\ReturnAssociationDetail
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getShipDate()
    {
      return $this->ShipDate;
    }

    /**
     * @param date $ShipDate
     * @return \FedexApiClass\Lib\ReturnAssociationDetail
     */
    public function setShipDate($ShipDate)
    {
      $this->ShipDate = $ShipDate;
      return $this;
    }

}

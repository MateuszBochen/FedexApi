<?php

namespace FedexApiClass\Lib;

class ExpressFreightDetail
{

    /**
     * @var boolean $PackingListEnclosed
     */
    protected $PackingListEnclosed = null;

    /**
     * @var int $ShippersLoadAndCount
     */
    protected $ShippersLoadAndCount = null;

    /**
     * @var string $BookingConfirmationNumber
     */
    protected $BookingConfirmationNumber = null;

    /**
     * @param boolean $PackingListEnclosed
     * @param int $ShippersLoadAndCount
     * @param string $BookingConfirmationNumber
     */
    public function __construct($PackingListEnclosed = null, $ShippersLoadAndCount = null, $BookingConfirmationNumber = null)
    {
      $this->PackingListEnclosed = $PackingListEnclosed;
      $this->ShippersLoadAndCount = $ShippersLoadAndCount;
      $this->BookingConfirmationNumber = $BookingConfirmationNumber;
    }

    /**
     * @return boolean
     */
    public function getPackingListEnclosed()
    {
      return $this->PackingListEnclosed;
    }

    /**
     * @param boolean $PackingListEnclosed
     * @return \FedexApiClass\Lib\ExpressFreightDetail
     */
    public function setPackingListEnclosed($PackingListEnclosed)
    {
      $this->PackingListEnclosed = $PackingListEnclosed;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippersLoadAndCount()
    {
      return $this->ShippersLoadAndCount;
    }

    /**
     * @param int $ShippersLoadAndCount
     * @return \FedexApiClass\Lib\ExpressFreightDetail
     */
    public function setShippersLoadAndCount($ShippersLoadAndCount)
    {
      $this->ShippersLoadAndCount = $ShippersLoadAndCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingConfirmationNumber()
    {
      return $this->BookingConfirmationNumber;
    }

    /**
     * @param string $BookingConfirmationNumber
     * @return \FedexApiClass\Lib\ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($BookingConfirmationNumber)
    {
      $this->BookingConfirmationNumber = $BookingConfirmationNumber;
      return $this;
    }

}

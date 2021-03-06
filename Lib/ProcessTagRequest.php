<?php

namespace FedexApiClass\Lib;

class ProcessTagRequest
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
     * @var RequestedShipment $RequestedShipment
     */
    protected $RequestedShipment = null;

    /**
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * @param ClientDetail $ClientDetail
     * @param TransactionDetail $TransactionDetail
     * @param VersionId $Version
     * @param RequestedShipment $RequestedShipment
     */
    public function __construct($WebAuthenticationDetail = null, $ClientDetail = null, $TransactionDetail = null, $Version = null, $RequestedShipment = null)
    {
      $this->WebAuthenticationDetail = $WebAuthenticationDetail;
      $this->ClientDetail = $ClientDetail;
      $this->TransactionDetail = $TransactionDetail;
      $this->Version = $Version;
      $this->RequestedShipment = $RequestedShipment;
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
     * @return \FedexApiClass\Lib\ProcessTagRequest
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
     * @return \FedexApiClass\Lib\ProcessTagRequest
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
     * @return \FedexApiClass\Lib\ProcessTagRequest
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
     * @return \FedexApiClass\Lib\ProcessTagRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return RequestedShipment
     */
    public function getRequestedShipment()
    {
      return $this->RequestedShipment;
    }

    /**
     * @param RequestedShipment $RequestedShipment
     * @return \FedexApiClass\Lib\ProcessTagRequest
     */
    public function setRequestedShipment($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
      return $this;
    }

}

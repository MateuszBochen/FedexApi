<?php

namespace FedexApi\Lib;

class ValidateShipmentRequest
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
    public function __construct($WebAuthenticationDetail, $ClientDetail, $TransactionDetail, $Version, $RequestedShipment)
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
     * @return \FedexApi\Lib\ValidateShipmentRequest
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
     * @return \FedexApi\Lib\ValidateShipmentRequest
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
     * @return \FedexApi\Lib\ValidateShipmentRequest
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
     * @return \FedexApi\Lib\ValidateShipmentRequest
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
     * @return \FedexApi\Lib\ValidateShipmentRequest
     */
    public function setRequestedShipment($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class DeleteTagRequest
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
     * @var string $DispatchLocationId
     */
    protected $DispatchLocationId = null;

    /**
     * @var date $DispatchDate
     */
    protected $DispatchDate = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var string $ConfirmationNumber
     */
    protected $ConfirmationNumber = null;

    /**
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * @param ClientDetail $ClientDetail
     * @param TransactionDetail $TransactionDetail
     * @param VersionId $Version
     * @param string $DispatchLocationId
     * @param date $DispatchDate
     * @param Payment $Payment
     * @param string $ConfirmationNumber
     */
    public function __construct($WebAuthenticationDetail, $ClientDetail, $TransactionDetail, $Version, $DispatchLocationId, $DispatchDate, $Payment, $ConfirmationNumber)
    {
      $this->WebAuthenticationDetail = $WebAuthenticationDetail;
      $this->ClientDetail = $ClientDetail;
      $this->TransactionDetail = $TransactionDetail;
      $this->Version = $Version;
      $this->DispatchLocationId = $DispatchLocationId;
      $this->DispatchDate = $DispatchDate;
      $this->Payment = $Payment;
      $this->ConfirmationNumber = $ConfirmationNumber;
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
     * @return \FedexApiClass\Lib\DeleteTagRequest
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
     * @return \FedexApiClass\Lib\DeleteTagRequest
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
     * @return \FedexApiClass\Lib\DeleteTagRequest
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
     * @return \FedexApiClass\Lib\DeleteTagRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getDispatchLocationId()
    {
      return $this->DispatchLocationId;
    }

    /**
     * @param string $DispatchLocationId
     * @return \FedexApiClass\Lib\DeleteTagRequest
     */
    public function setDispatchLocationId($DispatchLocationId)
    {
      $this->DispatchLocationId = $DispatchLocationId;
      return $this;
    }

    /**
     * @return date
     */
    public function getDispatchDate()
    {
      return $this->DispatchDate;
    }

    /**
     * @param date $DispatchDate
     * @return \FedexApiClass\Lib\DeleteTagRequest
     */
    public function setDispatchDate($DispatchDate)
    {
      $this->DispatchDate = $DispatchDate;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FedexApiClass\Lib\DeleteTagRequest
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
      return $this->ConfirmationNumber;
    }

    /**
     * @param string $ConfirmationNumber
     * @return \FedexApiClass\Lib\DeleteTagRequest
     */
    public function setConfirmationNumber($ConfirmationNumber)
    {
      $this->ConfirmationNumber = $ConfirmationNumber;
      return $this;
    }

}

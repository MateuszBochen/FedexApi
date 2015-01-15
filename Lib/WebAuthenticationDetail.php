<?php

namespace FedexApi\Lib;

class WebAuthenticationDetail
{

    /**
     * @var WebAuthenticationCredential $UserCredential
     */
    protected $UserCredential = null;

    /**
     * @param WebAuthenticationCredential $UserCredential
     */
    public function __construct($UserCredential)
    {
      $this->UserCredential = $UserCredential;
    }

    /**
     * @return WebAuthenticationCredential
     */
    public function getUserCredential()
    {
      return $this->UserCredential;
    }

    /**
     * @param WebAuthenticationCredential $UserCredential
     * @return \FedexApi\Lib\WebAuthenticationDetail
     */
    public function setUserCredential($UserCredential)
    {
      $this->UserCredential = $UserCredential;
      return $this;
    }

}

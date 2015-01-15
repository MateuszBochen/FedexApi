<?php

namespace FedexApiClass\Lib;

class WebAuthenticationDetail
{

    /**
     * @var WebAuthenticationCredential $UserCredential
     */
    protected $UserCredential = null;

    /**
     * @param WebAuthenticationCredential $UserCredential
     */
    public function __construct($UserCredential = null)
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
     * @return \FedexApiClass\Lib\WebAuthenticationDetail
     */
    public function setUserCredential($UserCredential)
    {
      $this->UserCredential = $UserCredential;
      return $this;
    }

}

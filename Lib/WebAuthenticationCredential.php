<?php

namespace FedexApiClass\Lib;

class WebAuthenticationCredential
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $Key
     * @param string $Password
     */
    public function __construct($Key = null, $Password = null)
    {
      $this->Key = $Key;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return \FedexApiClass\Lib\WebAuthenticationCredential
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \FedexApiClass\Lib\WebAuthenticationCredential
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}

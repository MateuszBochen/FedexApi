<?php

namespace FedexApiClass\Lib;

class PendingShipmentAccessorDetail
{

    /**
     * @var AccessorRoleType $Role
     */
    protected $Role = null;

    /**
     * @var string $UserId
     */
    protected $UserId = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $EmailLabelUrl
     */
    protected $EmailLabelUrl = null;

    /**
     * @param AccessorRoleType $Role
     * @param string $UserId
     * @param string $Password
     * @param string $EmailLabelUrl
     */
    public function __construct($Role, $UserId, $Password, $EmailLabelUrl)
    {
      $this->Role = $Role;
      $this->UserId = $UserId;
      $this->Password = $Password;
      $this->EmailLabelUrl = $EmailLabelUrl;
    }

    /**
     * @return AccessorRoleType
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param AccessorRoleType $Role
     * @return \FedexApiClass\Lib\PendingShipmentAccessorDetail
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param string $UserId
     * @return \FedexApiClass\Lib\PendingShipmentAccessorDetail
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
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
     * @return \FedexApiClass\Lib\PendingShipmentAccessorDetail
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailLabelUrl()
    {
      return $this->EmailLabelUrl;
    }

    /**
     * @param string $EmailLabelUrl
     * @return \FedexApiClass\Lib\PendingShipmentAccessorDetail
     */
    public function setEmailLabelUrl($EmailLabelUrl)
    {
      $this->EmailLabelUrl = $EmailLabelUrl;
      return $this;
    }

}

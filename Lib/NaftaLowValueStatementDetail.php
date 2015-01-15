<?php

namespace FedexApiClass\Lib;

class NaftaLowValueStatementDetail
{

    /**
     * @var CustomsRoleType $Role
     */
    protected $Role = null;

    /**
     * @param CustomsRoleType $Role
     */
    public function __construct($Role = null)
    {
      $this->Role = $Role;
    }

    /**
     * @return CustomsRoleType
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param CustomsRoleType $Role
     * @return \FedexApiClass\Lib\NaftaLowValueStatementDetail
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

}

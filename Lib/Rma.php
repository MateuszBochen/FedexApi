<?php

namespace FedexApiClass\Lib;

class Rma
{

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @param string $Reason
     */
    public function __construct($Reason)
    {
      $this->Reason = $Reason;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \FedexApiClass\Lib\Rma
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}

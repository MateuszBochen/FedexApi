<?php

namespace FedexApiClass\Lib;

class NotificationParameter
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Id
     * @param string $Value
     */
    public function __construct($Id = null, $Value = null)
    {
      $this->Id = $Id;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \FedexApiClass\Lib\NotificationParameter
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FedexApiClass\Lib\NotificationParameter
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

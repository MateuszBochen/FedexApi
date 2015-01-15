<?php

namespace FedexApiClass\Lib;

class BrokerDetail
{

    /**
     * @var BrokerType $Type
     */
    protected $Type = null;

    /**
     * @var Party $Broker
     */
    protected $Broker = null;

    /**
     * @param BrokerType $Type
     * @param Party $Broker
     */
    public function __construct($Type, $Broker)
    {
      $this->Type = $Type;
      $this->Broker = $Broker;
    }

    /**
     * @return BrokerType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param BrokerType $Type
     * @return \FedexApiClass\Lib\BrokerDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return Party
     */
    public function getBroker()
    {
      return $this->Broker;
    }

    /**
     * @param Party $Broker
     * @return \FedexApiClass\Lib\BrokerDetail
     */
    public function setBroker($Broker)
    {
      $this->Broker = $Broker;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class PendingShipmentProcessingOptionsRequested
{

    /**
     * @var PendingShipmentProcessingOptionType[] $Options
     */
    protected $Options = null;

    /**
     * @param PendingShipmentProcessingOptionType[] $Options
     */
    public function __construct(array $Options = null)
    {
      $this->Options = $Options;
    }

    /**
     * @return PendingShipmentProcessingOptionType[]
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param PendingShipmentProcessingOptionType[] $Options
     * @return \FedexApiClass\Lib\PendingShipmentProcessingOptionsRequested
     */
    public function setOptions(array $Options)
    {
      $this->Options = $Options;
      return $this;
    }

}

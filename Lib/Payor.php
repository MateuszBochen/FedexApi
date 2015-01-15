<?php

namespace FedexApiClass\Lib;

class Payor
{

    /**
     * @var Party $ResponsibleParty
     */
    protected $ResponsibleParty = null;

    /**
     * @param Party $ResponsibleParty
     */
    public function __construct($ResponsibleParty)
    {
      $this->ResponsibleParty = $ResponsibleParty;
    }

    /**
     * @return Party
     */
    public function getResponsibleParty()
    {
      return $this->ResponsibleParty;
    }

    /**
     * @param Party $ResponsibleParty
     * @return \FedexApiClass\Lib\Payor
     */
    public function setResponsibleParty($ResponsibleParty)
    {
      $this->ResponsibleParty = $ResponsibleParty;
      return $this;
    }

}

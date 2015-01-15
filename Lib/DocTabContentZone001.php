<?php

namespace FedexApiClass\Lib;

class DocTabContentZone001
{

    /**
     * @var DocTabZoneSpecification $DocTabZoneSpecifications
     */
    protected $DocTabZoneSpecifications = null;

    /**
     * @param DocTabZoneSpecification $DocTabZoneSpecifications
     */
    public function __construct($DocTabZoneSpecifications)
    {
      $this->DocTabZoneSpecifications = $DocTabZoneSpecifications;
    }

    /**
     * @return DocTabZoneSpecification
     */
    public function getDocTabZoneSpecifications()
    {
      return $this->DocTabZoneSpecifications;
    }

    /**
     * @param DocTabZoneSpecification $DocTabZoneSpecifications
     * @return \FedexApiClass\Lib\DocTabContentZone001
     */
    public function setDocTabZoneSpecifications($DocTabZoneSpecifications)
    {
      $this->DocTabZoneSpecifications = $DocTabZoneSpecifications;
      return $this;
    }

}

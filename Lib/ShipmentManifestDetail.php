<?php

namespace FedexApiClass\Lib;

class ShipmentManifestDetail
{

    /**
     * @var CustomerReferenceType $ManifestReferenceType
     */
    protected $ManifestReferenceType = null;

    /**
     * @param CustomerReferenceType $ManifestReferenceType
     */
    public function __construct($ManifestReferenceType)
    {
      $this->ManifestReferenceType = $ManifestReferenceType;
    }

    /**
     * @return CustomerReferenceType
     */
    public function getManifestReferenceType()
    {
      return $this->ManifestReferenceType;
    }

    /**
     * @param CustomerReferenceType $ManifestReferenceType
     * @return \FedexApiClass\Lib\ShipmentManifestDetail
     */
    public function setManifestReferenceType($ManifestReferenceType)
    {
      $this->ManifestReferenceType = $ManifestReferenceType;
      return $this;
    }

}

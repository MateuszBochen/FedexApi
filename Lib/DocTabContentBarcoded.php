<?php

namespace FedexApiClass\Lib;

class DocTabContentBarcoded
{

    /**
     * @var BarcodeSymbologyType $Symbology
     */
    protected $Symbology = null;

    /**
     * @var DocTabZoneSpecification $Specification
     */
    protected $Specification = null;

    /**
     * @param BarcodeSymbologyType $Symbology
     * @param DocTabZoneSpecification $Specification
     */
    public function __construct($Symbology = null, $Specification = null)
    {
      $this->Symbology = $Symbology;
      $this->Specification = $Specification;
    }

    /**
     * @return BarcodeSymbologyType
     */
    public function getSymbology()
    {
      return $this->Symbology;
    }

    /**
     * @param BarcodeSymbologyType $Symbology
     * @return \FedexApiClass\Lib\DocTabContentBarcoded
     */
    public function setSymbology($Symbology)
    {
      $this->Symbology = $Symbology;
      return $this;
    }

    /**
     * @return DocTabZoneSpecification
     */
    public function getSpecification()
    {
      return $this->Specification;
    }

    /**
     * @param DocTabZoneSpecification $Specification
     * @return \FedexApiClass\Lib\DocTabContentBarcoded
     */
    public function setSpecification($Specification)
    {
      $this->Specification = $Specification;
      return $this;
    }

}

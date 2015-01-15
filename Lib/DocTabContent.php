<?php

namespace FedexApiClass\Lib;

class DocTabContent
{

    /**
     * @var DocTabContentType $DocTabContentType
     */
    protected $DocTabContentType = null;

    /**
     * @var DocTabContentZone001 $Zone001
     */
    protected $Zone001 = null;

    /**
     * @var DocTabContentBarcoded $Barcoded
     */
    protected $Barcoded = null;

    /**
     * @param DocTabContentType $DocTabContentType
     * @param DocTabContentZone001 $Zone001
     * @param DocTabContentBarcoded $Barcoded
     */
    public function __construct($DocTabContentType = null, $Zone001 = null, $Barcoded = null)
    {
      $this->DocTabContentType = $DocTabContentType;
      $this->Zone001 = $Zone001;
      $this->Barcoded = $Barcoded;
    }

    /**
     * @return DocTabContentType
     */
    public function getDocTabContentType()
    {
      return $this->DocTabContentType;
    }

    /**
     * @param DocTabContentType $DocTabContentType
     * @return \FedexApiClass\Lib\DocTabContent
     */
    public function setDocTabContentType($DocTabContentType)
    {
      $this->DocTabContentType = $DocTabContentType;
      return $this;
    }

    /**
     * @return DocTabContentZone001
     */
    public function getZone001()
    {
      return $this->Zone001;
    }

    /**
     * @param DocTabContentZone001 $Zone001
     * @return \FedexApiClass\Lib\DocTabContent
     */
    public function setZone001($Zone001)
    {
      $this->Zone001 = $Zone001;
      return $this;
    }

    /**
     * @return DocTabContentBarcoded
     */
    public function getBarcoded()
    {
      return $this->Barcoded;
    }

    /**
     * @param DocTabContentBarcoded $Barcoded
     * @return \FedexApiClass\Lib\DocTabContent
     */
    public function setBarcoded($Barcoded)
    {
      $this->Barcoded = $Barcoded;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class FreightGuaranteeDetail
{

    /**
     * @var FreightGuaranteeType $Type
     */
    protected $Type = null;

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @param FreightGuaranteeType $Type
     * @param date $Date
     */
    public function __construct($Type = null, $Date = null)
    {
      $this->Type = $Type;
      $this->Date = $Date;
    }

    /**
     * @return FreightGuaranteeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param FreightGuaranteeType $Type
     * @return \FedexApiClass\Lib\FreightGuaranteeDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return \FedexApiClass\Lib\FreightGuaranteeDetail
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

}

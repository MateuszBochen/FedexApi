<?php

namespace FedexApi\Lib;

class PrintedReference
{

    /**
     * @var PrintedReferenceType $Type
     */
    protected $Type = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param PrintedReferenceType $Type
     * @param string $Value
     */
    public function __construct($Type, $Value)
    {
      $this->Type = $Type;
      $this->Value = $Value;
    }

    /**
     * @return PrintedReferenceType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PrintedReferenceType $Type
     * @return \FedexApi\Lib\PrintedReference
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FedexApi\Lib\PrintedReference
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

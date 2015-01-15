<?php

namespace FedexApi\Lib;

class RecipientCustomsId
{

    /**
     * @var RecipientCustomsIdType $Type
     */
    protected $Type = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param RecipientCustomsIdType $Type
     * @param string $Value
     */
    public function __construct($Type, $Value)
    {
      $this->Type = $Type;
      $this->Value = $Value;
    }

    /**
     * @return RecipientCustomsIdType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param RecipientCustomsIdType $Type
     * @return \FedexApi\Lib\RecipientCustomsId
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
     * @return \FedexApi\Lib\RecipientCustomsId
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

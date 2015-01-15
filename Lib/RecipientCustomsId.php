<?php

namespace FedexApiClass\Lib;

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
    public function __construct($Type = null, $Value = null)
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
     * @return \FedexApiClass\Lib\RecipientCustomsId
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
     * @return \FedexApiClass\Lib\RecipientCustomsId
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

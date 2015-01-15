<?php

namespace FedexApiClass\Lib;

class CustomsOptionDetail
{

    /**
     * @var CustomsOptionType $Type
     */
    protected $Type = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param CustomsOptionType $Type
     * @param string $Description
     */
    public function __construct($Type, $Description)
    {
      $this->Type = $Type;
      $this->Description = $Description;
    }

    /**
     * @return CustomsOptionType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CustomsOptionType $Type
     * @return \FedexApiClass\Lib\CustomsOptionDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FedexApiClass\Lib\CustomsOptionDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}

<?php

namespace FedexApiClass\Lib;

class FreightRateNotation
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param string $Code
     * @param string $Description
     */
    public function __construct($Code, $Description)
    {
      $this->Code = $Code;
      $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FedexApiClass\Lib\FreightRateNotation
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \FedexApiClass\Lib\FreightRateNotation
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}

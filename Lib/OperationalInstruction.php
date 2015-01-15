<?php

namespace FedexApiClass\Lib;

class OperationalInstruction
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @param int $Number
     * @param string $Content
     */
    public function __construct($Number, $Content)
    {
      $this->Number = $Number;
      $this->Content = $Content;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \FedexApiClass\Lib\OperationalInstruction
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \FedexApiClass\Lib\OperationalInstruction
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}

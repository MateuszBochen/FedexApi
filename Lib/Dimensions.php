<?php

namespace FedexApi\Lib;

class Dimensions
{

    /**
     * @var int $Length
     */
    protected $Length = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var LinearUnits $Units
     */
    protected $Units = null;

    /**
     * @param int $Length
     * @param int $Width
     * @param int $Height
     * @param LinearUnits $Units
     */
    public function __construct($Length, $Width, $Height, $Units)
    {
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
      $this->Units = $Units;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param int $Length
     * @return \FedexApi\Lib\Dimensions
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \FedexApi\Lib\Dimensions
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \FedexApi\Lib\Dimensions
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return LinearUnits
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param LinearUnits $Units
     * @return \FedexApi\Lib\Dimensions
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

}

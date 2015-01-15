<?php

namespace FedexApiClass\Lib;

class CustomLabelPosition
{

    /**
     * @var int $X
     */
    protected $X = null;

    /**
     * @var int $Y
     */
    protected $Y = null;

    /**
     * @param int $X
     * @param int $Y
     */
    public function __construct($X, $Y)
    {
      $this->X = $X;
      $this->Y = $Y;
    }

    /**
     * @return int
     */
    public function getX()
    {
      return $this->X;
    }

    /**
     * @param int $X
     * @return \FedexApiClass\Lib\CustomLabelPosition
     */
    public function setX($X)
    {
      $this->X = $X;
      return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
      return $this->Y;
    }

    /**
     * @param int $Y
     * @return \FedexApiClass\Lib\CustomLabelPosition
     */
    public function setY($Y)
    {
      $this->Y = $Y;
      return $this;
    }

}

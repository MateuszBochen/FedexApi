<?php

namespace FedexApi\Lib;

class CustomLabelBoxEntry
{

    /**
     * @var CustomLabelPosition $TopLeftCorner
     */
    protected $TopLeftCorner = null;

    /**
     * @var CustomLabelPosition $BottomRightCorner
     */
    protected $BottomRightCorner = null;

    /**
     * @param CustomLabelPosition $TopLeftCorner
     * @param CustomLabelPosition $BottomRightCorner
     */
    public function __construct($TopLeftCorner, $BottomRightCorner)
    {
      $this->TopLeftCorner = $TopLeftCorner;
      $this->BottomRightCorner = $BottomRightCorner;
    }

    /**
     * @return CustomLabelPosition
     */
    public function getTopLeftCorner()
    {
      return $this->TopLeftCorner;
    }

    /**
     * @param CustomLabelPosition $TopLeftCorner
     * @return \FedexApi\Lib\CustomLabelBoxEntry
     */
    public function setTopLeftCorner($TopLeftCorner)
    {
      $this->TopLeftCorner = $TopLeftCorner;
      return $this;
    }

    /**
     * @return CustomLabelPosition
     */
    public function getBottomRightCorner()
    {
      return $this->BottomRightCorner;
    }

    /**
     * @param CustomLabelPosition $BottomRightCorner
     * @return \FedexApi\Lib\CustomLabelBoxEntry
     */
    public function setBottomRightCorner($BottomRightCorner)
    {
      $this->BottomRightCorner = $BottomRightCorner;
      return $this;
    }

}

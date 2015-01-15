<?php

namespace FedexApiClass\Lib;

class CustomLabelGraphicEntry
{

    /**
     * @var CustomLabelPosition $Position
     */
    protected $Position = null;

    /**
     * @var string $PrinterGraphicId
     */
    protected $PrinterGraphicId = null;

    /**
     * @var string $FileGraphicFullName
     */
    protected $FileGraphicFullName = null;

    /**
     * @param CustomLabelPosition $Position
     * @param string $PrinterGraphicId
     * @param string $FileGraphicFullName
     */
    public function __construct($Position, $PrinterGraphicId, $FileGraphicFullName)
    {
      $this->Position = $Position;
      $this->PrinterGraphicId = $PrinterGraphicId;
      $this->FileGraphicFullName = $FileGraphicFullName;
    }

    /**
     * @return CustomLabelPosition
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param CustomLabelPosition $Position
     * @return \FedexApiClass\Lib\CustomLabelGraphicEntry
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrinterGraphicId()
    {
      return $this->PrinterGraphicId;
    }

    /**
     * @param string $PrinterGraphicId
     * @return \FedexApiClass\Lib\CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($PrinterGraphicId)
    {
      $this->PrinterGraphicId = $PrinterGraphicId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileGraphicFullName()
    {
      return $this->FileGraphicFullName;
    }

    /**
     * @param string $FileGraphicFullName
     * @return \FedexApiClass\Lib\CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($FileGraphicFullName)
    {
      $this->FileGraphicFullName = $FileGraphicFullName;
      return $this;
    }

}

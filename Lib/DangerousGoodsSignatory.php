<?php

namespace FedexApiClass\Lib;

class DangerousGoodsSignatory
{

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Place
     */
    protected $Place = null;

    /**
     * @param string $ContactName
     * @param string $Title
     * @param string $Place
     */
    public function __construct($ContactName = null, $Title = null, $Place = null)
    {
      $this->ContactName = $ContactName;
      $this->Title = $Title;
      $this->Place = $Place;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
      return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return \FedexApiClass\Lib\DangerousGoodsSignatory
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \FedexApiClass\Lib\DangerousGoodsSignatory
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
      return $this->Place;
    }

    /**
     * @param string $Place
     * @return \FedexApiClass\Lib\DangerousGoodsSignatory
     */
    public function setPlace($Place)
    {
      $this->Place = $Place;
      return $this;
    }

}

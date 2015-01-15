<?php

namespace FedexApiClass\Lib;

class EdtExciseCondition
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Category
     * @param string $Value
     */
    public function __construct($Category, $Value)
    {
      $this->Category = $Category;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FedexApiClass\Lib\EdtExciseCondition
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
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
     * @return \FedexApiClass\Lib\EdtExciseCondition
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

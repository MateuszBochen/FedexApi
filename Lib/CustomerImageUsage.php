<?php

namespace FedexApiClass\Lib;

class CustomerImageUsage
{

    /**
     * @var CustomerImageUsageType $Type
     */
    protected $Type = null;

    /**
     * @var ImageId $Id
     */
    protected $Id = null;

    /**
     * @param CustomerImageUsageType $Type
     * @param ImageId $Id
     */
    public function __construct($Type, $Id)
    {
      $this->Type = $Type;
      $this->Id = $Id;
    }

    /**
     * @return CustomerImageUsageType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CustomerImageUsageType $Type
     * @return \FedexApiClass\Lib\CustomerImageUsage
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return ImageId
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param ImageId $Id
     * @return \FedexApiClass\Lib\CustomerImageUsage
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}

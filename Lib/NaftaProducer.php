<?php

namespace FedexApiClass\Lib;

class NaftaProducer
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var Party $Producer
     */
    protected $Producer = null;

    /**
     * @param string $Id
     * @param Party $Producer
     */
    public function __construct($Id, $Producer)
    {
      $this->Id = $Id;
      $this->Producer = $Producer;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \FedexApiClass\Lib\NaftaProducer
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return Party
     */
    public function getProducer()
    {
      return $this->Producer;
    }

    /**
     * @param Party $Producer
     * @return \FedexApiClass\Lib\NaftaProducer
     */
    public function setProducer($Producer)
    {
      $this->Producer = $Producer;
      return $this;
    }

}

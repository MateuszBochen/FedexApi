<?php

namespace FedexApiClass\Lib;

class AdditionalLabelsDetail
{

    /**
     * @var AdditionalLabelsType $Type
     */
    protected $Type = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @param AdditionalLabelsType $Type
     * @param int $Count
     */
    public function __construct($Type, $Count)
    {
      $this->Type = $Type;
      $this->Count = $Count;
    }

    /**
     * @return AdditionalLabelsType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param AdditionalLabelsType $Type
     * @return \FedexApiClass\Lib\AdditionalLabelsDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \FedexApiClass\Lib\AdditionalLabelsDetail
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

}

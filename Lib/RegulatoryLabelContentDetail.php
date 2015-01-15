<?php

namespace FedexApiClass\Lib;

class RegulatoryLabelContentDetail
{

    /**
     * @var RegulatoryLabelType $Type
     */
    protected $Type = null;

    /**
     * @var CustomerSpecifiedLabelGenerationOptionType[] $GenerationOptions
     */
    protected $GenerationOptions = null;

    /**
     * @param RegulatoryLabelType $Type
     * @param CustomerSpecifiedLabelGenerationOptionType[] $GenerationOptions
     */
    public function __construct($Type, array $GenerationOptions)
    {
      $this->Type = $Type;
      $this->GenerationOptions = $GenerationOptions;
    }

    /**
     * @return RegulatoryLabelType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param RegulatoryLabelType $Type
     * @return \FedexApiClass\Lib\RegulatoryLabelContentDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return CustomerSpecifiedLabelGenerationOptionType[]
     */
    public function getGenerationOptions()
    {
      return $this->GenerationOptions;
    }

    /**
     * @param CustomerSpecifiedLabelGenerationOptionType[] $GenerationOptions
     * @return \FedexApiClass\Lib\RegulatoryLabelContentDetail
     */
    public function setGenerationOptions(array $GenerationOptions)
    {
      $this->GenerationOptions = $GenerationOptions;
      return $this;
    }

}

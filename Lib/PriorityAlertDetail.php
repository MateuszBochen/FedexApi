<?php

namespace FedexApi\Lib;

class PriorityAlertDetail
{

    /**
     * @var PriorityAlertEnhancementType[] $EnhancementTypes
     */
    protected $EnhancementTypes = null;

    /**
     * @var string[] $Content
     */
    protected $Content = null;

    /**
     * @param PriorityAlertEnhancementType[] $EnhancementTypes
     * @param string[] $Content
     */
    public function __construct(array $EnhancementTypes, array $Content)
    {
      $this->EnhancementTypes = $EnhancementTypes;
      $this->Content = $Content;
    }

    /**
     * @return PriorityAlertEnhancementType[]
     */
    public function getEnhancementTypes()
    {
      return $this->EnhancementTypes;
    }

    /**
     * @param PriorityAlertEnhancementType[] $EnhancementTypes
     * @return \FedexApi\Lib\PriorityAlertDetail
     */
    public function setEnhancementTypes(array $EnhancementTypes)
    {
      $this->EnhancementTypes = $EnhancementTypes;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string[] $Content
     * @return \FedexApi\Lib\PriorityAlertDetail
     */
    public function setContent(array $Content)
    {
      $this->Content = $Content;
      return $this;
    }

}

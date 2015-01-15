<?php

namespace FedexApiClass\Lib;

class RecommendedDocumentSpecification
{

    /**
     * @var RecommendedDocumentType[] $Types
     */
    protected $Types = null;

    /**
     * @param RecommendedDocumentType[] $Types
     */
    public function __construct(array $Types = null)
    {
      $this->Types = $Types;
    }

    /**
     * @return RecommendedDocumentType[]
     */
    public function getTypes()
    {
      return $this->Types;
    }

    /**
     * @param RecommendedDocumentType[] $Types
     * @return \FedexApiClass\Lib\RecommendedDocumentSpecification
     */
    public function setTypes(array $Types)
    {
      $this->Types = $Types;
      return $this;
    }

}

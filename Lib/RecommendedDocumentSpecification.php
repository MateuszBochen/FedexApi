<?php

namespace FedexApi\Lib;

class RecommendedDocumentSpecification
{

    /**
     * @var RecommendedDocumentType[] $Types
     */
    protected $Types = null;

    /**
     * @param RecommendedDocumentType[] $Types
     */
    public function __construct(array $Types)
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
     * @return \FedexApi\Lib\RecommendedDocumentSpecification
     */
    public function setTypes(array $Types)
    {
      $this->Types = $Types;
      return $this;
    }

}

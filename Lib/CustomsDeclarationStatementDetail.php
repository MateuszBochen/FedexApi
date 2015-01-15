<?php

namespace FedexApi\Lib;

class CustomsDeclarationStatementDetail
{

    /**
     * @var CustomsDeclarationStatementType[] $Types
     */
    protected $Types = null;

    /**
     * @var NaftaLowValueStatementDetail $NaftaLowValueStatementDetail
     */
    protected $NaftaLowValueStatementDetail = null;

    /**
     * @param CustomsDeclarationStatementType[] $Types
     * @param NaftaLowValueStatementDetail $NaftaLowValueStatementDetail
     */
    public function __construct(array $Types, $NaftaLowValueStatementDetail)
    {
      $this->Types = $Types;
      $this->NaftaLowValueStatementDetail = $NaftaLowValueStatementDetail;
    }

    /**
     * @return CustomsDeclarationStatementType[]
     */
    public function getTypes()
    {
      return $this->Types;
    }

    /**
     * @param CustomsDeclarationStatementType[] $Types
     * @return \FedexApi\Lib\CustomsDeclarationStatementDetail
     */
    public function setTypes(array $Types)
    {
      $this->Types = $Types;
      return $this;
    }

    /**
     * @return NaftaLowValueStatementDetail
     */
    public function getNaftaLowValueStatementDetail()
    {
      return $this->NaftaLowValueStatementDetail;
    }

    /**
     * @param NaftaLowValueStatementDetail $NaftaLowValueStatementDetail
     * @return \FedexApi\Lib\CustomsDeclarationStatementDetail
     */
    public function setNaftaLowValueStatementDetail($NaftaLowValueStatementDetail)
    {
      $this->NaftaLowValueStatementDetail = $NaftaLowValueStatementDetail;
      return $this;
    }

}

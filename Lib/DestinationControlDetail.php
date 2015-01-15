<?php

namespace FedexApiClass\Lib;

class DestinationControlDetail
{

    /**
     * @var DestinationControlStatementType[] $StatementTypes
     */
    protected $StatementTypes = null;

    /**
     * @var string $DestinationCountries
     */
    protected $DestinationCountries = null;

    /**
     * @var string $EndUser
     */
    protected $EndUser = null;

    /**
     * @param DestinationControlStatementType[] $StatementTypes
     * @param string $DestinationCountries
     * @param string $EndUser
     */
    public function __construct(array $StatementTypes = null, $DestinationCountries = null, $EndUser = null)
    {
      $this->StatementTypes = $StatementTypes;
      $this->DestinationCountries = $DestinationCountries;
      $this->EndUser = $EndUser;
    }

    /**
     * @return DestinationControlStatementType[]
     */
    public function getStatementTypes()
    {
      return $this->StatementTypes;
    }

    /**
     * @param DestinationControlStatementType[] $StatementTypes
     * @return \FedexApiClass\Lib\DestinationControlDetail
     */
    public function setStatementTypes(array $StatementTypes)
    {
      $this->StatementTypes = $StatementTypes;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCountries()
    {
      return $this->DestinationCountries;
    }

    /**
     * @param string $DestinationCountries
     * @return \FedexApiClass\Lib\DestinationControlDetail
     */
    public function setDestinationCountries($DestinationCountries)
    {
      $this->DestinationCountries = $DestinationCountries;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndUser()
    {
      return $this->EndUser;
    }

    /**
     * @param string $EndUser
     * @return \FedexApiClass\Lib\DestinationControlDetail
     */
    public function setEndUser($EndUser)
    {
      $this->EndUser = $EndUser;
      return $this;
    }

}

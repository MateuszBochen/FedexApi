<?php

namespace FedexApi\Lib;

class VersionId
{

    /**
     * @var string $ServiceId
     */
    protected $ServiceId = null;

    /**
     * @var int $Major
     */
    protected $Major = null;

    /**
     * @var int $Intermediate
     */
    protected $Intermediate = null;

    /**
     * @var int $Minor
     */
    protected $Minor = null;

    /**
     * @param string $ServiceId
     * @param int $Major
     * @param int $Intermediate
     * @param int $Minor
     */
    public function __construct($ServiceId, $Major, $Intermediate, $Minor)
    {
      $this->ServiceId = $ServiceId;
      $this->Major = $Major;
      $this->Intermediate = $Intermediate;
      $this->Minor = $Minor;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
      return $this->ServiceId;
    }

    /**
     * @param string $ServiceId
     * @return \FedexApi\Lib\VersionId
     */
    public function setServiceId($ServiceId)
    {
      $this->ServiceId = $ServiceId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMajor()
    {
      return $this->Major;
    }

    /**
     * @param int $Major
     * @return \FedexApi\Lib\VersionId
     */
    public function setMajor($Major)
    {
      $this->Major = $Major;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntermediate()
    {
      return $this->Intermediate;
    }

    /**
     * @param int $Intermediate
     * @return \FedexApi\Lib\VersionId
     */
    public function setIntermediate($Intermediate)
    {
      $this->Intermediate = $Intermediate;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinor()
    {
      return $this->Minor;
    }

    /**
     * @param int $Minor
     * @return \FedexApi\Lib\VersionId
     */
    public function setMinor($Minor)
    {
      $this->Minor = $Minor;
      return $this;
    }

}

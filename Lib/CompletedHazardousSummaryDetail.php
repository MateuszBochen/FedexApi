<?php

namespace FedexApiClass\Lib;

class CompletedHazardousSummaryDetail
{

    /**
     * @var int $SmallQuantityExceptionPackageCount
     */
    protected $SmallQuantityExceptionPackageCount = null;

    /**
     * @param int $SmallQuantityExceptionPackageCount
     */
    public function __construct($SmallQuantityExceptionPackageCount = null)
    {
      $this->SmallQuantityExceptionPackageCount = $SmallQuantityExceptionPackageCount;
    }

    /**
     * @return int
     */
    public function getSmallQuantityExceptionPackageCount()
    {
      return $this->SmallQuantityExceptionPackageCount;
    }

    /**
     * @param int $SmallQuantityExceptionPackageCount
     * @return \FedexApiClass\Lib\CompletedHazardousSummaryDetail
     */
    public function setSmallQuantityExceptionPackageCount($SmallQuantityExceptionPackageCount)
    {
      $this->SmallQuantityExceptionPackageCount = $SmallQuantityExceptionPackageCount;
      return $this;
    }

}

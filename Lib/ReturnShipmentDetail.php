<?php

namespace FedexApiClass\Lib;

class ReturnShipmentDetail
{

    /**
     * @var ReturnType $ReturnType
     */
    protected $ReturnType = null;

    /**
     * @var Rma $Rma
     */
    protected $Rma = null;

    /**
     * @var ReturnEMailDetail $ReturnEMailDetail
     */
    protected $ReturnEMailDetail = null;

    /**
     * @var ReturnAssociationDetail $ReturnAssociation
     */
    protected $ReturnAssociation = null;

    /**
     * @param ReturnType $ReturnType
     * @param Rma $Rma
     * @param ReturnEMailDetail $ReturnEMailDetail
     * @param ReturnAssociationDetail $ReturnAssociation
     */
    public function __construct($ReturnType = null, $Rma = null, $ReturnEMailDetail = null, $ReturnAssociation = null)
    {
      $this->ReturnType = $ReturnType;
      $this->Rma = $Rma;
      $this->ReturnEMailDetail = $ReturnEMailDetail;
      $this->ReturnAssociation = $ReturnAssociation;
    }

    /**
     * @return ReturnType
     */
    public function getReturnType()
    {
      return $this->ReturnType;
    }

    /**
     * @param ReturnType $ReturnType
     * @return \FedexApiClass\Lib\ReturnShipmentDetail
     */
    public function setReturnType($ReturnType)
    {
      $this->ReturnType = $ReturnType;
      return $this;
    }

    /**
     * @return Rma
     */
    public function getRma()
    {
      return $this->Rma;
    }

    /**
     * @param Rma $Rma
     * @return \FedexApiClass\Lib\ReturnShipmentDetail
     */
    public function setRma($Rma)
    {
      $this->Rma = $Rma;
      return $this;
    }

    /**
     * @return ReturnEMailDetail
     */
    public function getReturnEMailDetail()
    {
      return $this->ReturnEMailDetail;
    }

    /**
     * @param ReturnEMailDetail $ReturnEMailDetail
     * @return \FedexApiClass\Lib\ReturnShipmentDetail
     */
    public function setReturnEMailDetail($ReturnEMailDetail)
    {
      $this->ReturnEMailDetail = $ReturnEMailDetail;
      return $this;
    }

    /**
     * @return ReturnAssociationDetail
     */
    public function getReturnAssociation()
    {
      return $this->ReturnAssociation;
    }

    /**
     * @param ReturnAssociationDetail $ReturnAssociation
     * @return \FedexApiClass\Lib\ReturnShipmentDetail
     */
    public function setReturnAssociation($ReturnAssociation)
    {
      $this->ReturnAssociation = $ReturnAssociation;
      return $this;
    }

}

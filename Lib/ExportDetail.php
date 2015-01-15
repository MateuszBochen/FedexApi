<?php

namespace FedexApiClass\Lib;

class ExportDetail
{

    /**
     * @var B13AFilingOptionType $B13AFilingOption
     */
    protected $B13AFilingOption = null;

    /**
     * @var string $ExportComplianceStatement
     */
    protected $ExportComplianceStatement = null;

    /**
     * @var string $PermitNumber
     */
    protected $PermitNumber = null;

    /**
     * @var DestinationControlDetail $DestinationControlDetail
     */
    protected $DestinationControlDetail = null;

    /**
     * @param B13AFilingOptionType $B13AFilingOption
     * @param string $ExportComplianceStatement
     * @param string $PermitNumber
     * @param DestinationControlDetail $DestinationControlDetail
     */
    public function __construct($B13AFilingOption = null, $ExportComplianceStatement = null, $PermitNumber = null, $DestinationControlDetail = null)
    {
      $this->B13AFilingOption = $B13AFilingOption;
      $this->ExportComplianceStatement = $ExportComplianceStatement;
      $this->PermitNumber = $PermitNumber;
      $this->DestinationControlDetail = $DestinationControlDetail;
    }

    /**
     * @return B13AFilingOptionType
     */
    public function getB13AFilingOption()
    {
      return $this->B13AFilingOption;
    }

    /**
     * @param B13AFilingOptionType $B13AFilingOption
     * @return \FedexApiClass\Lib\ExportDetail
     */
    public function setB13AFilingOption($B13AFilingOption)
    {
      $this->B13AFilingOption = $B13AFilingOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportComplianceStatement()
    {
      return $this->ExportComplianceStatement;
    }

    /**
     * @param string $ExportComplianceStatement
     * @return \FedexApiClass\Lib\ExportDetail
     */
    public function setExportComplianceStatement($ExportComplianceStatement)
    {
      $this->ExportComplianceStatement = $ExportComplianceStatement;
      return $this;
    }

    /**
     * @return string
     */
    public function getPermitNumber()
    {
      return $this->PermitNumber;
    }

    /**
     * @param string $PermitNumber
     * @return \FedexApiClass\Lib\ExportDetail
     */
    public function setPermitNumber($PermitNumber)
    {
      $this->PermitNumber = $PermitNumber;
      return $this;
    }

    /**
     * @return DestinationControlDetail
     */
    public function getDestinationControlDetail()
    {
      return $this->DestinationControlDetail;
    }

    /**
     * @param DestinationControlDetail $DestinationControlDetail
     * @return \FedexApiClass\Lib\ExportDetail
     */
    public function setDestinationControlDetail($DestinationControlDetail)
    {
      $this->DestinationControlDetail = $DestinationControlDetail;
      return $this;
    }

}

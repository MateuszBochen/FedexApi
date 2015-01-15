<?php

namespace FedexApiClass\Lib;

class PackageOperationalDetail
{

    /**
     * @var string $AstraHandlingText
     */
    protected $AstraHandlingText = null;

    /**
     * @var OperationalInstruction[] $OperationalInstructions
     */
    protected $OperationalInstructions = null;

    /**
     * @var PackageBarcodes $Barcodes
     */
    protected $Barcodes = null;

    /**
     * @var string $GroundServiceCode
     */
    protected $GroundServiceCode = null;

    /**
     * @param string $AstraHandlingText
     * @param OperationalInstruction[] $OperationalInstructions
     * @param PackageBarcodes $Barcodes
     * @param string $GroundServiceCode
     */
    public function __construct($AstraHandlingText, array $OperationalInstructions, $Barcodes, $GroundServiceCode)
    {
      $this->AstraHandlingText = $AstraHandlingText;
      $this->OperationalInstructions = $OperationalInstructions;
      $this->Barcodes = $Barcodes;
      $this->GroundServiceCode = $GroundServiceCode;
    }

    /**
     * @return string
     */
    public function getAstraHandlingText()
    {
      return $this->AstraHandlingText;
    }

    /**
     * @param string $AstraHandlingText
     * @return \FedexApiClass\Lib\PackageOperationalDetail
     */
    public function setAstraHandlingText($AstraHandlingText)
    {
      $this->AstraHandlingText = $AstraHandlingText;
      return $this;
    }

    /**
     * @return OperationalInstruction[]
     */
    public function getOperationalInstructions()
    {
      return $this->OperationalInstructions;
    }

    /**
     * @param OperationalInstruction[] $OperationalInstructions
     * @return \FedexApiClass\Lib\PackageOperationalDetail
     */
    public function setOperationalInstructions(array $OperationalInstructions)
    {
      $this->OperationalInstructions = $OperationalInstructions;
      return $this;
    }

    /**
     * @return PackageBarcodes
     */
    public function getBarcodes()
    {
      return $this->Barcodes;
    }

    /**
     * @param PackageBarcodes $Barcodes
     * @return \FedexApiClass\Lib\PackageOperationalDetail
     */
    public function setBarcodes($Barcodes)
    {
      $this->Barcodes = $Barcodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroundServiceCode()
    {
      return $this->GroundServiceCode;
    }

    /**
     * @param string $GroundServiceCode
     * @return \FedexApiClass\Lib\PackageOperationalDetail
     */
    public function setGroundServiceCode($GroundServiceCode)
    {
      $this->GroundServiceCode = $GroundServiceCode;
      return $this;
    }

}

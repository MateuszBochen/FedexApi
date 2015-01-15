<?php

namespace FedexApi\Lib;

class SignatureOptionDetail
{

    /**
     * @var SignatureOptionType $OptionType
     */
    protected $OptionType = null;

    /**
     * @var string $SignatureReleaseNumber
     */
    protected $SignatureReleaseNumber = null;

    /**
     * @param SignatureOptionType $OptionType
     * @param string $SignatureReleaseNumber
     */
    public function __construct($OptionType, $SignatureReleaseNumber)
    {
      $this->OptionType = $OptionType;
      $this->SignatureReleaseNumber = $SignatureReleaseNumber;
    }

    /**
     * @return SignatureOptionType
     */
    public function getOptionType()
    {
      return $this->OptionType;
    }

    /**
     * @param SignatureOptionType $OptionType
     * @return \FedexApi\Lib\SignatureOptionDetail
     */
    public function setOptionType($OptionType)
    {
      $this->OptionType = $OptionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatureReleaseNumber()
    {
      return $this->SignatureReleaseNumber;
    }

    /**
     * @param string $SignatureReleaseNumber
     * @return \FedexApi\Lib\SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($SignatureReleaseNumber)
    {
      $this->SignatureReleaseNumber = $SignatureReleaseNumber;
      return $this;
    }

}

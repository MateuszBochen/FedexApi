<?php

namespace FedexApiClass\Lib;

class AlcoholDetail
{

    /**
     * @var AlcoholRecipientType $RecipientType
     */
    protected $RecipientType = null;

    /**
     * @param AlcoholRecipientType $RecipientType
     */
    public function __construct($RecipientType = null)
    {
      $this->RecipientType = $RecipientType;
    }

    /**
     * @return AlcoholRecipientType
     */
    public function getRecipientType()
    {
      return $this->RecipientType;
    }

    /**
     * @param AlcoholRecipientType $RecipientType
     * @return \FedexApiClass\Lib\AlcoholDetail
     */
    public function setRecipientType($RecipientType)
    {
      $this->RecipientType = $RecipientType;
      return $this;
    }

}

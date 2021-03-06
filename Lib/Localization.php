<?php

namespace FedexApiClass\Lib;

class Localization
{

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var string $LocaleCode
     */
    protected $LocaleCode = null;

    /**
     * @param string $LanguageCode
     * @param string $LocaleCode
     */
    public function __construct($LanguageCode = null, $LocaleCode = null)
    {
      $this->LanguageCode = $LanguageCode;
      $this->LocaleCode = $LocaleCode;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \FedexApiClass\Lib\Localization
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->LocaleCode;
    }

    /**
     * @param string $LocaleCode
     * @return \FedexApiClass\Lib\Localization
     */
    public function setLocaleCode($LocaleCode)
    {
      $this->LocaleCode = $LocaleCode;
      return $this;
    }

}

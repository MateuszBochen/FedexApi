<?php

namespace FedexApiClass\Lib;

class EMailRecipient
{

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @var AccessorRoleType $Role
     */
    protected $Role = null;

    /**
     * @var EmailOptionsRequested $OptionsRequested
     */
    protected $OptionsRequested = null;

    /**
     * @var Localization $Localization
     */
    protected $Localization = null;

    /**
     * @param string $EmailAddress
     * @param AccessorRoleType $Role
     * @param EmailOptionsRequested $OptionsRequested
     * @param Localization $Localization
     */
    public function __construct($EmailAddress, $Role, $OptionsRequested, $Localization)
    {
      $this->EmailAddress = $EmailAddress;
      $this->Role = $Role;
      $this->OptionsRequested = $OptionsRequested;
      $this->Localization = $Localization;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return \FedexApiClass\Lib\EMailRecipient
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

    /**
     * @return AccessorRoleType
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param AccessorRoleType $Role
     * @return \FedexApiClass\Lib\EMailRecipient
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

    /**
     * @return EmailOptionsRequested
     */
    public function getOptionsRequested()
    {
      return $this->OptionsRequested;
    }

    /**
     * @param EmailOptionsRequested $OptionsRequested
     * @return \FedexApiClass\Lib\EMailRecipient
     */
    public function setOptionsRequested($OptionsRequested)
    {
      $this->OptionsRequested = $OptionsRequested;
      return $this;
    }

    /**
     * @return Localization
     */
    public function getLocalization()
    {
      return $this->Localization;
    }

    /**
     * @param Localization $Localization
     * @return \FedexApiClass\Lib\EMailRecipient
     */
    public function setLocalization($Localization)
    {
      $this->Localization = $Localization;
      return $this;
    }

}

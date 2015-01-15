<?php

namespace FedexApiClass\Lib;

class Notification
{

    /**
     * @var NotificationSeverityType $Severity
     */
    protected $Severity = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $LocalizedMessage
     */
    protected $LocalizedMessage = null;

    /**
     * @var NotificationParameter[] $MessageParameters
     */
    protected $MessageParameters = null;

    /**
     * @param NotificationSeverityType $Severity
     * @param string $Source
     * @param string $Code
     * @param string $Message
     * @param string $LocalizedMessage
     * @param NotificationParameter[] $MessageParameters
     */
    public function __construct($Severity = null, $Source = null, $Code = null, $Message = null, $LocalizedMessage = null, array $MessageParameters = null)
    {
      $this->Severity = $Severity;
      $this->Source = $Source;
      $this->Code = $Code;
      $this->Message = $Message;
      $this->LocalizedMessage = $LocalizedMessage;
      $this->MessageParameters = $MessageParameters;
    }

    /**
     * @return NotificationSeverityType
     */
    public function getSeverity()
    {
      return $this->Severity;
    }

    /**
     * @param NotificationSeverityType $Severity
     * @return \FedexApiClass\Lib\Notification
     */
    public function setSeverity($Severity)
    {
      $this->Severity = $Severity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \FedexApiClass\Lib\Notification
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FedexApiClass\Lib\Notification
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FedexApiClass\Lib\Notification
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalizedMessage()
    {
      return $this->LocalizedMessage;
    }

    /**
     * @param string $LocalizedMessage
     * @return \FedexApiClass\Lib\Notification
     */
    public function setLocalizedMessage($LocalizedMessage)
    {
      $this->LocalizedMessage = $LocalizedMessage;
      return $this;
    }

    /**
     * @return NotificationParameter[]
     */
    public function getMessageParameters()
    {
      return $this->MessageParameters;
    }

    /**
     * @param NotificationParameter[] $MessageParameters
     * @return \FedexApiClass\Lib\Notification
     */
    public function setMessageParameters(array $MessageParameters)
    {
      $this->MessageParameters = $MessageParameters;
      return $this;
    }

}

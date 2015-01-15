<?php

namespace FedexApiClass\Lib;

class EMailLabelDetail
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var EMailRecipient[] $Recipients
     */
    protected $Recipients = null;

    /**
     * @param string $Message
     * @param EMailRecipient[] $Recipients
     */
    public function __construct($Message, array $Recipients)
    {
      $this->Message = $Message;
      $this->Recipients = $Recipients;
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
     * @return \FedexApiClass\Lib\EMailLabelDetail
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return EMailRecipient[]
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param EMailRecipient[] $Recipients
     * @return \FedexApiClass\Lib\EMailLabelDetail
     */
    public function setRecipients(array $Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}

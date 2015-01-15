<?php

namespace FedexApiClass\Lib;

class EMailNotificationDetail
{

    /**
     * @var EMailNotificationAggregationType $AggregationType
     */
    protected $AggregationType = null;

    /**
     * @var string $PersonalMessage
     */
    protected $PersonalMessage = null;

    /**
     * @var EMailNotificationRecipient $Recipients
     */
    protected $Recipients = null;

    /**
     * @param EMailNotificationAggregationType $AggregationType
     * @param string $PersonalMessage
     * @param EMailNotificationRecipient $Recipients
     */
    public function __construct($AggregationType, $PersonalMessage, $Recipients)
    {
      $this->AggregationType = $AggregationType;
      $this->PersonalMessage = $PersonalMessage;
      $this->Recipients = $Recipients;
    }

    /**
     * @return EMailNotificationAggregationType
     */
    public function getAggregationType()
    {
      return $this->AggregationType;
    }

    /**
     * @param EMailNotificationAggregationType $AggregationType
     * @return \FedexApiClass\Lib\EMailNotificationDetail
     */
    public function setAggregationType($AggregationType)
    {
      $this->AggregationType = $AggregationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonalMessage()
    {
      return $this->PersonalMessage;
    }

    /**
     * @param string $PersonalMessage
     * @return \FedexApiClass\Lib\EMailNotificationDetail
     */
    public function setPersonalMessage($PersonalMessage)
    {
      $this->PersonalMessage = $PersonalMessage;
      return $this;
    }

    /**
     * @return EMailNotificationRecipient
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param EMailNotificationRecipient $Recipients
     * @return \FedexApiClass\Lib\EMailNotificationDetail
     */
    public function setRecipients($Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}

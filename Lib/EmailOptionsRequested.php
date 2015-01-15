<?php

namespace FedexApiClass\Lib;

class EmailOptionsRequested
{

    /**
     * @var EmailOptionType[] $Options
     */
    protected $Options = null;

    /**
     * @param EmailOptionType[] $Options
     */
    public function __construct(array $Options = null)
    {
      $this->Options = $Options;
    }

    /**
     * @return EmailOptionType[]
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param EmailOptionType[] $Options
     * @return \FedexApiClass\Lib\EmailOptionsRequested
     */
    public function setOptions(array $Options)
    {
      $this->Options = $Options;
      return $this;
    }

}

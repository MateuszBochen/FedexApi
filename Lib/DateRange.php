<?php

namespace FedexApiClass\Lib;

class DateRange
{

    /**
     * @var date $Begins
     */
    protected $Begins = null;

    /**
     * @var date $Ends
     */
    protected $Ends = null;

    /**
     * @param date $Begins
     * @param date $Ends
     */
    public function __construct($Begins, $Ends)
    {
      $this->Begins = $Begins;
      $this->Ends = $Ends;
    }

    /**
     * @return date
     */
    public function getBegins()
    {
      return $this->Begins;
    }

    /**
     * @param date $Begins
     * @return \FedexApiClass\Lib\DateRange
     */
    public function setBegins($Begins)
    {
      $this->Begins = $Begins;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnds()
    {
      return $this->Ends;
    }

    /**
     * @param date $Ends
     * @return \FedexApiClass\Lib\DateRange
     */
    public function setEnds($Ends)
    {
      $this->Ends = $Ends;
      return $this;
    }

}

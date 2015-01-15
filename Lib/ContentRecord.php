<?php

namespace FedexApiClass\Lib;

class ContentRecord
{

    /**
     * @var string $PartNumber
     */
    protected $PartNumber = null;

    /**
     * @var string $ItemNumber
     */
    protected $ItemNumber = null;

    /**
     * @var int $ReceivedQuantity
     */
    protected $ReceivedQuantity = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param string $PartNumber
     * @param string $ItemNumber
     * @param int $ReceivedQuantity
     * @param string $Description
     */
    public function __construct($PartNumber, $ItemNumber, $ReceivedQuantity, $Description)
    {
      $this->PartNumber = $PartNumber;
      $this->ItemNumber = $ItemNumber;
      $this->ReceivedQuantity = $ReceivedQuantity;
      $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getPartNumber()
    {
      return $this->PartNumber;
    }

    /**
     * @param string $PartNumber
     * @return \FedexApiClass\Lib\ContentRecord
     */
    public function setPartNumber($PartNumber)
    {
      $this->PartNumber = $PartNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemNumber()
    {
      return $this->ItemNumber;
    }

    /**
     * @param string $ItemNumber
     * @return \FedexApiClass\Lib\ContentRecord
     */
    public function setItemNumber($ItemNumber)
    {
      $this->ItemNumber = $ItemNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReceivedQuantity()
    {
      return $this->ReceivedQuantity;
    }

    /**
     * @param int $ReceivedQuantity
     * @return \FedexApiClass\Lib\ContentRecord
     */
    public function setReceivedQuantity($ReceivedQuantity)
    {
      $this->ReceivedQuantity = $ReceivedQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FedexApiClass\Lib\ContentRecord
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}

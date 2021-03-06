<?php

namespace FedexApiClass\Lib;

class ShippingDocumentPart
{

    /**
     * @var int $DocumentPartSequenceNumber
     */
    protected $DocumentPartSequenceNumber = null;

    /**
     * @var base64Binary $Image
     */
    protected $Image = null;

    /**
     * @param int $DocumentPartSequenceNumber
     * @param base64Binary $Image
     */
    public function __construct($DocumentPartSequenceNumber = null, $Image = null)
    {
      $this->DocumentPartSequenceNumber = $DocumentPartSequenceNumber;
      $this->Image = $Image;
    }

    /**
     * @return int
     */
    public function getDocumentPartSequenceNumber()
    {
      return $this->DocumentPartSequenceNumber;
    }

    /**
     * @param int $DocumentPartSequenceNumber
     * @return \FedexApiClass\Lib\ShippingDocumentPart
     */
    public function setDocumentPartSequenceNumber($DocumentPartSequenceNumber)
    {
      $this->DocumentPartSequenceNumber = $DocumentPartSequenceNumber;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param base64Binary $Image
     * @return \FedexApiClass\Lib\ShippingDocumentPart
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

}

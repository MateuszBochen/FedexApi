<?php

namespace FedexApi\Lib;

class NaftaCertificateOfOriginDetail
{

    /**
     * @var ShippingDocumentFormat $Format
     */
    protected $Format = null;

    /**
     * @var DateRange $BlanketPeriod
     */
    protected $BlanketPeriod = null;

    /**
     * @var NaftaImporterSpecificationType $ImporterSpecification
     */
    protected $ImporterSpecification = null;

    /**
     * @var Contact $SignatureContact
     */
    protected $SignatureContact = null;

    /**
     * @var NaftaProducerSpecificationType $ProducerSpecification
     */
    protected $ProducerSpecification = null;

    /**
     * @var NaftaProducer[] $Producers
     */
    protected $Producers = null;

    /**
     * @var CustomerImageUsage[] $CustomerImageUsages
     */
    protected $CustomerImageUsages = null;

    /**
     * @param ShippingDocumentFormat $Format
     * @param DateRange $BlanketPeriod
     * @param NaftaImporterSpecificationType $ImporterSpecification
     * @param Contact $SignatureContact
     * @param NaftaProducerSpecificationType $ProducerSpecification
     * @param NaftaProducer[] $Producers
     * @param CustomerImageUsage[] $CustomerImageUsages
     */
    public function __construct($Format, $BlanketPeriod, $ImporterSpecification, $SignatureContact, $ProducerSpecification, array $Producers, array $CustomerImageUsages)
    {
      $this->Format = $Format;
      $this->BlanketPeriod = $BlanketPeriod;
      $this->ImporterSpecification = $ImporterSpecification;
      $this->SignatureContact = $SignatureContact;
      $this->ProducerSpecification = $ProducerSpecification;
      $this->Producers = $Producers;
      $this->CustomerImageUsages = $CustomerImageUsages;
    }

    /**
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param ShippingDocumentFormat $Format
     * @return \FedexApi\Lib\NaftaCertificateOfOriginDetail
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return DateRange
     */
    public function getBlanketPeriod()
    {
      return $this->BlanketPeriod;
    }

    /**
     * @param DateRange $BlanketPeriod
     * @return \FedexApi\Lib\NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod($BlanketPeriod)
    {
      $this->BlanketPeriod = $BlanketPeriod;
      return $this;
    }

    /**
     * @return NaftaImporterSpecificationType
     */
    public function getImporterSpecification()
    {
      return $this->ImporterSpecification;
    }

    /**
     * @param NaftaImporterSpecificationType $ImporterSpecification
     * @return \FedexApi\Lib\NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($ImporterSpecification)
    {
      $this->ImporterSpecification = $ImporterSpecification;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getSignatureContact()
    {
      return $this->SignatureContact;
    }

    /**
     * @param Contact $SignatureContact
     * @return \FedexApi\Lib\NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact($SignatureContact)
    {
      $this->SignatureContact = $SignatureContact;
      return $this;
    }

    /**
     * @return NaftaProducerSpecificationType
     */
    public function getProducerSpecification()
    {
      return $this->ProducerSpecification;
    }

    /**
     * @param NaftaProducerSpecificationType $ProducerSpecification
     * @return \FedexApi\Lib\NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($ProducerSpecification)
    {
      $this->ProducerSpecification = $ProducerSpecification;
      return $this;
    }

    /**
     * @return NaftaProducer[]
     */
    public function getProducers()
    {
      return $this->Producers;
    }

    /**
     * @param NaftaProducer[] $Producers
     * @return \FedexApi\Lib\NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $Producers)
    {
      $this->Producers = $Producers;
      return $this;
    }

    /**
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
      return $this->CustomerImageUsages;
    }

    /**
     * @param CustomerImageUsage[] $CustomerImageUsages
     * @return \FedexApi\Lib\NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $CustomerImageUsages)
    {
      $this->CustomerImageUsages = $CustomerImageUsages;
      return $this;
    }

}

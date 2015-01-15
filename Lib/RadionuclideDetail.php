<?php

namespace FedexApiClass\Lib;

class RadionuclideDetail
{

    /**
     * @var string $Radionuclide
     */
    protected $Radionuclide = null;

    /**
     * @var RadionuclideActivity $Activity
     */
    protected $Activity = null;

    /**
     * @var boolean $ExceptedPackagingIsReportableQuantity
     */
    protected $ExceptedPackagingIsReportableQuantity = null;

    /**
     * @var PhysicalFormType $PhysicalForm
     */
    protected $PhysicalForm = null;

    /**
     * @var string $ChemicalForm
     */
    protected $ChemicalForm = null;

    /**
     * @param string $Radionuclide
     * @param RadionuclideActivity $Activity
     * @param boolean $ExceptedPackagingIsReportableQuantity
     * @param PhysicalFormType $PhysicalForm
     * @param string $ChemicalForm
     */
    public function __construct($Radionuclide = null, $Activity = null, $ExceptedPackagingIsReportableQuantity = null, $PhysicalForm = null, $ChemicalForm = null)
    {
      $this->Radionuclide = $Radionuclide;
      $this->Activity = $Activity;
      $this->ExceptedPackagingIsReportableQuantity = $ExceptedPackagingIsReportableQuantity;
      $this->PhysicalForm = $PhysicalForm;
      $this->ChemicalForm = $ChemicalForm;
    }

    /**
     * @return string
     */
    public function getRadionuclide()
    {
      return $this->Radionuclide;
    }

    /**
     * @param string $Radionuclide
     * @return \FedexApiClass\Lib\RadionuclideDetail
     */
    public function setRadionuclide($Radionuclide)
    {
      $this->Radionuclide = $Radionuclide;
      return $this;
    }

    /**
     * @return RadionuclideActivity
     */
    public function getActivity()
    {
      return $this->Activity;
    }

    /**
     * @param RadionuclideActivity $Activity
     * @return \FedexApiClass\Lib\RadionuclideDetail
     */
    public function setActivity($Activity)
    {
      $this->Activity = $Activity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExceptedPackagingIsReportableQuantity()
    {
      return $this->ExceptedPackagingIsReportableQuantity;
    }

    /**
     * @param boolean $ExceptedPackagingIsReportableQuantity
     * @return \FedexApiClass\Lib\RadionuclideDetail
     */
    public function setExceptedPackagingIsReportableQuantity($ExceptedPackagingIsReportableQuantity)
    {
      $this->ExceptedPackagingIsReportableQuantity = $ExceptedPackagingIsReportableQuantity;
      return $this;
    }

    /**
     * @return PhysicalFormType
     */
    public function getPhysicalForm()
    {
      return $this->PhysicalForm;
    }

    /**
     * @param PhysicalFormType $PhysicalForm
     * @return \FedexApiClass\Lib\RadionuclideDetail
     */
    public function setPhysicalForm($PhysicalForm)
    {
      $this->PhysicalForm = $PhysicalForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getChemicalForm()
    {
      return $this->ChemicalForm;
    }

    /**
     * @param string $ChemicalForm
     * @return \FedexApiClass\Lib\RadionuclideDetail
     */
    public function setChemicalForm($ChemicalForm)
    {
      $this->ChemicalForm = $ChemicalForm;
      return $this;
    }

}

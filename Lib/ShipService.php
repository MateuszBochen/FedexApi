<?php

namespace FedexApi\Lib;

class ShipService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdditionalLabelsDetail' => 'FedexApi\\Lib\\AdditionalLabelsDetail',
      'Address' => 'FedexApi\\Lib\\Address',
      'AdrLicenseDetail' => 'FedexApi\\Lib\\AdrLicenseDetail',
      'AlcoholDetail' => 'FedexApi\\Lib\\AlcoholDetail',
      'AssociatedShipmentDetail' => 'FedexApi\\Lib\\AssociatedShipmentDetail',
      'BinaryBarcode' => 'FedexApi\\Lib\\BinaryBarcode',
      'BrokerDetail' => 'FedexApi\\Lib\\BrokerDetail',
      'CertificateOfOriginDetail' => 'FedexApi\\Lib\\CertificateOfOriginDetail',
      'ClientDetail' => 'FedexApi\\Lib\\ClientDetail',
      'CodAddTransportationChargesDetail' => 'FedexApi\\Lib\\CodAddTransportationChargesDetail',
      'CodDetail' => 'FedexApi\\Lib\\CodDetail',
      'CodReturnPackageDetail' => 'FedexApi\\Lib\\CodReturnPackageDetail',
      'CommercialInvoice' => 'FedexApi\\Lib\\CommercialInvoice',
      'CommercialInvoiceDetail' => 'FedexApi\\Lib\\CommercialInvoiceDetail',
      'Commodity' => 'FedexApi\\Lib\\Commodity',
      'CompletedCodDetail' => 'FedexApi\\Lib\\CompletedCodDetail',
      'CompletedEtdDetail' => 'FedexApi\\Lib\\CompletedEtdDetail',
      'CompletedHazardousPackageDetail' => 'FedexApi\\Lib\\CompletedHazardousPackageDetail',
      'CompletedHazardousShipmentDetail' => 'FedexApi\\Lib\\CompletedHazardousShipmentDetail',
      'CompletedHazardousSummaryDetail' => 'FedexApi\\Lib\\CompletedHazardousSummaryDetail',
      'CompletedHoldAtLocationDetail' => 'FedexApi\\Lib\\CompletedHoldAtLocationDetail',
      'CompletedPackageDetail' => 'FedexApi\\Lib\\CompletedPackageDetail',
      'CompletedShipmentDetail' => 'FedexApi\\Lib\\CompletedShipmentDetail',
      'CompletedSmartPostDetail' => 'FedexApi\\Lib\\CompletedSmartPostDetail',
      'CompletedTagDetail' => 'FedexApi\\Lib\\CompletedTagDetail',
      'ConfigurableLabelReferenceEntry' => 'FedexApi\\Lib\\ConfigurableLabelReferenceEntry',
      'Contact' => 'FedexApi\\Lib\\Contact',
      'ContactAndAddress' => 'FedexApi\\Lib\\ContactAndAddress',
      'ContentRecord' => 'FedexApi\\Lib\\ContentRecord',
      'CurrencyExchangeRate' => 'FedexApi\\Lib\\CurrencyExchangeRate',
      'CustomDeliveryWindowDetail' => 'FedexApi\\Lib\\CustomDeliveryWindowDetail',
      'CustomDocumentDetail' => 'FedexApi\\Lib\\CustomDocumentDetail',
      'CustomLabelBarcodeEntry' => 'FedexApi\\Lib\\CustomLabelBarcodeEntry',
      'CustomLabelBoxEntry' => 'FedexApi\\Lib\\CustomLabelBoxEntry',
      'CustomLabelDetail' => 'FedexApi\\Lib\\CustomLabelDetail',
      'CustomLabelGraphicEntry' => 'FedexApi\\Lib\\CustomLabelGraphicEntry',
      'CustomLabelPosition' => 'FedexApi\\Lib\\CustomLabelPosition',
      'CustomLabelTextEntry' => 'FedexApi\\Lib\\CustomLabelTextEntry',
      'CustomerImageUsage' => 'FedexApi\\Lib\\CustomerImageUsage',
      'CustomerReference' => 'FedexApi\\Lib\\CustomerReference',
      'CustomerSpecifiedLabelDetail' => 'FedexApi\\Lib\\CustomerSpecifiedLabelDetail',
      'CustomsClearanceDetail' => 'FedexApi\\Lib\\CustomsClearanceDetail',
      'CustomsDeclarationStatementDetail' => 'FedexApi\\Lib\\CustomsDeclarationStatementDetail',
      'CustomsOptionDetail' => 'FedexApi\\Lib\\CustomsOptionDetail',
      'DangerousGoodsContainer' => 'FedexApi\\Lib\\DangerousGoodsContainer',
      'DangerousGoodsDetail' => 'FedexApi\\Lib\\DangerousGoodsDetail',
      'DangerousGoodsShippersDeclarationDetail' => 'FedexApi\\Lib\\DangerousGoodsShippersDeclarationDetail',
      'DangerousGoodsSignatory' => 'FedexApi\\Lib\\DangerousGoodsSignatory',
      'DateRange' => 'FedexApi\\Lib\\DateRange',
      'DeleteShipmentRequest' => 'FedexApi\\Lib\\DeleteShipmentRequest',
      'DeleteTagRequest' => 'FedexApi\\Lib\\DeleteTagRequest',
      'DeliveryOnInvoiceAcceptanceDetail' => 'FedexApi\\Lib\\DeliveryOnInvoiceAcceptanceDetail',
      'DestinationControlDetail' => 'FedexApi\\Lib\\DestinationControlDetail',
      'Dimensions' => 'FedexApi\\Lib\\Dimensions',
      'DocTabContent' => 'FedexApi\\Lib\\DocTabContent',
      'DocTabContentBarcoded' => 'FedexApi\\Lib\\DocTabContentBarcoded',
      'DocTabContentZone001' => 'FedexApi\\Lib\\DocTabContentZone001',
      'DocTabZoneSpecification' => 'FedexApi\\Lib\\DocTabZoneSpecification',
      'DocumentFormatOptionsRequested' => 'FedexApi\\Lib\\DocumentFormatOptionsRequested',
      'EMailLabelDetail' => 'FedexApi\\Lib\\EMailLabelDetail',
      'EMailNotificationDetail' => 'FedexApi\\Lib\\EMailNotificationDetail',
      'EMailNotificationRecipient' => 'FedexApi\\Lib\\EMailNotificationRecipient',
      'EMailRecipient' => 'FedexApi\\Lib\\EMailRecipient',
      'EdtCommodityTax' => 'FedexApi\\Lib\\EdtCommodityTax',
      'EdtExciseCondition' => 'FedexApi\\Lib\\EdtExciseCondition',
      'EdtTaxDetail' => 'FedexApi\\Lib\\EdtTaxDetail',
      'EmailOptionsRequested' => 'FedexApi\\Lib\\EmailOptionsRequested',
      'EtdDetail' => 'FedexApi\\Lib\\EtdDetail',
      'ExportDeclarationDetail' => 'FedexApi\\Lib\\ExportDeclarationDetail',
      'ExportDetail' => 'FedexApi\\Lib\\ExportDetail',
      'ExpressFreightDetail' => 'FedexApi\\Lib\\ExpressFreightDetail',
      'FreightAddressLabelDetail' => 'FedexApi\\Lib\\FreightAddressLabelDetail',
      'FreightBaseCharge' => 'FedexApi\\Lib\\FreightBaseCharge',
      'FreightGuaranteeDetail' => 'FedexApi\\Lib\\FreightGuaranteeDetail',
      'FreightRateDetail' => 'FedexApi\\Lib\\FreightRateDetail',
      'FreightRateNotation' => 'FedexApi\\Lib\\FreightRateNotation',
      'FreightShipmentDetail' => 'FedexApi\\Lib\\FreightShipmentDetail',
      'FreightShipmentLineItem' => 'FedexApi\\Lib\\FreightShipmentLineItem',
      'FreightSpecialServicePayment' => 'FedexApi\\Lib\\FreightSpecialServicePayment',
      'GeneralAgencyAgreementDetail' => 'FedexApi\\Lib\\GeneralAgencyAgreementDetail',
      'HazardousCommodityContent' => 'FedexApi\\Lib\\HazardousCommodityContent',
      'HazardousCommodityDescription' => 'FedexApi\\Lib\\HazardousCommodityDescription',
      'HazardousCommodityInnerReceptacleDetail' => 'FedexApi\\Lib\\HazardousCommodityInnerReceptacleDetail',
      'HazardousCommodityOptionDetail' => 'FedexApi\\Lib\\HazardousCommodityOptionDetail',
      'HazardousCommodityPackagingDetail' => 'FedexApi\\Lib\\HazardousCommodityPackagingDetail',
      'HazardousCommodityPackingDetail' => 'FedexApi\\Lib\\HazardousCommodityPackingDetail',
      'HazardousCommodityQuantityDetail' => 'FedexApi\\Lib\\HazardousCommodityQuantityDetail',
      'HoldAtLocationDetail' => 'FedexApi\\Lib\\HoldAtLocationDetail',
      'HomeDeliveryPremiumDetail' => 'FedexApi\\Lib\\HomeDeliveryPremiumDetail',
      'InternationalControlledExportDetail' => 'FedexApi\\Lib\\InternationalControlledExportDetail',
      'InternationalTrafficInArmsRegulationsDetail' => 'FedexApi\\Lib\\InternationalTrafficInArmsRegulationsDetail',
      'LabelSpecification' => 'FedexApi\\Lib\\LabelSpecification',
      'LiabilityCoverageDetail' => 'FedexApi\\Lib\\LiabilityCoverageDetail',
      'LicenseOrPermitDetail' => 'FedexApi\\Lib\\LicenseOrPermitDetail',
      'LinearMeasure' => 'FedexApi\\Lib\\LinearMeasure',
      'Localization' => 'FedexApi\\Lib\\Localization',
      'Measure' => 'FedexApi\\Lib\\Measure',
      'Money' => 'FedexApi\\Lib\\Money',
      'NaftaCertificateOfOriginDetail' => 'FedexApi\\Lib\\NaftaCertificateOfOriginDetail',
      'NaftaCommodityDetail' => 'FedexApi\\Lib\\NaftaCommodityDetail',
      'NaftaLowValueStatementDetail' => 'FedexApi\\Lib\\NaftaLowValueStatementDetail',
      'NaftaProducer' => 'FedexApi\\Lib\\NaftaProducer',
      'Notification' => 'FedexApi\\Lib\\Notification',
      'NotificationParameter' => 'FedexApi\\Lib\\NotificationParameter',
      'Op900Detail' => 'FedexApi\\Lib\\Op900Detail',
      'OperationalInstruction' => 'FedexApi\\Lib\\OperationalInstruction',
      'PackageBarcodes' => 'FedexApi\\Lib\\PackageBarcodes',
      'PackageOperationalDetail' => 'FedexApi\\Lib\\PackageOperationalDetail',
      'PackageRateDetail' => 'FedexApi\\Lib\\PackageRateDetail',
      'PackageRating' => 'FedexApi\\Lib\\PackageRating',
      'PackageSpecialServicesRequested' => 'FedexApi\\Lib\\PackageSpecialServicesRequested',
      'Party' => 'FedexApi\\Lib\\Party',
      'Payment' => 'FedexApi\\Lib\\Payment',
      'Payor' => 'FedexApi\\Lib\\Payor',
      'PendingShipmentAccessDetail' => 'FedexApi\\Lib\\PendingShipmentAccessDetail',
      'PendingShipmentAccessorDetail' => 'FedexApi\\Lib\\PendingShipmentAccessorDetail',
      'PendingShipmentDetail' => 'FedexApi\\Lib\\PendingShipmentDetail',
      'PendingShipmentProcessingOptionsRequested' => 'FedexApi\\Lib\\PendingShipmentProcessingOptionsRequested',
      'PickupDetail' => 'FedexApi\\Lib\\PickupDetail',
      'PrintedReference' => 'FedexApi\\Lib\\PrintedReference',
      'PriorityAlertDetail' => 'FedexApi\\Lib\\PriorityAlertDetail',
      'ProcessShipmentReply' => 'FedexApi\\Lib\\ProcessShipmentReply',
      'ProcessShipmentRequest' => 'FedexApi\\Lib\\ProcessShipmentRequest',
      'ProcessTagReply' => 'FedexApi\\Lib\\ProcessTagReply',
      'ProcessTagRequest' => 'FedexApi\\Lib\\ProcessTagRequest',
      'RadioactivityDetail' => 'FedexApi\\Lib\\RadioactivityDetail',
      'RadionuclideActivity' => 'FedexApi\\Lib\\RadionuclideActivity',
      'RadionuclideDetail' => 'FedexApi\\Lib\\RadionuclideDetail',
      'RateDiscount' => 'FedexApi\\Lib\\RateDiscount',
      'Rebate' => 'FedexApi\\Lib\\Rebate',
      'RecipientCustomsId' => 'FedexApi\\Lib\\RecipientCustomsId',
      'RecommendedDocumentSpecification' => 'FedexApi\\Lib\\RecommendedDocumentSpecification',
      'RegulatoryLabelContentDetail' => 'FedexApi\\Lib\\RegulatoryLabelContentDetail',
      'RequestedPackageLineItem' => 'FedexApi\\Lib\\RequestedPackageLineItem',
      'RequestedShipment' => 'FedexApi\\Lib\\RequestedShipment',
      'ReturnAssociationDetail' => 'FedexApi\\Lib\\ReturnAssociationDetail',
      'ReturnEMailDetail' => 'FedexApi\\Lib\\ReturnEMailDetail',
      'ReturnInstructionsDetail' => 'FedexApi\\Lib\\ReturnInstructionsDetail',
      'ReturnShipmentDetail' => 'FedexApi\\Lib\\ReturnShipmentDetail',
      'Rma' => 'FedexApi\\Lib\\Rma',
      'ShipmentConfigurationData' => 'FedexApi\\Lib\\ShipmentConfigurationData',
      'ShipmentDryIceDetail' => 'FedexApi\\Lib\\ShipmentDryIceDetail',
      'ShipmentLegRateDetail' => 'FedexApi\\Lib\\ShipmentLegRateDetail',
      'ShipmentManifestDetail' => 'FedexApi\\Lib\\ShipmentManifestDetail',
      'ShipmentOperationalDetail' => 'FedexApi\\Lib\\ShipmentOperationalDetail',
      'ShipmentRateDetail' => 'FedexApi\\Lib\\ShipmentRateDetail',
      'ShipmentRating' => 'FedexApi\\Lib\\ShipmentRating',
      'ShipmentReply' => 'FedexApi\\Lib\\ShipmentReply',
      'ShipmentSpecialServicesRequested' => 'FedexApi\\Lib\\ShipmentSpecialServicesRequested',
      'ShippingDocument' => 'FedexApi\\Lib\\ShippingDocument',
      'ShippingDocumentDispositionDetail' => 'FedexApi\\Lib\\ShippingDocumentDispositionDetail',
      'ShippingDocumentEMailDetail' => 'FedexApi\\Lib\\ShippingDocumentEMailDetail',
      'ShippingDocumentEMailRecipient' => 'FedexApi\\Lib\\ShippingDocumentEMailRecipient',
      'ShippingDocumentFormat' => 'FedexApi\\Lib\\ShippingDocumentFormat',
      'ShippingDocumentPart' => 'FedexApi\\Lib\\ShippingDocumentPart',
      'ShippingDocumentPrintDetail' => 'FedexApi\\Lib\\ShippingDocumentPrintDetail',
      'ShippingDocumentSpecification' => 'FedexApi\\Lib\\ShippingDocumentSpecification',
      'SignatureOptionDetail' => 'FedexApi\\Lib\\SignatureOptionDetail',
      'SmartPostShipmentDetail' => 'FedexApi\\Lib\\SmartPostShipmentDetail',
      'StringBarcode' => 'FedexApi\\Lib\\StringBarcode',
      'Surcharge' => 'FedexApi\\Lib\\Surcharge',
      'Tax' => 'FedexApi\\Lib\\Tax',
      'TaxpayerIdentification' => 'FedexApi\\Lib\\TaxpayerIdentification',
      'TrackingId' => 'FedexApi\\Lib\\TrackingId',
      'TransactionDetail' => 'FedexApi\\Lib\\TransactionDetail',
      'UploadDocumentDetail' => 'FedexApi\\Lib\\UploadDocumentDetail',
      'UploadDocumentReferenceDetail' => 'FedexApi\\Lib\\UploadDocumentReferenceDetail',
      'ValidateShipmentRequest' => 'FedexApi\\Lib\\ValidateShipmentRequest',
      'ValidatedHazardousCommodityContent' => 'FedexApi\\Lib\\ValidatedHazardousCommodityContent',
      'ValidatedHazardousCommodityDescription' => 'FedexApi\\Lib\\ValidatedHazardousCommodityDescription',
      'ValidatedHazardousContainer' => 'FedexApi\\Lib\\ValidatedHazardousContainer',
      'VariableHandlingChargeDetail' => 'FedexApi\\Lib\\VariableHandlingChargeDetail',
      'VariableHandlingCharges' => 'FedexApi\\Lib\\VariableHandlingCharges',
      'Volume' => 'FedexApi\\Lib\\Volume',
      'Weight' => 'FedexApi\\Lib\\Weight',
      'WebAuthenticationDetail' => 'FedexApi\\Lib\\WebAuthenticationDetail',
      'WebAuthenticationCredential' => 'FedexApi\\Lib\\WebAuthenticationCredential',
      'VersionId' => 'FedexApi\\Lib\\VersionId',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = '/var/www/html/php/wsdl/ShipService_v15.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ProcessTagRequest $ProcessTagRequest
     * @return ProcessTagReply
     */
    public function processTag(ProcessTagRequest $ProcessTagRequest)
    {
      return $this->__soapCall('processTag', array($ProcessTagRequest));
    }

    /**
     * @param ProcessShipmentRequest $ProcessShipmentRequest
     * @return ProcessShipmentReply
     */
    public function processShipment(ProcessShipmentRequest $ProcessShipmentRequest)
    {
      return $this->__soapCall('processShipment', array($ProcessShipmentRequest));
    }

    /**
     * @param DeleteTagRequest $DeleteTagRequest
     * @return ShipmentReply
     */
    public function deleteTag(DeleteTagRequest $DeleteTagRequest)
    {
      return $this->__soapCall('deleteTag', array($DeleteTagRequest));
    }

    /**
     * @param DeleteShipmentRequest $DeleteShipmentRequest
     * @return ShipmentReply
     */
    public function deleteShipment(DeleteShipmentRequest $DeleteShipmentRequest)
    {
      return $this->__soapCall('deleteShipment', array($DeleteShipmentRequest));
    }

    /**
     * @param ValidateShipmentRequest $ValidateShipmentRequest
     * @return ShipmentReply
     */
    public function validateShipment(ValidateShipmentRequest $ValidateShipmentRequest)
    {
      return $this->__soapCall('validateShipment', array($ValidateShipmentRequest));
    }

}

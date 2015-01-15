<?php

namespace FedexApiClass\Lib;

class ShipService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdditionalLabelsDetail' => 'FedexApiClass\\Lib\\AdditionalLabelsDetail',
      'Address' => 'FedexApiClass\\Lib\\Address',
      'AdrLicenseDetail' => 'FedexApiClass\\Lib\\AdrLicenseDetail',
      'AlcoholDetail' => 'FedexApiClass\\Lib\\AlcoholDetail',
      'AssociatedShipmentDetail' => 'FedexApiClass\\Lib\\AssociatedShipmentDetail',
      'BinaryBarcode' => 'FedexApiClass\\Lib\\BinaryBarcode',
      'BrokerDetail' => 'FedexApiClass\\Lib\\BrokerDetail',
      'CertificateOfOriginDetail' => 'FedexApiClass\\Lib\\CertificateOfOriginDetail',
      'ClientDetail' => 'FedexApiClass\\Lib\\ClientDetail',
      'CodAddTransportationChargesDetail' => 'FedexApiClass\\Lib\\CodAddTransportationChargesDetail',
      'CodDetail' => 'FedexApiClass\\Lib\\CodDetail',
      'CodReturnPackageDetail' => 'FedexApiClass\\Lib\\CodReturnPackageDetail',
      'CommercialInvoice' => 'FedexApiClass\\Lib\\CommercialInvoice',
      'CommercialInvoiceDetail' => 'FedexApiClass\\Lib\\CommercialInvoiceDetail',
      'Commodity' => 'FedexApiClass\\Lib\\Commodity',
      'CompletedCodDetail' => 'FedexApiClass\\Lib\\CompletedCodDetail',
      'CompletedEtdDetail' => 'FedexApiClass\\Lib\\CompletedEtdDetail',
      'CompletedHazardousPackageDetail' => 'FedexApiClass\\Lib\\CompletedHazardousPackageDetail',
      'CompletedHazardousShipmentDetail' => 'FedexApiClass\\Lib\\CompletedHazardousShipmentDetail',
      'CompletedHazardousSummaryDetail' => 'FedexApiClass\\Lib\\CompletedHazardousSummaryDetail',
      'CompletedHoldAtLocationDetail' => 'FedexApiClass\\Lib\\CompletedHoldAtLocationDetail',
      'CompletedPackageDetail' => 'FedexApiClass\\Lib\\CompletedPackageDetail',
      'CompletedShipmentDetail' => 'FedexApiClass\\Lib\\CompletedShipmentDetail',
      'CompletedSmartPostDetail' => 'FedexApiClass\\Lib\\CompletedSmartPostDetail',
      'CompletedTagDetail' => 'FedexApiClass\\Lib\\CompletedTagDetail',
      'ConfigurableLabelReferenceEntry' => 'FedexApiClass\\Lib\\ConfigurableLabelReferenceEntry',
      'Contact' => 'FedexApiClass\\Lib\\Contact',
      'ContactAndAddress' => 'FedexApiClass\\Lib\\ContactAndAddress',
      'ContentRecord' => 'FedexApiClass\\Lib\\ContentRecord',
      'CurrencyExchangeRate' => 'FedexApiClass\\Lib\\CurrencyExchangeRate',
      'CustomDeliveryWindowDetail' => 'FedexApiClass\\Lib\\CustomDeliveryWindowDetail',
      'CustomDocumentDetail' => 'FedexApiClass\\Lib\\CustomDocumentDetail',
      'CustomLabelBarcodeEntry' => 'FedexApiClass\\Lib\\CustomLabelBarcodeEntry',
      'CustomLabelBoxEntry' => 'FedexApiClass\\Lib\\CustomLabelBoxEntry',
      'CustomLabelDetail' => 'FedexApiClass\\Lib\\CustomLabelDetail',
      'CustomLabelGraphicEntry' => 'FedexApiClass\\Lib\\CustomLabelGraphicEntry',
      'CustomLabelPosition' => 'FedexApiClass\\Lib\\CustomLabelPosition',
      'CustomLabelTextEntry' => 'FedexApiClass\\Lib\\CustomLabelTextEntry',
      'CustomerImageUsage' => 'FedexApiClass\\Lib\\CustomerImageUsage',
      'CustomerReference' => 'FedexApiClass\\Lib\\CustomerReference',
      'CustomerSpecifiedLabelDetail' => 'FedexApiClass\\Lib\\CustomerSpecifiedLabelDetail',
      'CustomsClearanceDetail' => 'FedexApiClass\\Lib\\CustomsClearanceDetail',
      'CustomsDeclarationStatementDetail' => 'FedexApiClass\\Lib\\CustomsDeclarationStatementDetail',
      'CustomsOptionDetail' => 'FedexApiClass\\Lib\\CustomsOptionDetail',
      'DangerousGoodsContainer' => 'FedexApiClass\\Lib\\DangerousGoodsContainer',
      'DangerousGoodsDetail' => 'FedexApiClass\\Lib\\DangerousGoodsDetail',
      'DangerousGoodsShippersDeclarationDetail' => 'FedexApiClass\\Lib\\DangerousGoodsShippersDeclarationDetail',
      'DangerousGoodsSignatory' => 'FedexApiClass\\Lib\\DangerousGoodsSignatory',
      'DateRange' => 'FedexApiClass\\Lib\\DateRange',
      'DeleteShipmentRequest' => 'FedexApiClass\\Lib\\DeleteShipmentRequest',
      'DeleteTagRequest' => 'FedexApiClass\\Lib\\DeleteTagRequest',
      'DeliveryOnInvoiceAcceptanceDetail' => 'FedexApiClass\\Lib\\DeliveryOnInvoiceAcceptanceDetail',
      'DestinationControlDetail' => 'FedexApiClass\\Lib\\DestinationControlDetail',
      'Dimensions' => 'FedexApiClass\\Lib\\Dimensions',
      'DocTabContent' => 'FedexApiClass\\Lib\\DocTabContent',
      'DocTabContentBarcoded' => 'FedexApiClass\\Lib\\DocTabContentBarcoded',
      'DocTabContentZone001' => 'FedexApiClass\\Lib\\DocTabContentZone001',
      'DocTabZoneSpecification' => 'FedexApiClass\\Lib\\DocTabZoneSpecification',
      'DocumentFormatOptionsRequested' => 'FedexApiClass\\Lib\\DocumentFormatOptionsRequested',
      'EMailLabelDetail' => 'FedexApiClass\\Lib\\EMailLabelDetail',
      'EMailNotificationDetail' => 'FedexApiClass\\Lib\\EMailNotificationDetail',
      'EMailNotificationRecipient' => 'FedexApiClass\\Lib\\EMailNotificationRecipient',
      'EMailRecipient' => 'FedexApiClass\\Lib\\EMailRecipient',
      'EdtCommodityTax' => 'FedexApiClass\\Lib\\EdtCommodityTax',
      'EdtExciseCondition' => 'FedexApiClass\\Lib\\EdtExciseCondition',
      'EdtTaxDetail' => 'FedexApiClass\\Lib\\EdtTaxDetail',
      'EmailOptionsRequested' => 'FedexApiClass\\Lib\\EmailOptionsRequested',
      'EtdDetail' => 'FedexApiClass\\Lib\\EtdDetail',
      'ExportDeclarationDetail' => 'FedexApiClass\\Lib\\ExportDeclarationDetail',
      'ExportDetail' => 'FedexApiClass\\Lib\\ExportDetail',
      'ExpressFreightDetail' => 'FedexApiClass\\Lib\\ExpressFreightDetail',
      'FreightAddressLabelDetail' => 'FedexApiClass\\Lib\\FreightAddressLabelDetail',
      'FreightBaseCharge' => 'FedexApiClass\\Lib\\FreightBaseCharge',
      'FreightGuaranteeDetail' => 'FedexApiClass\\Lib\\FreightGuaranteeDetail',
      'FreightRateDetail' => 'FedexApiClass\\Lib\\FreightRateDetail',
      'FreightRateNotation' => 'FedexApiClass\\Lib\\FreightRateNotation',
      'FreightShipmentDetail' => 'FedexApiClass\\Lib\\FreightShipmentDetail',
      'FreightShipmentLineItem' => 'FedexApiClass\\Lib\\FreightShipmentLineItem',
      'FreightSpecialServicePayment' => 'FedexApiClass\\Lib\\FreightSpecialServicePayment',
      'GeneralAgencyAgreementDetail' => 'FedexApiClass\\Lib\\GeneralAgencyAgreementDetail',
      'HazardousCommodityContent' => 'FedexApiClass\\Lib\\HazardousCommodityContent',
      'HazardousCommodityDescription' => 'FedexApiClass\\Lib\\HazardousCommodityDescription',
      'HazardousCommodityInnerReceptacleDetail' => 'FedexApiClass\\Lib\\HazardousCommodityInnerReceptacleDetail',
      'HazardousCommodityOptionDetail' => 'FedexApiClass\\Lib\\HazardousCommodityOptionDetail',
      'HazardousCommodityPackagingDetail' => 'FedexApiClass\\Lib\\HazardousCommodityPackagingDetail',
      'HazardousCommodityPackingDetail' => 'FedexApiClass\\Lib\\HazardousCommodityPackingDetail',
      'HazardousCommodityQuantityDetail' => 'FedexApiClass\\Lib\\HazardousCommodityQuantityDetail',
      'HoldAtLocationDetail' => 'FedexApiClass\\Lib\\HoldAtLocationDetail',
      'HomeDeliveryPremiumDetail' => 'FedexApiClass\\Lib\\HomeDeliveryPremiumDetail',
      'InternationalControlledExportDetail' => 'FedexApiClass\\Lib\\InternationalControlledExportDetail',
      'InternationalTrafficInArmsRegulationsDetail' => 'FedexApiClass\\Lib\\InternationalTrafficInArmsRegulationsDetail',
      'LabelSpecification' => 'FedexApiClass\\Lib\\LabelSpecification',
      'LiabilityCoverageDetail' => 'FedexApiClass\\Lib\\LiabilityCoverageDetail',
      'LicenseOrPermitDetail' => 'FedexApiClass\\Lib\\LicenseOrPermitDetail',
      'LinearMeasure' => 'FedexApiClass\\Lib\\LinearMeasure',
      'Localization' => 'FedexApiClass\\Lib\\Localization',
      'Measure' => 'FedexApiClass\\Lib\\Measure',
      'Money' => 'FedexApiClass\\Lib\\Money',
      'NaftaCertificateOfOriginDetail' => 'FedexApiClass\\Lib\\NaftaCertificateOfOriginDetail',
      'NaftaCommodityDetail' => 'FedexApiClass\\Lib\\NaftaCommodityDetail',
      'NaftaLowValueStatementDetail' => 'FedexApiClass\\Lib\\NaftaLowValueStatementDetail',
      'NaftaProducer' => 'FedexApiClass\\Lib\\NaftaProducer',
      'Notification' => 'FedexApiClass\\Lib\\Notification',
      'NotificationParameter' => 'FedexApiClass\\Lib\\NotificationParameter',
      'Op900Detail' => 'FedexApiClass\\Lib\\Op900Detail',
      'OperationalInstruction' => 'FedexApiClass\\Lib\\OperationalInstruction',
      'PackageBarcodes' => 'FedexApiClass\\Lib\\PackageBarcodes',
      'PackageOperationalDetail' => 'FedexApiClass\\Lib\\PackageOperationalDetail',
      'PackageRateDetail' => 'FedexApiClass\\Lib\\PackageRateDetail',
      'PackageRating' => 'FedexApiClass\\Lib\\PackageRating',
      'PackageSpecialServicesRequested' => 'FedexApiClass\\Lib\\PackageSpecialServicesRequested',
      'Party' => 'FedexApiClass\\Lib\\Party',
      'Payment' => 'FedexApiClass\\Lib\\Payment',
      'Payor' => 'FedexApiClass\\Lib\\Payor',
      'PendingShipmentAccessDetail' => 'FedexApiClass\\Lib\\PendingShipmentAccessDetail',
      'PendingShipmentAccessorDetail' => 'FedexApiClass\\Lib\\PendingShipmentAccessorDetail',
      'PendingShipmentDetail' => 'FedexApiClass\\Lib\\PendingShipmentDetail',
      'PendingShipmentProcessingOptionsRequested' => 'FedexApiClass\\Lib\\PendingShipmentProcessingOptionsRequested',
      'PickupDetail' => 'FedexApiClass\\Lib\\PickupDetail',
      'PrintedReference' => 'FedexApiClass\\Lib\\PrintedReference',
      'PriorityAlertDetail' => 'FedexApiClass\\Lib\\PriorityAlertDetail',
      'ProcessShipmentReply' => 'FedexApiClass\\Lib\\ProcessShipmentReply',
      'ProcessShipmentRequest' => 'FedexApiClass\\Lib\\ProcessShipmentRequest',
      'ProcessTagReply' => 'FedexApiClass\\Lib\\ProcessTagReply',
      'ProcessTagRequest' => 'FedexApiClass\\Lib\\ProcessTagRequest',
      'RadioactivityDetail' => 'FedexApiClass\\Lib\\RadioactivityDetail',
      'RadionuclideActivity' => 'FedexApiClass\\Lib\\RadionuclideActivity',
      'RadionuclideDetail' => 'FedexApiClass\\Lib\\RadionuclideDetail',
      'RateDiscount' => 'FedexApiClass\\Lib\\RateDiscount',
      'Rebate' => 'FedexApiClass\\Lib\\Rebate',
      'RecipientCustomsId' => 'FedexApiClass\\Lib\\RecipientCustomsId',
      'RecommendedDocumentSpecification' => 'FedexApiClass\\Lib\\RecommendedDocumentSpecification',
      'RegulatoryLabelContentDetail' => 'FedexApiClass\\Lib\\RegulatoryLabelContentDetail',
      'RequestedPackageLineItem' => 'FedexApiClass\\Lib\\RequestedPackageLineItem',
      'RequestedShipment' => 'FedexApiClass\\Lib\\RequestedShipment',
      'ReturnAssociationDetail' => 'FedexApiClass\\Lib\\ReturnAssociationDetail',
      'ReturnEMailDetail' => 'FedexApiClass\\Lib\\ReturnEMailDetail',
      'ReturnInstructionsDetail' => 'FedexApiClass\\Lib\\ReturnInstructionsDetail',
      'ReturnShipmentDetail' => 'FedexApiClass\\Lib\\ReturnShipmentDetail',
      'Rma' => 'FedexApiClass\\Lib\\Rma',
      'ShipmentConfigurationData' => 'FedexApiClass\\Lib\\ShipmentConfigurationData',
      'ShipmentDryIceDetail' => 'FedexApiClass\\Lib\\ShipmentDryIceDetail',
      'ShipmentLegRateDetail' => 'FedexApiClass\\Lib\\ShipmentLegRateDetail',
      'ShipmentManifestDetail' => 'FedexApiClass\\Lib\\ShipmentManifestDetail',
      'ShipmentOperationalDetail' => 'FedexApiClass\\Lib\\ShipmentOperationalDetail',
      'ShipmentRateDetail' => 'FedexApiClass\\Lib\\ShipmentRateDetail',
      'ShipmentRating' => 'FedexApiClass\\Lib\\ShipmentRating',
      'ShipmentReply' => 'FedexApiClass\\Lib\\ShipmentReply',
      'ShipmentSpecialServicesRequested' => 'FedexApiClass\\Lib\\ShipmentSpecialServicesRequested',
      'ShippingDocument' => 'FedexApiClass\\Lib\\ShippingDocument',
      'ShippingDocumentDispositionDetail' => 'FedexApiClass\\Lib\\ShippingDocumentDispositionDetail',
      'ShippingDocumentEMailDetail' => 'FedexApiClass\\Lib\\ShippingDocumentEMailDetail',
      'ShippingDocumentEMailRecipient' => 'FedexApiClass\\Lib\\ShippingDocumentEMailRecipient',
      'ShippingDocumentFormat' => 'FedexApiClass\\Lib\\ShippingDocumentFormat',
      'ShippingDocumentPart' => 'FedexApiClass\\Lib\\ShippingDocumentPart',
      'ShippingDocumentPrintDetail' => 'FedexApiClass\\Lib\\ShippingDocumentPrintDetail',
      'ShippingDocumentSpecification' => 'FedexApiClass\\Lib\\ShippingDocumentSpecification',
      'SignatureOptionDetail' => 'FedexApiClass\\Lib\\SignatureOptionDetail',
      'SmartPostShipmentDetail' => 'FedexApiClass\\Lib\\SmartPostShipmentDetail',
      'StringBarcode' => 'FedexApiClass\\Lib\\StringBarcode',
      'Surcharge' => 'FedexApiClass\\Lib\\Surcharge',
      'Tax' => 'FedexApiClass\\Lib\\Tax',
      'TaxpayerIdentification' => 'FedexApiClass\\Lib\\TaxpayerIdentification',
      'TrackingId' => 'FedexApiClass\\Lib\\TrackingId',
      'TransactionDetail' => 'FedexApiClass\\Lib\\TransactionDetail',
      'UploadDocumentDetail' => 'FedexApiClass\\Lib\\UploadDocumentDetail',
      'UploadDocumentReferenceDetail' => 'FedexApiClass\\Lib\\UploadDocumentReferenceDetail',
      'ValidateShipmentRequest' => 'FedexApiClass\\Lib\\ValidateShipmentRequest',
      'ValidatedHazardousCommodityContent' => 'FedexApiClass\\Lib\\ValidatedHazardousCommodityContent',
      'ValidatedHazardousCommodityDescription' => 'FedexApiClass\\Lib\\ValidatedHazardousCommodityDescription',
      'ValidatedHazardousContainer' => 'FedexApiClass\\Lib\\ValidatedHazardousContainer',
      'VariableHandlingChargeDetail' => 'FedexApiClass\\Lib\\VariableHandlingChargeDetail',
      'VariableHandlingCharges' => 'FedexApiClass\\Lib\\VariableHandlingCharges',
      'Volume' => 'FedexApiClass\\Lib\\Volume',
      'Weight' => 'FedexApiClass\\Lib\\Weight',
      'WebAuthenticationDetail' => 'FedexApiClass\\Lib\\WebAuthenticationDetail',
      'WebAuthenticationCredential' => 'FedexApiClass\\Lib\\WebAuthenticationCredential',
      'VersionId' => 'FedexApiClass\\Lib\\VersionId',
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

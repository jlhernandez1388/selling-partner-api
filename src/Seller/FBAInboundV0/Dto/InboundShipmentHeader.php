<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentHeader extends BaseDto
{
    /**
     * @param  string  $shipmentName The name for the shipment. Use a naming convention that helps distinguish between shipments over time, such as the date the shipment was created.
     * @param  string  $destinationFulfillmentCenterId The identifier for the fulfillment center to which the shipment will be shipped. Get this value from the InboundShipmentPlan object in the response returned by the createInboundShipmentPlan operation.
     * @param  bool  $areCasesRequired Indicates whether or not an inbound shipment contains case-packed boxes. Note: A shipment must contain either all case-packed boxes or all individually packed boxes.
     *
     * Possible values:
     *
     * true - All boxes in the shipment must be case packed.
     *
     * false - All boxes in the shipment must be individually packed.
     *
     * Note: If AreCasesRequired = true for an inbound shipment, then the value of QuantityInCase must be greater than zero for every item in the shipment. Otherwise the service returns an error.
     * @param  string  $shipmentStatus Indicates the status of the inbound shipment. When used with the createInboundShipment operation, WORKING is the only valid value. When used with the updateInboundShipment operation, possible values are WORKING, SHIPPED or CANCELLED.
     * @param  string  $labelPrepPreference The preference for label preparation for an inbound shipment.
     * @param  string  $intendedBoxContentsSource How the seller intends to provide box contents information for a shipment. Leaving this field blank is equivalent to selecting `NONE`, which will incur a fee if the seller does not provide box contents information.
     */
    public function __construct(
        public readonly ?string $shipmentName = null,
        public readonly ?Address $shipFromAddress = null,
        public readonly ?string $destinationFulfillmentCenterId = null,
        public readonly ?bool $areCasesRequired = null,
        public readonly ?string $shipmentStatus = null,
        public readonly ?string $labelPrepPreference = null,
        public readonly ?string $intendedBoxContentsSource = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

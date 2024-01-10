<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RemovalShipmentAdjustmentEvent extends BaseDto
{
    protected static array $complexArrayTypes = [
        'removalShipmentItemAdjustmentList' => [RemovalShipmentItemAdjustment::class],
    ];

    /**
     * @param  ?string  $postedDate
     * @param  ?string  $adjustmentEventId The unique identifier for the adjustment event.
     * @param  ?string  $merchantOrderId The merchant removal orderId.
     * @param  ?string  $orderId The orderId for shipping inventory.
     * @param  ?string  $transactionType The type of removal order.
     *
     * Possible values:
     *
     * * WHOLESALE_LIQUIDATION.
     * @param  RemovalShipmentItemAdjustment[]  $removalShipmentItemAdjustmentList A comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $postedDate = null,
        public readonly ?string $adjustmentEventId = null,
        public readonly ?string $merchantOrderId = null,
        public readonly ?string $orderId = null,
        public readonly ?string $transactionType = null,
        public readonly ?array $removalShipmentItemAdjustmentList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
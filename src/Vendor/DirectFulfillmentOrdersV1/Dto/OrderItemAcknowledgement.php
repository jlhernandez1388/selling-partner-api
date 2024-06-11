<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderItemAcknowledgement extends Dto
{
    /**
     * @param  string  $itemSequenceNumber  Line item sequence number for the item.
     * @param  ItemQuantity  $acknowledgedQuantity  Details of quantity ordered.
     * @param  ?string  $buyerProductIdentifier  Buyer's standard identification number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Should be the same as was provided in the purchase order.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ItemQuantity $acknowledgedQuantity,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
    ) {
    }
}
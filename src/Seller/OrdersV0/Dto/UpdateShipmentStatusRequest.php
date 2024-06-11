<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class UpdateShipmentStatusRequest extends Dto
{
    /**
     * @param  string  $marketplaceId  The unobfuscated marketplace identifier.
     * @param  string  $shipmentStatus  The shipment status to apply.
     * @param  ?OrderItems  $orderItems
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $shipmentStatus,
        public readonly ?OrderItems $orderItems = null,
    ) {
    }
}
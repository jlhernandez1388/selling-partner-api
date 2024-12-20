<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class PackageGroupingInput extends Dto
{
    protected static array $complexArrayTypes = ['boxes' => BoxInput::class];

    /**
     * @param  BoxInput[]  $boxes  Box level information being provided.
     * @param  ?string  $packingGroupId  The ID of the `packingGroup` that packages are grouped according to. The `PackingGroupId` can only be provided before placement confirmation, and it must belong to the confirmed `PackingOption`. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     * @param  ?string  $shipmentId  The ID of the shipment that packages are grouped according to. The `ShipmentId` can only be provided after placement confirmation, and the shipment must belong to the confirmed placement option. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     */
    public function __construct(
        public array $boxes,
        public ?string $packingGroupId = null,
        public ?string $shipmentId = null,
    ) {}
}

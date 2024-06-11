<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Carton extends Dto
{
    protected static array $complexArrayTypes = [
        'items' => [PurchaseOrderItems::class],
        'cartonIdentifiers' => [ContainerIdentification::class],
    ];

    /**
     * @param  string  $cartonSequenceNumber  Carton sequence number for the carton. The first carton will be 001, the second 002, and so on. This number is used as a reference to refer to this carton from the pallet level.
     * @param  PurchaseOrderItems[]  $items  A list of the items that are associated to the PO in this transport and their associated details.
     * @param  ContainerIdentification[]|null  $cartonIdentifiers  A list of carton identifiers.
     * @param  ?Dimensions  $dimensions  Physical dimensional measurements of a container.
     * @param  ?Weight  $weight  The weight of the shipment.
     * @param  ?string  $trackingNumber  This is required to be provided for every carton in the small parcel shipments.
     */
    public function __construct(
        public readonly string $cartonSequenceNumber,
        public readonly array $items,
        public readonly ?array $cartonIdentifiers = null,
        public readonly ?Dimensions $dimensions = null,
        public readonly ?Weight $weight = null,
        public readonly ?string $trackingNumber = null,
    ) {
    }
}
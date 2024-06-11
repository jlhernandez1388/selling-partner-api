<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class ScheduledPackageId extends Dto
{
    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  ?string  $packageId  An Amazon-defined identifier for the scheduled package.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly ?string $packageId = null,
    ) {
    }
}
<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class SpdTrackingDetailInput extends Dto
{
    protected static array $complexArrayTypes = ['spdTrackingItems' => SpdTrackingItemInput::class];

    /**
     * @param  SpdTrackingItemInput[]  $spdTrackingItems  List of Small Parcel Delivery (SPD) tracking items input.
     */
    public function __construct(
        public array $spdTrackingItems,
    ) {}
}

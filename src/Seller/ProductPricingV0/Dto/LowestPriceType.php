<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class LowestPriceType extends Dto
{
    protected static array $attributeMap = [
        'listingPrice' => 'ListingPrice',
        'landedPrice' => 'LandedPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
    ];

    /**
     * @param  string  $condition  Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     * @param  string  $fulfillmentChannel  Indicates whether the item is fulfilled by Amazon or by the seller.
     * @param  ?int  $quantityTier  Indicates at what quantity this price becomes active.
     */
    public function __construct(
        public string $condition,
        public string $fulfillmentChannel,
        public MoneyType $listingPrice,
        public ?string $offerType = null,
        public ?int $quantityTier = null,
        public ?string $quantityDiscountType = null,
        public ?MoneyType $landedPrice = null,
        public ?MoneyType $shipping = null,
        public ?Points $points = null,
    ) {}
}

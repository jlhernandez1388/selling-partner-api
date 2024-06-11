<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class CompetitivePricingType extends Dto
{
    protected static array $attributeMap = [
        'competitivePrices' => 'CompetitivePrices',
        'numberOfOfferListings' => 'NumberOfOfferListings',
        'tradeInValue' => 'TradeInValue',
    ];

    protected static array $complexArrayTypes = [
        'competitivePrices' => [CompetitivePriceType::class],
        'numberOfOfferListings' => [OfferListingCountType::class],
    ];

    /**
     * @param  CompetitivePriceType[]  $competitivePrices  A list of competitive pricing information.
     * @param  OfferListingCountType[]  $numberOfOfferListings  The number of active offer listings for the item that was submitted. The listing count is returned by condition, one for each listing condition value that is returned.
     * @param  ?MoneyType  $tradeInValue
     */
    public function __construct(
        public readonly array $competitivePrices,
        public readonly array $numberOfOfferListings,
        public readonly ?MoneyType $tradeInValue = null,
    ) {
    }
}
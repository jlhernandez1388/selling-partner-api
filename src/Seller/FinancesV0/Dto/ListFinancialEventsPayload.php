<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ListFinancialEventsPayload extends Dto
{
    protected static array $attributeMap = ['nextToken' => 'NextToken', 'financialEvents' => 'FinancialEvents'];

    /**
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     * @param  ?FinancialEvents  $financialEvents  Contains all information related to a financial event.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
        public readonly ?FinancialEvents $financialEvents = null,
    ) {
    }
}
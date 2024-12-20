<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class PartyIdentification extends Dto
{
    protected static array $complexArrayTypes = ['taxRegistrationDetails' => TaxRegistrationDetail::class];

    /**
     * @param  string  $partyId  Assigned Identification for the party.
     * @param  ?Address  $address  Address of the party.
     * @param  TaxRegistrationDetail[]|null  $taxRegistrationDetails  Tax registration details of the entity.
     */
    public function __construct(
        public string $partyId,
        public ?Address $address = null,
        public ?array $taxRegistrationDetails = null,
    ) {}
}

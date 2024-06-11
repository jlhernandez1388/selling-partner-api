<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class AppointmentSlot extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $startTime  Time window start time in ISO 8601 format.
     * @param  ?\DateTimeInterface  $endTime  Time window end time in ISO 8601 format.
     * @param  ?int  $capacity  Number of resources for which a slot can be reserved.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $startTime = null,
        public readonly ?\DateTimeInterface $endTime = null,
        public readonly ?int $capacity = null,
    ) {
    }
}
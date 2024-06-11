<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Window extends Dto
{
    /**
     * @param  \DateTimeInterface  $end  The end timestamp of the window.
     * @param  \DateTimeInterface  $start  The start timestamp of the window.
     * @param  ?\DateTimeInterface  $editableUntil  The timestamp at which this Window can no longer be edited.
     */
    public function __construct(
        public readonly \DateTimeInterface $end,
        public readonly \DateTimeInterface $start,
        public readonly ?\DateTimeInterface $editableUntil = null,
    ) {
    }
}
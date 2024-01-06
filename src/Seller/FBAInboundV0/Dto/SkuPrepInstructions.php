<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SkuPrepInstructions extends BaseDto
{
    protected static array $complexArrayTypes = ['amazonPrepFeesDetailsList' => [AmazonPrepFeesDetails::class]];

    /**
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $barcodeInstruction Labeling requirements for the item. For more information about FBA labeling requirements, see the Seller Central Help for your marketplace.
     * @param  string  $prepGuidance Item preparation instructions.
     * @param  string[]  $prepInstructionList A list of preparation instructions to help with item sourcing decisions.
     * @param  AmazonPrepFeesDetails[]  $amazonPrepFeesDetailsList A list of preparation instructions and fees for Amazon to prep goods for shipment.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly string $asin,
        public readonly string $barcodeInstruction,
        public readonly string $prepGuidance,
        public readonly array $prepInstructionList,
        public readonly array $amazonPrepFeesDetailsList,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

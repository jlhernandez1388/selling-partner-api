<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AsinPrepInstructions extends BaseDto
{
    /**
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $barcodeInstruction Labeling requirements for the item. For more information about FBA labeling requirements, see the Seller Central Help for your marketplace.
     * @param  string  $prepGuidance Item preparation instructions.
     * @param  string[]  $prepInstructionList A list of preparation instructions to help with item sourcing decisions.
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $barcodeInstruction,
        public readonly string $prepGuidance,
        public readonly array $prepInstructionList,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

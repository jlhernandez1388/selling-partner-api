<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Error extends BaseDto
{
    /**
     * @param  string  $code An error code that identifies the type of error that occured.
     * @param  string  $message A message that describes the error condition in a human-readable form.
     * @param  string  $details Additional details that can help the caller understand or fix the issue.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $message = null,
        public readonly ?string $details = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

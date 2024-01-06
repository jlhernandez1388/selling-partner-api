<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\CommonTransportResult;

final class ConfirmTransportResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly CommonTransportResult $payload,
        public readonly array $errors,
    ) {
    }
}

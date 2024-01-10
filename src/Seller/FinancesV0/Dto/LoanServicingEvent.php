<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LoanServicingEvent extends BaseDto
{
    /**
     * @param  ?Currency  $loanAmount A currency type and amount.
     * @param  ?string  $sourceBusinessEventType The type of event.
     *
     * Possible values:
     *
     * * LoanAdvance
     *
     * * LoanPayment
     *
     * * LoanRefund
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?Currency $loanAmount = null,
        public readonly ?string $sourceBusinessEventType = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
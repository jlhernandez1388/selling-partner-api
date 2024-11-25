<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum ShipmentStatus: string
{
    use EnumTrait;

    case PURCHASED = 'Purchased';
    case REFUND_PENDING = 'RefundPending';
    case REFUND_REJECTED = 'RefundRejected';
    case REFUND_APPLIED = 'RefundApplied';
}

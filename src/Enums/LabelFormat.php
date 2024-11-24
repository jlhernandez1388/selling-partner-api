<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum LabelFormat: string
{
    use EnumTrait;

    case PNG = 'PNG';
    case PDF = 'PDF';
    case ZPL203 = 'ZPL203';
    case ZPL300 = 'ZPL300';
    case ShippingServiceDefault = 'ShippingServiceDefault';
}

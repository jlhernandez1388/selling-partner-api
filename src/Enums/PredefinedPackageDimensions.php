<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum PredefinedPackageDimensions: string
{
    use EnumTrait;

    // FedEx Boxes
    case FEDEX_BOX_10KG = 'FedEx_Box_10kg';
    case FEDEX_BOX_25KG = 'FedEx_Box_25kg';
    case FEDEX_BOX_EXTRA_LARGE_1 = 'FedEx_Box_Extra_Large_1';
    case FEDEX_BOX_EXTRA_LARGE_2 = 'FedEx_Box_Extra_Large_2';
    case FEDEX_BOX_LARGE_1 = 'FedEx_Box_Large_1';
    case FEDEX_BOX_LARGE_2 = 'FedEx_Box_Large_2';
    case FEDEX_BOX_MEDIUM_1 = 'FedEx_Box_Medium_1';
    case FEDEX_BOX_MEDIUM_2 = 'FedEx_Box_Medium_2';
    case FEDEX_BOX_SMALL_1 = 'FedEx_Box_Small_1';
    case FEDEX_BOX_SMALL_2 = 'FedEx_Box_Small_2';
    case FEDEX_ENVELOPE = 'FedEx_Envelope';
    case FEDEX_PADDED_PAK = 'FedEx_Padded_Pak';
    case FEDEX_PAK_1 = 'FedEx_Pak_1';
    case FEDEX_PAK_2 = 'FedEx_Pak_2';
    case FEDEX_TUBE = 'FedEx_Tube';
    case FEDEX_XL_PAK = 'FedEx_XL_Pak';

    // UPS Boxes
    case UPS_BOX_10KG = 'UPS_Box_10kg';
    case UPS_BOX_25KG = 'UPS_Box_25kg';
    case UPS_EXPRESS_BOX = 'UPS_Express_Box';
    case UPS_EXPRESS_BOX_LARGE = 'UPS_Express_Box_Large';
    case UPS_EXPRESS_BOX_MEDIUM = 'UPS_Express_Box_Medium';
    case UPS_EXPRESS_BOX_SMALL = 'UPS_Express_Box_Small';
    case UPS_EXPRESS_ENVELOPE = 'UPS_Express_Envelope';
    case UPS_EXPRESS_HARD_PAK = 'UPS_Express_Hard_Pak';
    case UPS_EXPRESS_LEGAL_ENVELOPE = 'UPS_Express_Legal_Envelope';
    case UPS_EXPRESS_PAK = 'UPS_Express_Pak';
    case UPS_EXPRESS_TUBE = 'UPS_Express_Tube';
    case UPS_LABORATORY_PAK = 'UPS_Laboratory_Pak';
    case UPS_PAD_PAK = 'UPS_Pad_Pak';
    case UPS_PALLET = 'UPS_Pallet';

    // USPS Boxes
    case USPS_CARD = 'USPS_Card';
    case USPS_FLAT = 'USPS_Flat';
    case USPS_FLATRATECARDBOARDENVELOPE = 'USPS_FlatRateCardboardEnvelope';
    case USPS_FLATRATEENVELOPE = 'USPS_FlatRateEnvelope';
    case USPS_FLATRATEGIFTCARDENVELOPE = 'USPS_FlatRateGiftCardEnvelope';
    case USPS_FLATRATELEGALENVELOPE = 'USPS_FlatRateLegalEnvelope';
    case USPS_FLATRATEPADDEDENVELOPE = 'USPS_FlatRatePaddedEnvelope';
    case USPS_FLATRATEWINDOWENVELOPE = 'USPS_FlatRateWindowEnvelope';
    case USPS_LARGE_FLATRATEBOARDGAMEBOX = 'USPS_LargeFlatRateBoardGameBox';
    case USPS_LARGE_FLATRATEBOX = 'USPS_LargeFlatRateBox';
    case USPS_LETTER = 'USPS_Letter';
    case USPS_MEDIUM_FLATRATEBOX1 = 'USPS_MediumFlatRateBox1';
    case USPS_MEDIUM_FLATRATEBOX2 = 'USPS_MediumFlatRateBox2';
    case USPS_REGIONALRATEBOXA1 = 'USPS_RegionalRateBoxA1';
    case USPS_REGIONALRATEBOXA2 = 'USPS_RegionalRateBoxA2';
    case USPS_REGIONALRATEBOXB1 = 'USPS_RegionalRateBoxB1';
    case USPS_REGIONALRATEBOXB2 = 'USPS_RegionalRateBoxB2';
    case USPS_REGIONALRATEBOXC = 'USPS_RegionalRateBoxC';
    case USPS_SMALL_FLATRATEBOX = 'USPS_SmallFlatRateBox';
    case USPS_SMALL_FLATRATEENVELOPE = 'USPS_SmallFlatRateEnvelope';
}

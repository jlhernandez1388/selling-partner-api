<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use SellingPartnerApi\Response;

final class ReportScheduleList extends Response
{
    protected static array $complexArrayTypes = ['reportSchedules' => [ReportSchedule::class]];

    /**
     * @param  ReportSchedule[]  $reportSchedules  Detailed information about a report schedule.
     */
    public function __construct(
        public readonly array $reportSchedules,
    ) {
    }
}
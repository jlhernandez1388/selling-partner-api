<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class ServiceJob extends Dto
{
    protected static array $complexArrayTypes = [
        'preferredAppointmentTimes' => AppointmentTime::class,
        'appointments' => Appointment::class,
        'associatedItems' => AssociatedItem::class,
    ];

    /**
     * @param  ?\DateTimeInterface  $createTime  The date and time of the creation of the job in ISO 8601 format.
     * @param  ?string  $serviceJobId  Amazon identifier for the service job.
     * @param  ?string  $serviceJobStatus  The status of the service job.
     * @param  ?ScopeOfWork  $scopeOfWork  The scope of work for the order.
     * @param  ?Seller  $seller  Information about the seller of the service job.
     * @param  ?ServiceJobProvider  $serviceJobProvider  Information about the service job provider.
     * @param  AppointmentTime[]|null  $preferredAppointmentTimes  A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order.
     * @param  Appointment[]|null  $appointments  A list of appointments.
     * @param  ?string  $serviceOrderId  The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     * @param  ?string  $marketplaceId  The marketplace identifier.
     * @param  ?string  $storeId  The Amazon-defined identifier for the region scope.
     * @param  ?Buyer  $buyer  Information about the buyer.
     * @param  AssociatedItem[]|null  $associatedItems  A list of items associated with the service job.
     * @param  ?ServiceLocation  $serviceLocation  Information about the location of the service job.
     */
    public function __construct(
        public ?\DateTimeInterface $createTime = null,
        public ?string $serviceJobId = null,
        public ?string $serviceJobStatus = null,
        public ?ScopeOfWork $scopeOfWork = null,
        public ?Seller $seller = null,
        public ?ServiceJobProvider $serviceJobProvider = null,
        public ?array $preferredAppointmentTimes = null,
        public ?array $appointments = null,
        public ?string $serviceOrderId = null,
        public ?string $marketplaceId = null,
        public ?string $storeId = null,
        public ?Buyer $buyer = null,
        public ?array $associatedItems = null,
        public ?ServiceLocation $serviceLocation = null,
    ) {}
}

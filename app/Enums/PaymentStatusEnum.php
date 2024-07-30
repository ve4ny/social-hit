<?php

namespace App\Enums;

class PaymentStatusEnum
{
    public const CREATED = 'created';
    public const PENDING = 'pending';
    public const WAITING_FOR_CAPTURE = 'waiting_for_capture';
    public const SUCCEEDED = 'succeeded';
    public const FAILED = 'failed';
    public const CANCELED = 'canceled';
}

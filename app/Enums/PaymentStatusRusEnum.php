<?php

namespace App\Enums;

class PaymentStatusRusEnum
{
    public const CREATED = 'Создана';
    public const PENDING = 'В процессе';
    public const WAITING_FOR_CAPTURE = 'В процессе';
    public const SUCCEEDED = 'Выполнена';
    public const FAILED = 'Ошибка';
    public const CANCELED = 'Отменена';
}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'description',
        'status',
        'transaction_id',
        'payment_method',
    ];

    protected array $status = [
            'created' => 'Создана',
            'pending' => 'В процессе',
            'waiting_for_capture' => 'В процессе',
            'succeeded'  => 'Выполнена',
            'canceled' => 'Отменена',
            'failed' => 'Ошибка'
        ];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn () => [
                'date' => Carbon::parse($this->attributes['created_at'])->format('d.m.Y'),
                'time' => Carbon::parse($this->attributes['created_at'])->format('H:i')
            ],
        );
    }

    protected function paymentMethod(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value === 'bank_card' ? 'Карта' : '',
        );
    }

//    protected function status(): Attribute
//    {
//        return Attribute::make(
//            get: fn ($value) => $this->status[$value],
//        );
//    }
}

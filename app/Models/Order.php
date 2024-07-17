<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Order extends Model
{
    use HasFactory, AsSource, Filterable;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'jap_id',
        'user_id',
        'service_id',
        'quantity',
        'sum',
        'link',
        'start_count',
        'remains',
        'status',
        'pay_status'
    ];

    const PENDING = 'Pending';
    const IN_PROGRESS = 'In progress';
    const COMPLETED = 'Completed';

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = self::generateUniqueId();
        });
    }

    public function getSumAttribute($value)
    {
        return $value / 10000;
    }

    // Установка цены в тысячных долях цента
    public function setSumAttribute($value)
    {
        $numericValue = floatval(str_replace(['$'], '', $value));
        if (is_numeric($numericValue)) {
            $this->attributes['sum'] = $numericValue * 10000;
        } else {
            $this->attributes['sum'] = 0; // Или обработка как-то иначе
        }
    }

    public static function generateUniqueId(): string
    {
        return Str::random(8); // Генерируем случайную строку длиной 8 символов
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}

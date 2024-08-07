<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Service extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
      'service_id',
      'name',
      'rus_name',
      'type',
      'jap_rate',
      'rate',
      'min',
      'max',
      'dripfeed',
      'refill',
      'cancel',
      'jap_old',
      'category_id',
      'show'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function advantage(): HasOne
    {
        return $this->hasOne(Advantage::class, 'service_id');
    }

    public function promo(): MorphMany
    {
        return $this->morphMany(Promo::class, 'promotable');
    }

    public function getJapRateAttribute($value)
    {
        return $value / 10000;
    }

    // Установка цены в тысячных долях цента
    public function setJapRateAttribute($value)
    {
        $numericValue = floatval(str_replace(['$'], '', $value));
        if (is_numeric($numericValue)) {
            $this->attributes['jap_rate'] = $numericValue * 10000;
        } else {
            $this->attributes['jap_rate'] = 0; // Или обработка как-то иначе
        }
    }

    public function getJapOldAttribute($value)
    {

        return $value / 10000;
    }

    // Установка цены в тысячных долях цента
    public function setJapOldAttribute($value)
    {
        $numericValue = floatval(str_replace(['$'], '', $value));
        if (is_numeric($numericValue)) {
            $this->attributes['jap_old'] = $numericValue * 10000;
        } else {
            $this->attributes['jap_old'] = null;
        }
    }

    public function getRateAttribute($value)
    {
        return $value / 10000;
    }

    // Установка цены в тысячных долях цента
    public function setRateAttribute($value)
    {
        $numericValue = floatval(str_replace(['$'], '', $value));
        if (is_numeric($numericValue)) {
            $this->attributes['rate'] = $numericValue * 10000;
        } else {
            $this->attributes['rate'] = 0; // Или обработка как-то иначе
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
      'category_id',
      'show'
    ];
}

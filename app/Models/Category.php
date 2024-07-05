<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'social_id',
        'jap_name',
        'rus_name',
        'main_show',
        'show'
    ];
}

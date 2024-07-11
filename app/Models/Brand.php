<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Brand extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'name'
    ];

    protected function image(): Attribute
    {
        $image = $this->attachment->first();
        return Attribute::make(
            get: fn ($value) => 'storage/' . $image->path . $image->name . '.' . $image->extension,
        );
    }
}

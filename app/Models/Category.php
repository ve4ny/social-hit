<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'social_id',
        'jap_name',
        'rus_name',
        'main_show',
        'show'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id');
    }

    protected function image(): Attribute
    {

        $image = $this->attachment->first();
        if(!$image){
            return Attribute::make(
                get: fn ($value) => null,
            );
        }
        return Attribute::make(
            get: fn ($value) => 'storage/' . $image->path . $image->name . '.' . $image->extension,
        );
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Social extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
      'name',
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    protected function image(): Attribute
    {
        $image = $this->attachment->first();
        return Attribute::make(
            get: fn ($value) => 'storage/' . $image->path . $image->name . '.' . $image->extension,
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
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

    public function social(): BelongsTo
    {
        return $this->belongsTo(Social::class, 'social_id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id');
    }

    public function promo(): MorphMany
    {
        return $this->morphMany(Promo::class, 'promotable');
    }

    public function similar(): Collection
    {
        $unsortedSimilar = Category::where('social_id', $this->social->id)
            ->whereNot('id',  $this->id)
            ->where('show', true)
            ->with('services')
            ->get();
        foreach ($unsortedSimilar as $s) {
            $s->price = $s->services->min('rate');
        }
        return $unsortedSimilar->sortBy('price')->take(5);
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

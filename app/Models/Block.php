<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Block extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
      'ident',
      'title',
      'text'
    ];

    public function pcImage()
    {
        return $this->morphToMany(Attachment::class, 'attachmentable', 'attachmentable');
    }

// Many-to-Many (no foreign id on table, should be uploaded with groups() function)
    public function mobileImage()
    {
        return $this->morphToMany(Attachment::class, 'attachmentable', 'attachmentable');
    }

    protected function image(): Attribute
    {
            $images = $this->attachment()->get();
            if($images){
                $arr = [];
                foreach($images as $image) {
                    if($image->group === 'mobile') {
                        $arr['mobile'] = 'storage/' . $image->path . $image->name . '.' . $image->extension;
                    } else {
                        $arr['pc'] = 'storage/' . $image->path . $image->name . '.' . $image->extension;
                    }
                }
                return Attribute::make(
                    get: fn ($value) => $arr,
                );
            }

    }
}

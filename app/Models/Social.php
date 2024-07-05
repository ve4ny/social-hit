<?php

namespace App\Models;

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

    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class, 'attachmentable_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'country',
        'referral_code',
        'referrer'
    ];

    public function referrals(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function whoReferred(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referrer');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['eventType', 'eventGuests', 'collaborations'];

    public function eventType(): BelongsTo
    {

        return $this->belongsTo(EventType::class);
    }

    public function eventGuests(): HasMany{

        return $this->hasMany(EventGuest::class);
    }

    public function collaborations(): HasMany
    {
        return $this->hasMany(Collaboration::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Semester extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}

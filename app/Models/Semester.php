<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'semester'];

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

}

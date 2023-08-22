<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'reg';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function session(): BelongsTo {
        return $this->belongsTo(Session::class);
    }

    public function studentInAbroad(): HasMany
    {
        return $this->hasMany(StudentInAbroad::class);
    }

    public function otherNationalities(): HasMany
    {
        return $this->hasMany(OtherNationality::class);
    }

    public function tribes(): HasMany
    {
        return $this->hasMany(Tribe::class);
    }

    public function disabled(): HasMany
    {
        return $this->hasMany(Disabled::class);
    }

    public function profile(): HasOne
    {
        return $this->hasOne(StudentProfile::class);
    }

    public function projects(): MorphMany
    {
        return $this->morphMany(Project::class, 'projectable');
    }

    public function publications(): morphMany
    {
        return $this->morphMany(Publication::class, 'publicationable');
    }

}

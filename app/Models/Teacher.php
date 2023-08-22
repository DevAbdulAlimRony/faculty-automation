<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department(): BelongsTo{
        return $this->belongsTo(Department::class);
    }

    public function designation(): BelongsTo{
        return $this->belongsTo(Designation::class);
    }

    public function room(): BelongsTo{
        return $this->belongsTo(Room::class);
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Publication extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function publicationable(): MorphTo
    {
        return $this->morphTo();
    }
}

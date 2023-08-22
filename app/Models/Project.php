<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function projectable(): MorphTo
    {
        return $this->morphTo();
    }
}

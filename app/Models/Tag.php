<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function events(): MorphToMany
    {
        return $this->morphedByMany(Event::class, 'taggable');
    }

    public function notices(): MorphToMany
    {
        return $this->morphedByMany(Notice::class, 'taggable');
    }
}

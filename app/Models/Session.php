<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['years', 'batch_name'];

    public function semesters(): HasMany
    {
        return $this->hasMany(Semester::class);
    }

    // public function students()
    // {
    //     return $this->hasMany(Student::class);
    // }
}

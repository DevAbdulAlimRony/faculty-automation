<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentInAbroad extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function student(): belongsTo{
        return $this->belongsTo(Student::class);
    }
}

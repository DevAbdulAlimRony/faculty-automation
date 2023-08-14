<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';
    protected $fillable = ['code', 'title', 'credit', 'semester_id', 'department_id', 'coursetype_id'];

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function coursetype(): BelongsTo
    {
        return $this->belongsTo(Coursetype::class);
    }
}

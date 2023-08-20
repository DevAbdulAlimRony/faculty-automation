<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';
    protected $hidden = ['id'];
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'year' => 'date:Y',
    ];

    protected function title(): Attribute{
        return Attribute::make(
            set: fn (string $value) => strtolower($value),
            get: fn (string $value) => ucwords(str_ireplace(['cse', 'pstu'], ['CSE', 'PSTU'], $value)),
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capital',
        'population',
        'continent',
        'sub_region',
        'flag_url',
        'motto',
        'languages',
        'additional_info'
    ];

    protected $casts = [
        'languages' => 'array'
    ];
}
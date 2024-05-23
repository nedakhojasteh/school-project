<?php

namespace App\Models;

use App\Enums\EmploymentDegreeEnum;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'employments';

    protected $fillable = [
        'name',
        'family',
        'telephone',
        'address',
        'degree'
    ];

    protected $casts = [
        'degree' => EmploymentDegreeEnum::class
    ];
}

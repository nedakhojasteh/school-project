<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employment extends Model
{
    protected $table = 'employments';

    protected $fillable = [
        'name',
        'family',
        'telephone',
        'address',
        'degree'
    ];
}

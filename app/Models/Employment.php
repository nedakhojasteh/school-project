<?php

namespace App\Models;

use App\Enums\EmploymentDegreeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_employment');
    }
}

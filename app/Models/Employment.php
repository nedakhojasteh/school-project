<?php

namespace App\Models;

use App\Enums\EmploymentDegreeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function school():HasOne
    {
        return $this->hasOne(School::class);
    }
}

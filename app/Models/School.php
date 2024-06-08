<?php

namespace App\Models;

use App\Enums\SchoolDistrictEnum;
use App\Enums\SchoolTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class School extends Model
{
    protected $table = 'schools';
    protected $fillable = [
        'name',
        'address',
        'telephone',
        'class_count',
        'type',
        'district',
    ];

    protected function casts(): array
    {
        return [
            'type' => SchoolTypeEnum::class,
            'district' => SchoolDistrictEnum::class,
        ];
    }

    public  function manager():BelongsTo
    {
        return $this->belongsTo(Employment::class);
    }
}

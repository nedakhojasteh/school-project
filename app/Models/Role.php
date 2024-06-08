<?php

namespace App\Models;

use App\Enums\RoleNameEnum;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'slug'
    ];
    protected $casts = [
        'name' => RoleNameEnum::class
    ];

    public function getRouteKeyName():string
    {
        return 'slug';
    }
}

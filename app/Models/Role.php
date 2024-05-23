<?php

namespace App\Models;

class Role
{
    protected string $table = 'rules';

    protected $fillabale = [
        'name',
        'slug'
    ];
    protected array $cast = [
        'name' => RuleNameEnum::class
    ];
}

<?php

namespace App\Rules;

use App\Enums\RoleNameEnum;
use App\Models\Employment;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RoleControlRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        abort_if(
            Employment::find($value->validated('manager'))->roles()->wherePivot('slug', RoleNameEnum::MANAGER->value)->doesntExist(),
            $fail(" این کاربر امکان ورود ندارد")
        );
    }
}

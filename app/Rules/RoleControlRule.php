<?php

namespace App\Rules;

use App\Enums\RoleNameEnum;
use App\Models\Employment;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;


class  RoleControlRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

       if(Employment::find($value)
       ->roles()
       ->where('slug', RoleNameEnum::MANAGER->value)->doesntExist())

       {
           $fail(' این $attribute امکان ورود ندارد');
       }


    }
}

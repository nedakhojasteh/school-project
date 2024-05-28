<?php

namespace App\Http\Requests\Role;

use App\Enums\RoleNameEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string',Rule::enum(RoleNameEnum::class)],
            'slug' => ['required', 'string', Rule::unique('roles','slug')]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

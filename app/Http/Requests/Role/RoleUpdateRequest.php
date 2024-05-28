<?php

namespace App\Http\Requests\Role;

use App\Enums\RoleNameEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class RoleUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string',Rule::enum(RoleNameEnum::class)],
            'slug' => ['required', 'string', Rule::unique('roles','slug')->ignore($this->id)]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

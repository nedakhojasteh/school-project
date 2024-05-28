<?php

namespace App\Http\Requests\School;

use App\Enums\SchoolDistrictEnum;
use App\Enums\SchoolTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'manager' => ['required', 'integer', 'exists:employments,id'],
            'name' => ['required', 'min:2'],
            'address' => ['required', 'string', 'min:10', 'max:255'],
            'telephone' => ['required', 'string', 'size:11'],
            'class_count' => ['required', 'integer','gte:1'],
            'type' => ['required', 'string', Rule::enum(SchoolTypeEnum::class)],
            'district' => ['required', 'string', Rule::enum(SchoolDistrictEnum::class)]
        ];
    }
}

<?php

namespace App\Http\Requests\School;

use App\Enums\SchoolDistrictEnum;
use App\Enums\SchoolTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2'],
            'address' => ['required', 'string', 'min:10', 'max:255'],
            'telephone' => ['required', 'string', 'size:11'],
            'class_count' => ['required', 'integer','gte:1'],
            'type' => ['required','string', Rule::enum(SchoolTypeEnum::class)],
            'district' => ['required', 'string', Rule::enum(SchoolDistrictEnum::class)]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

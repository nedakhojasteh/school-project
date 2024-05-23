<?php

namespace App\Http\Requests\Employment;

use App\Enums\EmploymentDegreeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmploymentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:25'],
            'family' => ['required', 'string', 'min:3', 'max:25'],
            'telephone' => ['required', 'string', 'size:11'],
            'address' => ['required', 'string', 'min:10', 'max:50'],
            'degree' => ['required', 'string', Rule::enum(EmploymentDegreeEnum::class)],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

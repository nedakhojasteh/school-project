<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'page' => ['nullable', 'integer', 'gte:1'],
            'size' => ['nullable', 'integer', 'lte:100', 'gte:2']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

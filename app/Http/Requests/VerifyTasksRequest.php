<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class VerifyTasksRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "title" => ['required', 'string', 'min:5', 'max:20'],
            "description" => ['nullable', 'string', 'max:30'],
            "status" => ['boolean']
        ];
    }
}

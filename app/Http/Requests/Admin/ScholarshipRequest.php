<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ScholarshipRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'purpose' => 'required|string',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'provided_by' => 'required|string',
        ];
    }
}

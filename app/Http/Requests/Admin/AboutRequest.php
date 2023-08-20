<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AboutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void{
        // Perform any preprocessing on the input before validation
    }

    public function rules(): array
    {
        return [
        'title' => 'required|between:3,50',
        'overview' => 'nullable',
        'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
        'established' => 'required|digits:4',
        'mission' => 'nullable',
        'vision' => 'nullable',
        'address' => 'nullable|max:255',
        'building' => 'nullable|max:255',
        'latitude' => 'nullable|float',
        'longitude' => 'nullable|float',
        'phone' => 'nullable',
        'email' => 'nullable|safe_email',
        ];
    }

    // For Image in Future: |dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000|between:1024,2048',

    protected function passedValidation(): void{
        if (!$this->has('title')) {
            $this->merge(['title' => 'CSE in PSTU' ]);
        }
    }

    public function attributes(): array{
        return [
        'established' => 'Year',
        ];
    }

    public function messages(): array{
        return[
        'established.digits' => ':attribute must be exactly :digits digits',
        'image.mimes' => 'The file you provided is not an image',
        ];
    }
}

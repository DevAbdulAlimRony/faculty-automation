<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'favicon' => 'sometimes|required|mimes:jpg,png,jpeg,ico',
            'logo' => 'sometimes|required|mimes:jpg,png,jpeg,svg',
            'title' => 'sometimes|required|string|max:60',
            'short_name' => 'sometimes|required|string|max:20',
            'author' => 'sometimes|required|string|max:100',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'welcome-title' => 'sometimes|required|string|max:20',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mov|max:100mb',
            //video-audio validator package in future
            'cse_club_link' => 'sometimes|required|url',
            'admission_link' => 'sometimes|required|url',
        ];
    }
}

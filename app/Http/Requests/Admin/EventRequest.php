<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'event_type_id' => 'exists:event_types,id',
            'place' => 'required|string|max:255',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'about' => 'required|string',
            'registration_link' => 'nullable|url',
            'facebook_link' => ['nullable', 'url', 'regex:/^(https?:\/\/)?(www\.)?facebook\.com\/.*/i'],

        ];
    }
}

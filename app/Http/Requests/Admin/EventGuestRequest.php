<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventGuestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'event_id' => 'required|exists:events,id',
            'name' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'img' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
        ];
    }
}

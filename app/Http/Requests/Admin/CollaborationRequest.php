<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CollaborationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'collaborator' => 'required|string',
            'collaborator_logo' => 'nullable|url',
            'event_id' => 'required|exists:events,id',
        ];
    }
}

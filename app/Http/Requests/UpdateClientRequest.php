<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:3'],

            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user_id)],

            'gender' => ['required', 'in:Male,Female'],

            'date_of_birth' => ['required', 'date'],

            'avatar_image' => ['image', 'mimes:jpeg,png', 'max:2048'],

            // ✅ synced National ID
            'id' => ['required', 'digits:12', Rule::unique('clients', 'id')->ignore($this->id)],

            // ✅ synced phone validation
            'phone' => ['required', 'regex:/^(?:0\\d{9}|\\+94\\d{9})$/'],

            'email_verified_at' => ['nullable', 'date_format:Y-m-d H:i:s'],
        ];
    }
}

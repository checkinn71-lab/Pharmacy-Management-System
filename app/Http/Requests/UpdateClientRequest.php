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

            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user_id)
            ],

            'gender' => ['required', 'in:Male,Female'],

            'date_of_birth' => ['required', 'date'],

            'avatar_image' => ['image', 'mimes:jpeg,png', 'max:2048'],

            // National ID (12 digits)
            'id' => [
                'required',
                'digits:12',
                Rule::unique('clients', 'id')->ignore($this->id)
            ],

            // Phone validation (Sri Lanka)
            'phone' => [
                'required',
                'regex:/^(0\\d{9}|\\+94\\d{9})$/'
            ],

            // Optional password update
            'password' => ['nullable', 'min:6', 'confirmed'],
        ];
    }
}

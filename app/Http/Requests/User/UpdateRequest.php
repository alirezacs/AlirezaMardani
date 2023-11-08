<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . request()->route('user')->id],
            'phone' => ['required', 'unique:users,phone,' . request()->route('user')->id],
            'avatar' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2000'],
            'age' => ['required', 'integer', 'min:10', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'language' => ['required', 'string', 'max:255'],
            'facebook_uri' => ['required', 'string', 'max:255'],
            'twitter_uri' => ['required', 'string', 'max:255'],
            'instagram_uri' => ['required', 'string', 'max:255'],
        ];
    }
}

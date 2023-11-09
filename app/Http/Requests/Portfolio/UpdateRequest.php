<?php

namespace App\Http\Requests\Portfolio;

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
        $this->checkIsActive();
        return [
            'title' => ['required', 'string', 'max:255'],
            'technology' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2000'],
            'description' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * @return void
     */
    private function checkIsActive(): void
    {
        if(!$this->request->has('is_active')){
            $this->request->add(['is_active' => false]);
        }else{
            $this->request->add(['is_active' => true]);
        }
    }
}

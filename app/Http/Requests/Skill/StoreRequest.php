<?php

namespace App\Http\Requests\Skill;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'percent' => ['required', 'integer', 'min:1', 'max:100'],
            'description' => ['required', 'string', 'max:255']
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

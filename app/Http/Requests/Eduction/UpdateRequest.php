<?php

namespace App\Http\Requests\Eduction;

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
            'in' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'description' => ['required', 'min:10'],
            'started_at' => ['required', 'string', 'max:255'],
            'ended_at' => ['required', 'string', 'max:255']
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

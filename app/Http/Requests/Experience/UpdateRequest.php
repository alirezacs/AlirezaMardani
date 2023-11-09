<?php

namespace App\Http\Requests\Experience;

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
        $this->preCheck();
        return [
            'as' => ['required', 'string', 'max:255'],
            'at' => ['required', 'string', 'max:255'],
            'started_at' => ['required', 'string', 'max:255'],
            'ended_at' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * @return void
     */
    public function preCheck(): void
    {
        if(!$this->request->has('present')){
            $this->request->add(['present' => false]);
        }else{
            $this->request->add(['present' => true]);
        }
        if(!$this->request->has('is_active')){
            $this->request->add(['is_active' => false]);
        }else{
            $this->request->add(['is_active' => true]);
        }
    }
}

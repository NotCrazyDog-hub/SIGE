<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InternRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:interns,email,' . $this->route('intern'),
            'course' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'status' => 'boolean',
        ];
    }
    public function messages(): array
    {
        return [
            'course.required' => 'O campo curso é obrigatório.',
            'course.max' => 'O campo curso não pode ser superior a 255 caracteres.'
        ];
    }
}

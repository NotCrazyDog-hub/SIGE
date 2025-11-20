<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'intern_id' => 'required|exists:interns,id',
            'title' => 'required|string|max:255',
            'grade' => 'required|integer|min:0|max:10',
            'work_description' => 'required|string|max:500'
        ];
    }
    public function messages(): array
    {
        return [
            'intern_id.required' => 'O estagiário é obrigatório.',
            'intern_id.exists' => 'O estagiário selecionado é inválido.',
            'grade.required' => 'A nota é obrigatória.',
            'grade.integer' => 'A nota deve ser um número inteiro.',
            'grade.min' => 'A nota mínima é 0.',
            'grade.max' => 'A nota máxima é 10.',
            'work_description.required' => 'A descrição do trabalho é obrigatória.',
            'work_description.max' => 'A descrição do trabalho não pode exceder 500 caracteres.'
        ];
    }
}

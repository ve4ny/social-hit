<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RemindRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:128',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Необходимо ввести email',
            'email.email' => 'Кажется, email введён с ошибкой',
            'email.max' => 'Слишком длинный email'
        ];
    }
}

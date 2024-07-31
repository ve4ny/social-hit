<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'amount' => 'required|numeric|min:1'
        ];
    }

    public function messages(): array
    {
        return [
            'amount.required' => 'Введите сумму платежа',
            'amount.min' => "Введите сумму платежа"
        ];
    }
}

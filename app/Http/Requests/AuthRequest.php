<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
    public function rules()
    {
        return [
            'email' => 'required|string|max:50',
            'password' => 'required|string|min:8|max:16',
            'remember_me' => 'boolean'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Необходимо ввести email',
            'email.string' => 'Email должен передаваться в виде строки',
            'phone.max' => 'Слишком длинный email',
            'password.required' => 'Необходимо ввести пароль',
            'password.string' => 'Пароль должен передаваться в виде строки',
            'password.min' => 'Слишком короткий пароль',
            'password.max' => 'Слишком длинный пароль',
        ];
    }
}

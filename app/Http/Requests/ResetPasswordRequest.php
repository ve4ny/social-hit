<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'email' => '',
            'password' => 'required|string|min:8|max:16',
            'password_confirmation' => 'required|string|max:128|same:password',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Необходимо ввести пароль',
            'password.string' => 'Пароль должен передаваться в виде строки',
            'password.min' => 'Пароль должен содержать не менее 8 символов',
            'password.max' => 'Пароль должен содержать не более 16 символов',
            'password_confirmation.required' => 'Необходимо ввести подтверждение пароля',
            'password_confirmation.string' => 'Подтверждение пароля должно передаваться в виде строки',
            'password_confirmation.max' => 'Слишком длинное подтверждение пароля',
            'password_confirmation.same' => 'Пароли не совпадают',
        ];
    }
}

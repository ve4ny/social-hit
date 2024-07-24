<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'email' => 'required|email|max:128|unique:users',
            'password' => 'required|string|min:8|max:16',
            'password_confirmation' => 'required|string|max:128|same:password',
            'referral_code' => 'nullable|string|exists:user_details,referral_code',
            'remember_me' => 'boolean'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Необходимо ввести email',
            'email.email' => 'Кажется, email введён с ошибкой',
            'email.max' => 'Слишком длинный email',
            'email.unique' => 'Данный email уже занят',
            'password.required' => 'Необходимо ввести пароль',
            'password.string' => 'Пароль должен передаваться в виде строки',
            'password.min' => 'Пароль должен содержать не менее 8 символов',
            'password.max' => 'Пароль должен содержать не более 16 символов',
            'password_confirmation.required' => 'Необходимо ввести подтверждение пароля',
            'password_confirmation.string' => 'Подтверждение пароля должно передаваться в виде строки',
            'password_confirmation.max' => 'Слишком длинное подтверждение пароля',
            'password_confirmation.same' => 'Пароли не совпадают',
            'referral_code.exists' => 'Пользователя с таким реферальным кодом не существует. <br> Попробуйте отсканировать QR код ещё раз'
        ];
    }
}

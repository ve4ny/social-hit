<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileChangesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!auth()->check()){
            return false;
        }
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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'photo.image' => 'Фотография профиля должна быть изображением',
            'photo.mimes' => 'Пожалуйста, выберите изображение формата jpg, jpeg или png',
            'photo.max' => 'Слишком большое изображение. Пожалуйста, используйте изображение не более 2Мб',
            'name' => 'Поле "Имя" обязательно для заполнения',
            'name.string' => 'Поле "Имя" должно быть строковым значением',
            'name.max' => 'Поле "Имя" должно содержать не более 255 символов',
            'country' => 'Пожалуйста, выберите страну',
        ];
    }
}

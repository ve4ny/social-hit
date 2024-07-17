<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Service;

class ValidService implements Rule
{
    public function passes($attribute, $value)
    {
        return Service::find($value['id']) !== null;
    }

    public function message()
    {
        return 'Произошла ошибка. Мы не можем найти указанную услугу. Попробуйте снова позже';
    }
}

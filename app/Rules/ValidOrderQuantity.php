<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidOrderQuantity implements Rule
{
    protected $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function passes($attribute, $value)
    {
        // Add your logic here, for example:
        return $value >= $this->service->max && $value <= $this->service->max;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Количество вне допустимого диапазона';
    }
}

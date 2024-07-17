<?php

namespace App\Http\Requests;

use App\Models\Service;
use App\Rules\ValidOrderQuantity;
use App\Rules\ValidService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class OrderRequest extends FormRequest
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
            'order.service' => ['required', new ValidService()],
            'order.quantity' => ['required'],
            'order.link' => 'required'
        ];
    }

    protected function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            $data = $validator->getData();

            // Retrieve the validated service model instance
            $service = $data['order']['service'] ?? null;

            if ($service instanceof Service) {
                $validator->addRules([
                    'order.quantity' => ['required', new ValidOrderQuantity($service)]
                ]);
            }
        });
    }

    public function messages() {
        return [
          'order.link.required' => 'Укажите ссылку на пост/страницу в соцсети'
        ];
    }
}

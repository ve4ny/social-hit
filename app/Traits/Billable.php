<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

trait Billable
{
    public function charge(float $amount, string $currency = 'RUB', array $paymentData = [])
    {
        $id = config('services.ukassa.id');
        $key = config('services.ukassa.secret_key');
        $url = config('services.ukassa.url');

        try {
            $response = Http::withBasicAuth($id, $key)
                ->post($url, [
                    'amount' => [
                        'value' => number_format($amount, 2, '.', ''),
                        'currency' => $currency,
                    ],
                    'confirmation' => [
                        'type' => 'redirect',
                        'return_url' => $paymentData['return_url'] ?? route('payment.success'),
                    ],
                    'capture' => true,
                    'description' => $paymentData['description'] ?? 'Payment for services',
                    'metadata' => [
                        'user_id' => $this->id,
                    ],
                ]);

            $response->throw();

            return $response->json();
        } catch (\Exception $e) {
            Log::error('UKassa Charge Error: ' . $e->getMessage());

            return [
                'status' => 'failed',
                'message' => 'Ошибка проведения операции. Попробуйте ещё раз позже',
            ];
        }
    }

}

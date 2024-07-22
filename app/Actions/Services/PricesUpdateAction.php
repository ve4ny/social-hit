<?php

namespace App\Actions\Services;

use App\Models\Service;
use App\Services\JapApi;
use Illuminate\Support\Facades\DB;

class PricesUpdateAction
{
    private JapApi $api;

    public function __construct() {
        $this->api = new JapApi();
    }

    public function handle()
    {
        $newServices = $this->api->services();
        $services = Service::where('show', 1)->get();

        $newServicesMap = [];
        foreach ($newServices as $newService) {
            $newServicesMap[$newService->service] = $newService;
        }

        $updateCases = [];
        $ids = [];

        // Подготавливаем данные для пакетного обновления
        foreach ($services as $service) {
            if (isset($newServicesMap[$service->service_id])) {
                $newService = $newServicesMap[$service->service_id];
                if ($service->jap_rate != $newService->rate) {
                    $price = $newService->rate * 10000;
                    $old_price = $service->jap_rate * 10000;
                    $ids[] = $service->service_id;
                    $updateCases['jap_rate'][] = "WHEN {$service->service_id} THEN {$price}";
                    $updateCases['updated_at'][] = "When {$service->service_id} THEN NOW()";
                    $updateCases['jap_old'][] = "WHEN {$service->service_id} THEN {$old_price}";
                }
            }
        }

        // Выполняем пакетное обновление
        if (!empty($ids)) {
            $ids = implode(',', $ids);
            $japRateCases = implode(' ', $updateCases['jap_rate']);
            $updatedAtCases = implode(' ', $updateCases['updated_at']);
            $japRateOldCases = implode(' ', $updateCases['jap_old']);

            $query = "UPDATE services SET
                        jap_rate = CASE service_id {$japRateCases} END,
                        jap_old = CASE service_id {$japRateOldCases} END,
                        updated_at = CASE service_id {$updatedAtCases} END
                      WHERE service_id IN ({$ids})";

            DB::statement($query);
        }
    }

}

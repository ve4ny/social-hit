<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Console\Command;
use App\Services\JapApi;
use Illuminate\Support\Str;

class GetJapServices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jap-services:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Loading all the services from Just Another Panel';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(JapApi $api)
    {
        $socials = Social::pluck('id','name')->toArray();
        $services = $api->services();
        foreach ($services as $service) {
            foreach ($socials as $socialName => $socialId) {
                    if (Str::contains($service->category, $socialName)) {
                        $existingCategory = Category::where('jap_name', $service->category)
                            ->where('social_id', $socialId)
                            ->first();
                        if (!$existingCategory) {
                            // Создаем новый экземпляр модели Category
                            $category = new Category();
                            $category->jap_name = $service->category;
                            $category->rus_name = '';
                            $category->social_id = $socialId;
                            $category->main_show = 0;
                            $category->save();
                        } else {
                            $category = $existingCategory;
                        }

                        // Создаем новый экземпляр модели Service
                        $newService = new Service();
                        $newService->category_id = $category->id;
                        $newService->service_id = $service->service;
                        $newService->name = $service->name;
                        $newService->type = $service->type;
                        $newService->jap_rate = $service->rate * 100;
                        $newService->rate = 0;
                        $newService->min = $service->min;
                        $newService->max = $service->max;
                        $newService->dripfeed = $service->dripfeed;
                        $newService->refill = $service->refill;
                        $newService->cancel = $service->cancel;

                        $newService->save();
                    }
            }
            echo('.');
        }
        return Command::SUCCESS;
    }
}

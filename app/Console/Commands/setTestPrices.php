<?php

namespace App\Console\Commands;

use App\Models\Service;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class setTestPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prices:set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $services = Service::all();
        foreach ($services as $service) {
            $rate = $service->jap_rate;
            $service->rate = $rate * 90 + ($rate * 90 * 0.3);
            $service->save();
            echo('.');
        }
        return CommandAlias::SUCCESS;
    }
}

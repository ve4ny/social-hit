<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\JapApi;

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
        $services = $api->services();
        return Command::SUCCESS;
    }
}

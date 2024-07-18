<?php

namespace App\Console\Commands;

use App\Models\Promo;
use App\Models\Service;
use Illuminate\Console\Command;

class TestPromo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'promo:test';

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
    public function handle()
    {
        $service = Service::find(1);
        $promo = new Promo(['code' => 'SERVICE10', 'coefficient' => 90]);
        $service->promo()->save($promo);
        return Command::SUCCESS;
    }
}

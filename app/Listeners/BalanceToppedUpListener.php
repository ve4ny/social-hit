<?php

namespace App\Listeners;

use App\Events\TopUp;
use App\Services\RefBalanceService;

class BalanceToppedUpListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param TopUp $event
     * @return void
     */
    public function handle(TopUp $event)
    {
        $user = $event->user;
        $amount = $event->amount;
        $user->balance->amount = $user->balance->amount + $amount;
        $user->balance->save();
        if($user->details->referrer) {
            $service = new RefBalanceService($user->id);
            $service->topUp($amount);
        }
    }
}

<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Services\JapApi;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendApiCreateOrder
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
     * @param  \App\Events\OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        $order = $event->order;
        $api = new JapApi();
        $japOrder = $api->order([
            'service' => $order->service->service_id,
            'link' => $order->link,
            'quantity' => $order->quantity,
        ]);
        $order->jap_id = $japOrder->order;
        $order->save();
    }
}

<?php

namespace App\Providers;

use App\Events\OrderCreated;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ], 'App\Events\UserCreated' => [
          'App\Listeners\UserCreatedListener'
        ], 'App\Events\OrderCreated' => [
            'App\Listeners\SendApiCreateOrder',
        ], 'App\Events\TopUp' => [
            'App\Listeners\BalanceToppedUpListener'
        ]
    ];

    protected $observers = [

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}

<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Jobs\SendEmailConfirmationJob;

class UserCreatedListener
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
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $user = $event->user;
        SendEmailConfirmationJob::dispatch($user);

    }
}

<?php

namespace App\Listeners;

use App\Notifications\SendWelcomeEmailNotification;
use Illuminate\Auth\Events\Registered;

class SendWelcomeEmail
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
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $event->user->notify(
            new SendWelcomeEmailNotification()
        );
    }
}
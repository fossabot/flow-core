<?php

namespace App\Listeners;

use App\Notifications\SendActivationEmail;
use Illuminate\Auth\Events\Registered;

class SendActivationEmailListener
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
     * @param  IlluminateAuthEventsRegistered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // create a random token
        $token = str_random(64);
        $event->user->activation_token = $token;
        $event->user->save();

        // send notification
        $event->user->notify(
            new SendActivationEmail($token)
        );
    }
}
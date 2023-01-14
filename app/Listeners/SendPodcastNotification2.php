<?php

namespace App\Listeners;

use App\Events\event1;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPodcastNotification2
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
     * @param  \App\Events\event1  $event
     * @return void
     */
    public function handle(event1 $event)
    {
        dump($event);
    }
}

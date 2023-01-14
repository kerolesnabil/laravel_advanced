<?php

namespace App\Providers;

use App\Events\event1;
use App\Listeners\SendPodcastNotification1;
use App\Listeners\SendPodcastNotification2;
use App\Listeners\SendPodcastNotification3;
use App\Listeners\SendPodcastNotification4;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        event1::class=>[
            SendPodcastNotification1::class,
            SendPodcastNotification2::class,
            SendPodcastNotification3::class,
            SendPodcastNotification4::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

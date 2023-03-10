<?php

namespace App\Console;

use App\Console\Commands\Hello;
use App\Console\Commands\rename;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {

        Hello::class;
        rename::class;

        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

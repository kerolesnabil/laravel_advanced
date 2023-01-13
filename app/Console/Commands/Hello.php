<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     * {name} requried
     */
    protected $signature = 'Hello {name=keroles} {--L|lastname=nabil}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is make command, command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $firstName= $this->argument('name') ;
        $lastName= $this->option('lastname') ;

        $this->info($firstName." ".$lastName);


    }
}

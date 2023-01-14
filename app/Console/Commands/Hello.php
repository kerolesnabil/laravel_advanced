<?php

namespace App\Console\Commands;

use App\Models\User;
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
//        $firstName= $this->argument('name') ;
//        $lastName= $this->option('lastname') ;
//
//        $this->info($firstName." ".$lastName);

        $name=$this->secret('what is your name');

        $confirm=$this->confirm('Do you want to print your name?');






        if ($confirm){

            $header=['Name','Email'];

            $users=User::query()->limit(20)->select('name','email')->get();

            $this->table($header,$users);
        }else{
            $this->error($name);

        }



    }
}

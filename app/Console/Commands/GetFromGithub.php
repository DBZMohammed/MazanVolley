<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetFromGithub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Reccupère la version de github et mets à jour l'application";

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
     * @return mixed
     */
    public function handle()
    {
                // On retourne sur la branche master

                $output = shell_exec('git checkout master');
                echo $output;
                $output = shell_exec('git pull');
                echo $output;
                $output = shell_exec('npm update');
                echo $output;
                echo $output;
                $output = shell_exec('composer update');
                echo $output;
                $output = shell_exec('php artisan migrate:fresh');
                echo $output;
                $output = shell_exec('php artisan db:seed');
                echo $output;
                $output = shell_exec('composer update');
                echo $output;
                $output = shell_exec('npm run development');
                echo $output;


                echo "**\n";
                echo "* Branche master mise à jour depuis Github.                                                        \n";
                echo "**\n";
                echo "* => Vous êtes dans la branche master                                       \n";
                echo " => Pensez à travailler dans une branche :wink: .                              \n";
                echo "**\n";
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PushToGithub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:push';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $output = shell_exec('git add *');
        echo $output;
        $output = shell_exec('git commit -m "Automatic commit - PushToGithub Command"');
        echo $output;
        echo $output;
        $output = shell_exec('git push origin master');
        echo $output;
        echo "**\n";
        echo "* Branche master mise à jour sur Github.                                                        \n";
        echo "**\n";
        echo "* => Vous êtes dans la branche master                                       \n";
        echo " => Pensez à travailler dans une branche :wink: .                              \n";
        echo "**\n";
    }
}

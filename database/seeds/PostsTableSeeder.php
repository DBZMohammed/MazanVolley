<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 20; $i++) {

            $theme = ['Symphony','Laravel','Wordpress'];
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'content' => Str::random(255),
                'draft' => 0,
                'active' => rand (0,1),
                'theme' => $theme[rand(0,2)],
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')
                
                
            ]);            
        }
    }    
}

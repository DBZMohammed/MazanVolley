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

            DB::table('posts')->insert([
                'title' =>'',
                'content' => Str::random(255),
                'photo' => Str::random(255),
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')


            ]);

        for ($i = 1; $i < 20; $i++) {


            DB::table('posts')->insert([
                'title' => Str::random(10),
                'content' => Str::random(255),
                'photo' => Str::random(255),
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')


            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Benoit
        DB::table('users')->insert([
            'name' => 'DBIZA',
            'prenom' => 'Mohammed',
            'email' => 'mohammed.dbiza@gmail.com',
            'password' => bcrypt('Webforce3'),
            'admin' => true,
            'created_at' => now(),
            'email_verified_at' => now(),
            'api_token' => Str::random(60),
        ]);
    }
}

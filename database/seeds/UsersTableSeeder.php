<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User One',
            'email' => 'one@gmail.com',
            'password' => bcrypt('secret'),
            'token' => null,
            'verified' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'User Two',
            'email' => 'two@gmail.com',
            'password' => bcrypt('secret'),
            'token' => null,
            'verified' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'User Three',
            'email' => 'three@gmail.com',
            'password' => bcrypt('secret'),
            'token' => null,
            'verified' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Gold user',
            'email' => 'gold@gmail.com',
            'password' => bcrypt('secret'),
            'token' => null,
            'verified' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Silver user',
            'email' => 'silver@gmail.com',
            'password' => bcrypt('secret'),
            'token' => null,
            'verified' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'token' => null,
            'verified' => 1,
        ]);
    }
}

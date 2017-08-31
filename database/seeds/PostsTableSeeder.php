<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'admin',
            'body' => 'administrator',
            'user_id' => 'allowed to do everything: create posts, comments, manage roles & users & permissions',
        ]);
    }
}

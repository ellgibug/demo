<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'administrator',
            'description' => 'allowed to do everything: create posts, comments, manage roles & users & permissions',
        ]);

        DB::table('roles')->insert([
            'name' => 'simple_user',
            'display_name' => 'general authorized user',
            'description' => 'allowed to leave comments under the posts',
        ]);

        DB::table('roles')->insert([
            'name' => 'advanced_user',
            'display_name' => 'the next level authorized user',
            'description' => 'allowed to leave comments under the posts and create posts',
        ]);
        
    }
}

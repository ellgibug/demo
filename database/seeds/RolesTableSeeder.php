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
            'name' => 'user',
            'display_name' => 'general authorized user',
            'description' => 'allowed to leave comments under the posts',
        ]);
        
    }
}

<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'user_manager',
            'display_name' => 'manager of the registered users',
            'description' => 'allowed to manage users',
        ]);

        DB::table('permissions')->insert([
            'name' => 'roles_manager',
            'display_name' => 'manager of the roles',
            'description' => 'allowed to manage roles',
        ]);

        DB::table('permissions')->insert([
            'name' => 'permissions_manager',
            'display_name' => 'manager of the permissions',
            'description' => 'allowed to manage permissions',
        ]);

        DB::table('permissions')->insert([
            'name' => 'post_writer',
            'display_name' => 'writer of the posts',
            'description' => 'allowed to create posts',
        ]);

        DB::table('permissions')->insert([
            'name' => 'commentator',
            'display_name' => 'posts commentator',
            'description' => 'allowed to leave comments',
        ]);

        DB::table('permissions')->insert([
            'name' => 'editor',
            'display_name' => 'profile editor',
            'description' => 'allowed to edit privat profile information',
        ]);
        
    }
}

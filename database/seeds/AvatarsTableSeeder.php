<?php

use Illuminate\Database\Seeder;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            'name' => 'puppy',
            'path' => '/public/images/puppy.jpg',
        ]);

        DB::table('avatars')->insert([
            'name' => 'kitten',
            'path' => '/public/images/kitten.jpg',
        ]);

        DB::table('avatars')->insert([
            'name' => 'flower',
            'path' => '/public/images/flower.jpg',
        ]);

        DB::table('avatars')->insert([
            'name' => 'car',
            'path' => '/public/images/car.jpg',
        ]);

        DB::table('avatars')->insert([
            'name' => 'crown',
            'path' => '/public/images/crown.jpg',
        ]);
    }
}

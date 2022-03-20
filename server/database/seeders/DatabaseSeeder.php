<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        \App\Models\Organization::factory(1)->create([
            'email' => 'peepalfarm@gmail.com',
            'name' => 'Peepal Farm',
            'image_url' => 'images/organizations/peepal-farm.png'
        ]);
        \App\Models\Organization::factory(1)->create();
        \App\Models\PetProfile::factory(8)->create();
        \App\Models\Post::factory(20)->create();
    }
}

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
        \App\Models\Organization::factory(2)->create();
        \App\Models\PetProfile::factory(6)->create();
        \App\Models\Post::factory(10)->create();
    }
}

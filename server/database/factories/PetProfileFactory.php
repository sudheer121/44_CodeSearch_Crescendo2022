<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Support\Helpers;
use File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class PetProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'organization_id' => Organization::query()->inRandomOrder()->first()->id,
            'address' => $this->faker->address(),
            'city' =>  $this->faker->city(),
            'image_url' => Helpers::getRandomFileInSubdir('pets'),
        ];
    }
}

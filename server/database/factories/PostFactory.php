<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\PetProfile;
use App\Support\Helpers;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'pet_profile_id' => PetProfile::query()->inRandomOrder()->first()->id,
            'image_url' =>  Helpers::getRandomFileInSubdir('pets-new'),
        ];
    }
}

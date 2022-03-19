<?php

namespace Database\Factories;

use App\Support\Helpers;
use File;
use http\Url;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Storage;

class OrganizationFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'description' => $this->faker->sentence(),
            'address' => $this->faker->address(),
            'city' =>  $this->faker->city(),
            'image_url' => Helpers::getRandomFileInSubdir('organizations'), //$this->faker->image(storage_path('images/organizations'),640,480, null, false),
        ];
    }
}

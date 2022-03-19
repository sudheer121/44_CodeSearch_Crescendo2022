<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'description' => $this->faker->paragraph(),
            'organization_id' => Organization::query()->inRandomOrder()->first()->id,
            'address' => $this->faker->address(),
            'city' =>  $this->faker->city(),
        ];
    }
}

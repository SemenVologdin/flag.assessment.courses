<?php

namespace Database\Factories;

use App\Models\Educator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Educator>
 */
class EducatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->userName(),
            'description' => $this->faker->text(25),
            'sex' => $this->faker->randomElement(['M', 'F']),
        ];
    }
}

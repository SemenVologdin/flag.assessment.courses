<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement(['JS для профи', 'PHP для дебилов', 'HASKELL для гениев']),
            'price' => $this->faker->numberBetween(5_000, 10_000),
        ];
    }
}

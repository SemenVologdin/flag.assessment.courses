<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Flow;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Flow>
 */
class FlowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(20),
            'course_id' => Course::factory()
        ];
    }
}

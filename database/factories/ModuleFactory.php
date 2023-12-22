<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Educator;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(10),
            'content' => $this->faker->text(25),
            'course_id' => Course::factory(),
            'educator_id' => Educator::factory(),
        ];
    }
}

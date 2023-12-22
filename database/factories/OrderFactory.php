<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Flow;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->numberBetween(0, 10_000),
            'status' => $this->faker->text(10),
            'client_id' => Client::factory(),
            'flow_id' => Flow::factory(),
        ];
    }
}

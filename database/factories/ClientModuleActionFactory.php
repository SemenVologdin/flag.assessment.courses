<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\ClientModuleAction;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ClientModuleAction>
 */
class ClientModuleActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'action' => $this->faker->randomElement(['APPROVE', 'REJECT']),
            'module_id' => Module::factory(),
            'client_id' => Client::factory(),
        ];
    }
}

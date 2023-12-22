<?php

namespace Database\Seeders;

use App\Models\ClientModuleAction;
use Illuminate\Database\Seeder;

class ClientModuleActionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientModuleAction::factory(10_000)->create();
    }
}

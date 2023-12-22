<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Flow;
use App\Models\Order;
use Faker\Generator;
use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory(5_000)->create();
    }
}

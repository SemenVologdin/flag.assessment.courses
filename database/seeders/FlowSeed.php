<?php

namespace Database\Seeders;

use App\Models\Flow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlowSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flow::factory(150)->create();
    }
}

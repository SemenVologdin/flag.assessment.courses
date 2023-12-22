<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::factory(3_000)->create();
    }
}

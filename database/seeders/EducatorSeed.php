<?php

namespace Database\Seeders;

use App\Models\Educator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducatorSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Educator::factory(25)->create();
    }
}

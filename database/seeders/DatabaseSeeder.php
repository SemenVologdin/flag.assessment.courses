<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CourseSeed::class);
        $this->call(OrderSeed::class);
        $this->call(ModuleSeed::class);
        $this->call(FlowSeed::class);
        $this->call(EducatorSeed::class);
        $this->call(ClientSeed::class);
        $this->call(ClientModuleActionSeed::class);
    }
}

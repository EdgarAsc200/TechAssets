<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

    \App\Models\User::factory()->count(5)->create();
    \App\Models\Category::factory()->count(5)->create();
    \App\Models\DeviceModel::factory()->count(10)->create();
    \App\Models\Device::factory()->count(20)->create();
    \App\Models\Personal::factory()->count(10)->create();
    \App\Models\Warehouse::factory()->count(5)->create();
    \App\Models\Asset::factory()->count(15)->create();
    }
}

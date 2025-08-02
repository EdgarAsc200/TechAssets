<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Personal;
use App\Models\User;
use App\Models\Category;
use App\Models\Device;
use App\Models\DeviceModel;
use App\Models\Warehouse;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()
    User::factory()->count(5)->create();
    Category::factory()->count(5)->create();
    DeviceModel::factory()->count(5)->create();
    Device::factory()->count(20)->create();
    Personal::factory()->count(10)->create();
    Warehouse::factory()->count(5)->create();
    Asset::factory()->count(15)->create();
    }
}

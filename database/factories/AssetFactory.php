<?php

namespace Database\Factories;

use App\Models\Device;
use App\Models\Personal;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'device_id' => Device::factory(),
            'personal_id' => Personal::factory(),
            'warehouse_id' => Warehouse::factory(),
            'user_id' => User::factory(),

        ];
    }
}

<?php

namespace Database\Factories;

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
            'branch_id' => Warehouse::factory(),
            'user_id' => User::factory(),

        ];
    }
}

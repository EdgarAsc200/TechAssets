<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DeviceModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{ 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'device_model_id' => DeviceModel::factory(),
            'serie' => strtoupper($this->faker->bothify('??##??##')),
            'price' => $this->faker->randomFloat(2, 200, 2000),
            'memory_ram' => $this->faker->randomElement([4, 8, 16, 32]),
            'storage' => $this->faker->randomElement([128, 256, 512, 1024]),
            'antivirus_version' => 'v' . $this->faker->numberBetween(1, 5) . '.' . $this->faker->numberBetween(0, 9),
            'office_version' => $this->faker->randomElement(['2016', '2019', '365']),
            'active_directory_enable' => $this->faker->boolean,
        ];

    }
}

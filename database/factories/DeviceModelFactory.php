<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeviceModel>
 */
class DeviceModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory()->create(),
            'brand' => $this->faker->company,
            'model' => $this->faker->word . '-' . $this->faker->numberBetween(100, 999),
            'operative_system' => $this->faker->randomElement(['Windows', 'Linux', 'macOS']),
            'arquitecture' => $this->faker->randomElement(['x86', 'x64']),
        ];
    }
}

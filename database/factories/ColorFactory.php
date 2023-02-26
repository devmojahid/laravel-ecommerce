<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Color>
 */
class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->colorName,
            'slug' => $this->faker->slug,
            'code' => $this->faker->hexColor,
            'summary' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}

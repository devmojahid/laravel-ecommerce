<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'photos' => $this->faker->imageUrl,
            'thumbnail' => $this->faker->imageUrl,
            'summary' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'discount'=> $this->faker->randomFloat(2, 10, 40),
            'discount_type' => $this->faker->randomElement(['percent', 'fixed']),
            'discount_start' => $this->faker->dateTime,
            'discount_end' => $this->faker->dateTime,
            'sku' => $this->faker->ean8,
            'barcode' => $this->faker->ean13,
            'stock' => $this->faker->numberBetween(1, 100),
            'stock_alert' => $this->faker->numberBetween(1, 100),
            'weight' => $this->faker->randomFloat(2, 10, 100),
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->paragraph,
            'meta_keywords' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'featured' => $this->faker->randomElement(['yes', 'no']),
            'trending' => $this->faker->randomElement(['yes', 'no']),
            'best_rated' => $this->faker->randomElement(['yes', 'no']),
            'hot_new' => $this->faker->randomElement(['yes', 'no']),
            'buyone_getone' => $this->faker->randomElement(['yes', 'no']),
            'special_offer' => $this->faker->randomElement(['yes', 'no']),
            'special_deal' => $this->faker->randomElement(['yes', 'no']),
            'vat' => $this->faker->randomFloat(2, 10, 40),
            'tax' => $this->faker->randomFloat(2, 10, 40),
            'free_shipping' => $this->faker->randomElement(['yes', 'no']),
            'product_video_link' => $this->faker->url,
            'product_audio_link' => $this->faker->url,
            'product_file_link' => $this->faker->url,
            'category_id' => $this->faker->numberBetween(1, 10),
            'brand_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'color_id' => $this->faker->numberBetween(1, 10),

        ];
    }
}

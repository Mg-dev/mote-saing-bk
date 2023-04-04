<?php

namespace Database\Factories;

use App\Models\Category;
use Database\Factories\CategoryFactory;
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
            'category_id' => Category::factory(),
            'name' => $this->faker->productName,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(0, 10000),
            'quantity' => $this->faker->numberBetween(0, 1000),

        ];
    }
}

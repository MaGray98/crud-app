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
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2,1,30),
            'description' => $this->faker->paragraph(),
            'item_number' => $this->faker->randomNumber(3, true),
            'image' => $this->faker->imageURL()

        ];
    }
}

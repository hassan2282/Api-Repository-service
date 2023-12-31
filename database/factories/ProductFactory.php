<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            'body' => $this->faker->word,
            'isMain' => $this->faker->boolean,
            'price' => $this->faker->numberBetween(1,1000000),
            'status' => $this->faker->boolean,
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}

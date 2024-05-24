<?php

namespace Database\Factories;

use App\Models\Supplier;
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
        $maxSupplierId = Supplier::max('id');
        
        return [
            'name' => fake()->words(3,true),
            'description' => fake()->sentence(),
            'supplier_id' => fake()->numberBetween(1,$maxSupplierId),
            'category_id' => fake()->numberBetween(1,10),
            'price' => fake()->numberBetween(10,500)
        ];
    }
}

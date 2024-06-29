<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    protected $model = Purchase::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product' => $this->faker->word,
            'category_id' => Category::factory(),
            'supplier_id' => Supplier::factory(),
            'cost_price' => $this->faker->randomFloat(2, 10, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'expiry_date' => $this->faker->date(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'total_price' => mt_rand(5000, 1000000),
            'total_item' => mt_rand(1, 10),
            'status' => Random::fromArray(['pending', 'success', 'failed']),
            'order_at' => fake()->date(),
            'users_id' => mt_rand(1,3),
            'menus_id' => mt_rand(1,10),
        ];
    }
}

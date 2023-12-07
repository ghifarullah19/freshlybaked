<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => mt_rand(5000, 100000),
            'quantity' => mt_rand(1, 5),
            'category' => $this->randomArray(),
            'description' => fake()->paragraph()
        ];
    }

    public function randomArray(): string
    {
        $array = ['cake', 'bread', 'signature'];
        return $array[array_rand($array)];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'discount_amount' => $this->faker->numberBetween(5, 50), // nilai acak antara 5 dan 50
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
        ];
    }
}

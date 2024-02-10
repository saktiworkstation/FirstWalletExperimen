<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 5),
            'bill_type' => mt_rand(1, 5),
            'amount' => $this->faker->numberBetween(100, 10000), // Contoh nilai acak antara 100 dan 10000
            'due_date' => $this->faker->date,
            'status' => $this->faker->randomElement([0, 1])
        ];
    }
}

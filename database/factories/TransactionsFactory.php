<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transactions>
 */
class TransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id_sender' => mt_rand(1, 5),
            'user_id_receiver' => mt_rand(1, 5),
            'transaction_type' => mt_rand(1, 5),
            'amount' => $this->faker->numberBetween(100, 10000),
            'description' => $this->faker->paragraph(1, 2),
        ];
    }
}

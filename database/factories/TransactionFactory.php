<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'user_id' => User::factory(),
            'product_id' => Product::factory(),
            'total_price' => fake()->randomNumber() * 1000,
            'status' =>  'PENDING',
            'payment_method' => 'BCA',
            'amount' => '10',
            'transaction_proof' => fake()->uuid(),
            'shipping_address' => fake()->address(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = ['Mobile','Laptop','Watch','Computer'];
        static $invoice = 1000;
        return [
            'product_name' => $products[rand(0,3)],
            'currency' => 'BDT',
            'amount' => rand(2000,3000),
            'invoice' => $invoice++,
            'trxID' => '',
            'status' => 'Pending'
        ];
    }
}

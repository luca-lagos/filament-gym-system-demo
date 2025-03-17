<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\Member;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'member_id' => Member::factory(),
            'amount' => fake()->randomFloat(2, 0, 999999.99),
            'due_date' => fake()->date(),
            'paid' => fake()->boolean(),
        ];
    }
}

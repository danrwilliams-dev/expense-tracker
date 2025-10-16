<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Expense;
use App\Models\User;

class ExpenseFactory extends Factory
{
    protected $model = Expense::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->sentence(),
            'category' => $this->faker->word(),
            'amount_in_pence' => $this->faker->numberBetween(100, 10000),
            'date' => $this->faker->date(),
            'user_id' => user::factory(),
        ];
    }
}
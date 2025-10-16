<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Expense;

class ExpenseFactory extends Factory
{
    // The name of the corresponding model
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
           'name'=> $this->faker->sentence(),
           'category'=> $this->faker->word(),
           'amount_in_pence'=> $this->faker->numberBetween(100, 10000),
           'date'=>$this->faker->date(),
           'user_id'=>\App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
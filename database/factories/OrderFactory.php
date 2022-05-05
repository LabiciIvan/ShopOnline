<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{

    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' =>$this->faker->streetAddress(),
            'address' =>$this->faker->phoneNumber(),
            'order' => $this->faker->words(5, true)
        ];
    }

    public function addOrder() {
        return $this->afterCreating(function($user) {

        });
    }
}

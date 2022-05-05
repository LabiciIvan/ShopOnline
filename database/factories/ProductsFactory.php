<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;
use App\Models\Review;

class ProductsFactory extends Factory
{


    protected $model = Products::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name,
                'stock'=> $this->faker->randomDigitNot(0),
                'price'=> $this->faker->numberBetween(10, 400)
        ];
    }

    public function addReview() {
        
        return $this->afterCreating(function($product) {
            $product->review()->save(Review::factory()->make());
        });
    }
}

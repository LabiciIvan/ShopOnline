<?php

namespace Database\Factories;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{

    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'age' =>$this->faker->numberBetween(18, 25),
            'sex'=>$this->faker->randomElement(['male', 'female'])
        ];
    }

    public function newTitle() {

        return $this->state([

                'age' => '25',
                'sex' => 'male'
        ]);   
    }

}

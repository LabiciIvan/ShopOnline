<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    public function after() {

        return $this->afterCreating(function($author) {

            $author->profile()->save(Profile::factory()->make());
            $author->order()->save(Order::factory()->make());
        });
    }

    public function userName() {

        return $this->state([
            'email' => 'AAAA@mail.com'
        ]);
    }
}

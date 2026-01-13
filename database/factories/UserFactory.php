<?php

namespace Database\Factories;

use App\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
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
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'user_name' => $this->faker->unique()->userName,
            'password' => Hash::make('Password@123'), // password
            'role' => 5,
            'status' => '0',
            'remember_token' => Str::random(10),
        ];
    }
}

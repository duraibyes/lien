<?php

namespace Database\Factories;

use App\Models\Company;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // parent user
            'company' => $this->faker->company,
            'website' => $this->faker->url,
            'address' => $this->faker->address,
            'city'    => $this->faker->city,
            'state_id'=> 1,
            'zip'     => 35004,
            'phone'   => '9876543210',
        ];
    }
}

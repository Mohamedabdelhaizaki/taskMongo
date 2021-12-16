<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->name(),
            'LastName' => $this->faker->name(),
            'fullName' => $this->faker->userName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'numberOfMessages' => $this->faker->numberBetween($min = 0, $max = 5000),
            'age' => $this->faker->numberBetween($min = 0, $max = 100),
            'remember_token' => Str::random(10),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {

    }
}

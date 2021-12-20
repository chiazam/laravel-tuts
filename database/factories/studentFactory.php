<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
{
    protected $model = student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail(),
            "phone_no" => $this->faker->phoneNumber(),
            "age" => $this->faker->numberBetween(13, 100),
            "gender" => $this->faker->randomElement(["male", "female"])
        ];
    }
}

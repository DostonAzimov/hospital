<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName'=>$this->faker->name,
            'phoneNumber'=>$this->faker->phoneNumber,
            'telegram'=>$this->faker->text(5),
            'desc'=>$this->faker->text(250),
            'category_id'=>$this->faker->numberBetween(1,10)

        ];
    }
}

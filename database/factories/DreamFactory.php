<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DreamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "dream" => $this->faker->text(),
            "title" => $this->faker->title(),
        ];
    }
}

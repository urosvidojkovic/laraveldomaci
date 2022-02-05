<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->safeColorName . ' zone',
            'hour_price' => $this->faker->randomFloat(2, 50, 150)
        ];
    }
}

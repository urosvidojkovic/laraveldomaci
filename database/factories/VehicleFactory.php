<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plates' => $this->faker->stateAbbr . $this->faker->unique()->regexify('[0-9]{3,4}[A-Z]{2}'),
            'model' => $this->faker->word,
            'color' => $this->faker->safeColorName,
            'manufacturer' => $this->faker->company
        ];
    }
}

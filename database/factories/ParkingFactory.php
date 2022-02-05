<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => $this->faker->numberBetween(1, 30),
            'zone_id' => $this->faker->numberBetween(1, 5),
            'start' => $this->faker->dateTime,
            'end' => $this->faker->dateTime
        ];
    }
}

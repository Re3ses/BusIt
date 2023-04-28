<?php

namespace Database\Factories;

use App\Models\Bus_Data;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus_Data>
 */
class Bus_DataFactory extends Factory
{
    protected $model = Bus_Data::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bus_number' => $this->faker->numberBetween($min = 0, $max = 4000),
            'bus_platenumber' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'bus_model' => $this->faker->word(),
            'bus_company' => $this->faker->company(),
            'bus_capacity' => $this->faker->numberBetween($min = 50, $max = 200)
        ];
    }
}

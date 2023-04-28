<?php

namespace Database\Factories;

use App\Models\Bus_Drivers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus_Drivers>
 */
class Bus_DriversFactory extends Factory
{
    protected $model = Bus_Drivers::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['active', 'inactive']);
        return [
            'driver_name' => $this->faker->name(),
            'driver_contactnumber' => $this->faker->tollFreePhoneNumber(),
            'driver_isactive' => $status
        ];
    }
}

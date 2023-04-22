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
            'driver_firstName' => $this->faker->name(),
            'driver_lastname' => $this->faker->lastname(),
            'driver_contactnumber' => $this->faker->tollFreePhoneNumber(),
            'driver_licensenumber' => $this->faker->creditCardNumber(),
            'driver_licenseexpirydate' => $this->faker->dateTimeBetween('now', '+3 years'),
            'driver_dateofbirth' => $this->faker->dateTimeThisCentury(),
            'driver_isactive' => $this->faker->$status
        ];
    }
}

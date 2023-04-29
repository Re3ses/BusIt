<?php

namespace Database\Factories;

use App\Models\Bus_Trips;
use App\Models\Bus_Routes;
use App\Models\Bus_Drivers;
use App\Models\Bus_Data;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus_Trips>
 */
class Bus_TripsFactory extends Factory
{
    protected $model = Bus_Trips::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'route_id' => Bus_Routes::factory(),
            'bus_id'=> Bus_Data::factory(),
            'driver_id'=> Bus_Drivers::factory(),
            'user_id'=> User::factory(),
            'departure_date'=> $this->faker->dateTimeBetween('now', '+7 days'),
        ];
    }
}

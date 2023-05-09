<?php

namespace Database\Factories;

use App\Models\Bus_Trips;
use App\Models\Bus_Data;
use App\Models\Bus_Routes;
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
            'bus_id' => $this->faker->randomElement(Bus_Data::pluck('id')),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'route_id' => $this->faker->randomElement(Bus_Routes::pluck('id')),
            'departure_time'=> $this->faker->time(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Bus_Routes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus_Routes>
 */
class Bus_RoutesFactory extends Factory
{
    protected $model = Bus_Routes::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'route_origin' => $this->faker->city(),
            'route_destination' => $this->faker->city()
        ];
    }
}

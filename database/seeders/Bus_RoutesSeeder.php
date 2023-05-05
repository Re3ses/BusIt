<?php

namespace Database\Seeders;

use App\Models\Bus_Routes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bus_RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            ['route_destination' => 'Daet', 'route_fare' => 12, 'route_distance' => 94],
            ['route_destination' => 'Iriga', 'route_fare' => 11, 'route_distance' => 38],
            ['route_destination' => 'Lagonoy', 'route_fare' => 14, 'route_distance' => 58],
            ['route_destination' => 'Legaspi', 'route_fare' => 13, 'route_distance' => 94],
            ['route_destination' => 'Polangui', 'route_fare' => 16, 'route_distance' => 63]
        ];

        Bus_Routes::insert($items);
    }
}

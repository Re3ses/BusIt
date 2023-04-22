<?php

namespace Database\Seeders;

use App\Models\Bus_Trips;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bus_TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Bus_Trips::factory()
            ->count(25)
            ->create();
    }
}

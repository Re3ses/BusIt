<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bus_Drivers;
use Illuminate\Database\Seeder;

class Bus_DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Bus_Drivers::factory()
            ->count(25)
            ->create();
    }
}

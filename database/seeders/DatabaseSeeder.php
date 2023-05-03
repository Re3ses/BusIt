<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            Bus_DriversSeeder::class,
            UserSeeder::class,
            Bus_DataSeeder::class,
            Bus_TripsSeeder::class
        ]);
    }
}

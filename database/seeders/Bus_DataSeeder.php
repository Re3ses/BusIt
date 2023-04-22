<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bus_Data;
use Illuminate\Database\Seeder;

class Bus_DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Bus_Data::factory()
            ->count(25)
            ->create();
    }
}

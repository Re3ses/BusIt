<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bus_Routes;
use Illuminate\Database\Seeder;

class Bus_RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Bus_Routes::factory()
            ->count(25)
            ->create();
    }
}

<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::factory()
            ->count(25)
            ->create();
    }
}

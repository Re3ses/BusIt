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
            ->hasAnnouncements(25)
            ->create();
    }
}

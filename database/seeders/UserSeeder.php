<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'id'=>1,
            'name'=>"admin",
            'email'=>'admin@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('password'),
            'remember_token'=>Str::random(10),
        ]);
        // User::factory()
        //     ->count(25)
        //     ->create();
    }
}

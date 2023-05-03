<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\weatherController;
use App\Http\Controllers\BusTripsController;


class HomeController extends Controller
{
    public function index()
    {
        $busTtrips = new BusTripsController;
        $weatherInfo = new weatherController; 
        return view(
            'home', 
            $weatherInfo->getWeather('Iriga City'),
            $busTtrips->getTrips(),
        );
    }

}
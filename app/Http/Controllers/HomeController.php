<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\weatherController;
use App\Http\Controllers\BusTripsController;


class HomeController extends Controller
{
    public function index()
    {
        $busTrips = new BusTripsController;
        $weatherInfo = new weatherController;
        $weatherData = $weatherInfo->getWeather('Naga');
        $tripsData = $busTrips->getTrips();

        // Debugging code - remove this once you've identified the issue
        // var_dump($weatherData, $tripsData);

        return view(
            'home',
            compact('weatherData', 'tripsData'),
        );
    }

}
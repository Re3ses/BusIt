<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\weatherController;
use App\Http\Controllers\BusTripsController;


class HomeController extends Controller
{
    public function index()
    {
        /* index(): Control the display of the home page
         * Arguments: None
         * Return:
         * Home view and an array containing data from various controllers.
        */

        // Asssign return statement of controllers to variables
        $busData = (new BusTripsController)->getWeather('Naga'); // Assign the returned array from getWeather() function to variable
        $weatherData = (new weatherController)->getTrips(); // Assign the returned table from getTrips() function to variable

        // return home view and an array containing data from controllers.
        return view(
            'home',
            compact('weatherData', 'tripsData'),
        );
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\weatherController;


class HomeController extends Controller
{
    public function index()
    {
        $weatherInfo = new weatherController; 
        return view(
            'home', $weatherInfo->getWeather('Iriga City')
        );
    }

}
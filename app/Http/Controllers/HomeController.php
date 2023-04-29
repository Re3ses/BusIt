<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{   
    $apiKey = "7337016a5f50e359bd37398fe4576bd4";
    $city = 'Naga';
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=$apiKey");
    
    if ($response->failed()) {
        // handle API request failure
        return str("Failed to retrieve weather data");
    }
    
    $responseData = $response->json();
    
    if (!isset($responseData['name'], $responseData['weather'][0]['main'], $responseData['weather'][0]['description'], $responseData['weather'][0]['icon'], $responseData['main']['temp'], $responseData['main']['humidity'])) {
        // handle missing data
        return str("Weather data is incomplete");
    }
    
    $location = $responseData['name'];
    $description = $responseData['weather'][0]['description'];
    $iconUrl = "https://openweathermap.org/img/wn/{$responseData['weather'][0]['icon']}@2x.png";
    $temperature = $responseData['main']['temp'];
    $humidity = $responseData['main']['humidity'];
    $rain = isset($responseData['rain']['1h']) ? $responseData['rain']['1h'] : "n/a";

    return view(
        'home',
        compact(
            'location',
            'description',
            'iconUrl', 
            'temperature', 
            'humidity', 
            'rain'
        )
    );
}

}

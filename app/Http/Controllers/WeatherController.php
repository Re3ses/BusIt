<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class WeatherController extends Controller
{
    public function getWeather($whichCity)
    {
        /* retrieve weather information from OpenWeatherMap API.
         * Arguments: 
         * $whichCity: a variable for which city to get information about
         * Return:
         * an array containing information about the weather mainly location, description, iconUrl, temperature, humidity, and rain.
        */
        $apiKey = "7337016a5f50e359bd37398fe4576bd4"; // API key 
        $city = $whichCity ? $whichCity : 'Naga'; // defaults to Naga city if the argument is empty.
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=$apiKey"); // API request

        if ($response->failed()) {
            // handle API request failure
            return str("Failed to retrieve weather data");
        }

        $responseData = $response->json(); // Turns the return of the request into a json for parsing.

        if (!isset($responseData['name'], $responseData['weather'][0]['main'], $responseData['weather'][0]['description'], $responseData['weather'][0]['icon'], $responseData['main']['temp'], $responseData['main']['humidity'])) {
            // handle missing data
            return str("Weather data is incomplete");
        }

        // Assign the needed data into variables for easier access.
        $location = $responseData['name'];
        $description = $responseData['weather'][0]['description'];
        $iconUrl = "https://openweathermap.org/img/wn/{$responseData['weather'][0]['icon']}@2x.png";
        $temperature = $responseData['main']['temp'];
        $humidity = $responseData['main']['humidity'];
        $rain = isset($responseData['rain']['1h']) ? $responseData['rain']['1h'] : "n/a";

        // return statement
        return (
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
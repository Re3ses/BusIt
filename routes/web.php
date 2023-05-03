<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::put('/routes', [App\Http\Controllers\BusTripsController::class, 'getTrips']);
Route::put('/weather/{whichCity}', [\App\Http\Controllers\WeatherController::class, 'getWeather']);

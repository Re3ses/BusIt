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
Route::put('/routes/{whichRoute}', [App\Http\Controllers\BusTripsController::class, 'getTrips']);
Route::put('/weather/{whichCity}', [\App\Http\Controllers\WeatherController::class, 'getWeather']);

Route::get('/edit-tables', [\App\Http\Controllers\EditTablesController::class, 'index'])->name('tables');
Route::post('/edit-tables/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::patch('/edit-tables/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update');
Route::delete('/edit-tables/delete/{id}', [App\Http\Controllers\EditTablesController::class, 'destroy'])->name('delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

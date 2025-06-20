<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather', [WeatherController::class, 'index'])->name('weather');
Route::post('/weather', [WeatherController::class, 'getWeather'])->name('weather.get');
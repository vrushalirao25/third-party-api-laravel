<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use WeakMap;

class WeatherController extends Controller
{

    public function index()
    {
        return view('weather.index');
    }

    public function getWeather(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:255'
        ]);
    
        $city = $request->input('city');
        $weatherService = new WeatherService();
        $result = $weatherService->getCurrentWeather($city);
    
        if ($result['success']) {
            return view('weather.show', [
                'weather' => $result['data'],
                'city' => $city
            ]);
        }
    
        return back()->withErrors(['city' => $result['error'] ?? 'Failed to fetch weather data'])->withInput();
    }
    
}

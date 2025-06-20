<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    private $apiKey;
    private $baseUrl;
    private $timeOut;

    public function __construct()
    {
        $this->apiKey = config('weather.api_key');
        $this->baseUrl = config('weather.base_url');
        $this->timeOut = config('weather.timeout');
    }

    public function getCurrentWeather(string $city)
    {
        $response = Http::timeout($this->timeOut)
            ->get($this->baseUrl, [
                'q' => $city,
                'appid' => $this->apiKey,
            ]);

        if ($response->successful()) {
            return [
                'success' => true,
                'data' => $response->json()
            ];
        }
        $statusCode = $response->status();
        return [
            'success' => false,
            'error' => $this->getErrorMessage($statusCode),
            'status_code' => $statusCode
        ];
    }

    private function getErrorMessage(int $statusCode): string
    {
        return match ($statusCode) {
            401 => 'Invalid Api key',
            404 => 'City not found',
            429 => 'Rate limit exceeded',
            500, 502, 503 => 'Weather service temporarily unavailable',
            default => 'Failed to fetch weather data'
        };
    }
}

<!DOCTYPE html>
<html>
<head>
    <title>Weather Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Weather in {{ $weather['name'] }}</h3>
                        <a href="{{ route('weather') }}" class="btn btn-secondary btn-sm">Search Again</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>{{ round($weather['main']['temp']) }}°C</h4>
                                <p class="text-muted">{{ ucfirst($weather['weather'][0]['description']) }}</p>
                                
                                <ul class="list-unstyled">
                                    <li><strong>Feels like:</strong> {{ round($weather['main']['feels_like']) }}°C</li>
                                    <li><strong>Humidity:</strong> {{ $weather['main']['humidity'] }}%</li>
                                    <li><strong>Pressure:</strong> {{ $weather['main']['pressure'] }} hPa</li>
                                    <li><strong>Wind Speed:</strong> {{ $weather['wind']['speed'] ?? 0 }} m/s</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="https://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@2x.png" 
                                     alt="Weather icon" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
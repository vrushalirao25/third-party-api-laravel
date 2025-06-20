<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Check Weather</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('weather.get') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="city" class="form-label">Enter City Name</label>
                                <input type="text" 
                                       class="form-control @error('city') is-invalid @enderror" 
                                       id="city" 
                                       name="city" 
                                       value="{{ old('city') }}" 
                                       placeholder="e.g., Mumbai, Delhi, New York">
                                @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Get Weather</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
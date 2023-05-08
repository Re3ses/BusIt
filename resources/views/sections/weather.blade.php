<div class="container-fluid flex-column px-5 py-3 h-100 w-100">
    {{-- Weather title and select tag --}}
    <div class="row px-3 h-25">
        <h1 class="fs-1 col-1 me-5">Weather</h1>
        <div class="col-2 d-flex align-items-center justify-content-center">
            <select class="form-select form-select-sm" id="citySelector" aria-label="Default select example">
                <option default>Select Location</option>
                <option value="Daet">Daet</option>
                <option value="Iriga City">Iriga</option>
                <option value="Lagonoy">Lagonoy</option>
                <option value="Legaspi">Legaspi</option>
                <option value="Naga">Naga</option>
                <option value="Polangui">Polangui</option>
            </select>
        </div>
        {{-- <hr> --}}
    </div>
    {{-- Weather display --}}
    <div class="row h-75 px-5 d-flex align-items-center justify-content-center">
        <div class="col weather-main d-flex align-items-center justify-content-center">
            <img src={{ $weatherData['iconUrl'] }} alt="Weather Icon" id="weather-icon class="col-1"></img>
            <div class="col-2 container my-auto">
                <h2 id="weather-location">{{ $weatherData['location'] }}</h2>
                <p id="weather-description">{{ $weatherData['description'] }}</p>
            </div>
            <div class="col-2 d-flex flex-column align-items-center justify-content-center">
                <p class="w-50" id="weather-temperature">{{ $weatherData['temperature'] }} °C</p>
                <p class="w-50" id="weather-humidity">{{ $weatherData['humidity'] }} %</p>
                <p class="w-50" id="weather-rain">{{ $weatherData['rain'] }} @if($weatherData['rain'] != "n/a")mm @endif</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#citySelector').on('change', function() {
        // console.log('City selected:', $weatherData['(this).val());
        // console.log('CSRF token:', $weatherData['('meta[name="csrf-token"]').attr('content'));
        var selectedCity = $(this).val();
        $.ajax({
            type: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/weather/' + selectedCity,
            success: function(response) {
                // handle the response from the server here
                // console.log(response); // log the response to the console
                $('#weather-icon').attr('src', response.iconUrl); // update the page content with the icon URL data
                $('#weather-location').html(response.location); // update the page content with the location data
                $('#weather-description').html(response.description); // update the page content with the description data
                $('#weather-temperature').html(response.temperature + " ℃"); // update the page content with the temperature 
                $('#weather-humidity').html(response.humidity + " %"); // update the page content with the humidity
                $('#weather-rain').html(response.rain + response.rain == "n/a" ? "mm" : "n/a"); // update the page content with the rain
            }
        })
    })
</script>

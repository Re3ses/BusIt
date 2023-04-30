<div class="container-fluid flex-column p-5 h-100 w-100 ">
    <div class="row px-3">
        <h1 class="fs-1 col-2">Weather</h1>
        <div class="col-2">
            <select class="form-select form-select-sm" id="citySelector" aria-label="Default select example">
                <option default>Select Location</option>
                <option value="Daet">Daet</option>
                <option value="Iriga">Iriga</option>
                <option value="Lagonoy">Lagonoy</option>
                <option value="Legaspi">Legaspi</option>
                <option value="Polangui">Polangui</option>
            </select>
        </div>
    </div>
    <div class="row px-5">
        <div class="col-6 weather-main d-flex">
            <img src={{ $iconUrl }} alt="Weather Icon" id="weather-icon"></img>
            <div class="container my-auto">
                <h2 id="weather-location">{{ $location }}</h2>
                <p id="weather-description">{{ $description }}</p>
            </div>
        </div>
        <div class="col-6">
            <p id="weather-temperature">Temperature: {{ $temperature }} C</p>
            <p id="weather-humidity">Humidity: {{ $humidity }}%</p>
            <p id="weather-rain">Rain: {{ $rain }}</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#citySelector').on('change', function() {
        // console.log('City selected:', $(this).val());
        // console.log('CSRF token:', $('meta[name="csrf-token"]').attr('content'));
        var selectedCity = $(this).val();
        $.ajax({
            type: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/weather/' + selectedCity,
            success: function(response) {
                // handle the response from the server here
                console.log(response); // log the response to the console
                $('#weather-icon').attr('src', response.iconUrl); // update the page content with the icon URL data
                $('#weather-location').html(response.location); // update the page content with the location data
                $('#weather-description').html(response.description); // update the page content with the description data
                $('#weather-temperature').html(response.temperature + "℃"); // update the page content with the temperature 
                $('#weather-humidity').html(response.humidity + "%"); // update the page content with the humidity
                $('#weather-rain').html(response.rain + "mm"); // update the page content with the rain
            }
        })
    })
</script>

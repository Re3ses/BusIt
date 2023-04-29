<div class="container-fluid flex-column h-100 w-100">
    <div class="row p-3">
        <h1 class="fs-1">Weather</h1>
    </div>
    <div class="row px-5">
        <div class="col-6 weather-main d-flex">
            <img src={{ $iconUrl }} alt="Weather Icon"></img>
            <div class="container my-auto">
                <h2>{{ $location }}</h2>
                <p>{{ $description }}</p>
            </div>
        </div>
        <div class="col-6">
            <p>Temperature: {{ $temperature }} C</p>
            <p>Humidity: {{ $humidity }}</p>
            <p>Rain: {{ $rain }}</p>
        </div>
    </div>
</div>


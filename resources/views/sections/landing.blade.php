<div class="container-fluid h-100 d-flex flex-column justify-content-between">
    <div class="landing-bar px-4 d-flex flex-wrap align-items-center justify-content-between">
        <a href="#" class="">
            <img class="busit-logo" src="/images/busit-logo.png" alt="busit-logo">
        </a>
        <div class="d-flex align-content-center justify-content-center h-75">
            <div class="vr mx-3"></div>
            <a href="/login" class="fs-5 fw-semibold d-flex align-items-center">
                <p class="my-auto">MANAGE</p>
            </a>
        </div>
    </div>

    <div class="h-75 mt-5">
        <div class="container-fluid h-25 text-white">
            <div class="row p-4">
                <div class="col-10">
                    <p class="fs-3 fw-bold">Your One Stop<br>Bus Stop,<br>Information App</p>
                </div>
                <div class="col-2 d-flex flex-column align-items-end">
                    <h1 class="text-uppercase fw-bold">{{ $weatherData['location'] }}</h1>
                    <h2 class="text-uppercase fw-bold">{{ $weatherData['temperature'] }} °C</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="h-25">
        <div class="row h-75">
            <div class="row p-5 h-25">
                <button class="col-1 btn btn-warning px-3 text-white fw-medium" onclick="location.href='#about'">About Us</button>
            </div>
        </div>
        <div class="row h-25 d-flex justify-content-end">
            <div class="col-1">
                <p class="col-1 align-self-end text-white fs-3 fw-bold" id="clock">00:00</p>
            </div>
        </div>
    </div>

</div>

<script>
    function updateTime() {
        fetch('https://worldtimeapi.org/api/ip')
            .then(response => response.json())
            .then(data => {
                var timeString = data.datetime.slice(11, 16);
                document.getElementById('clock').innerHTML = timeString;
            });
    }

    setInterval(updateTime, 1000);
</script>

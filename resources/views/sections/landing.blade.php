<div class="container-fluid h-100 d-flex flex-column justify-content-between">
    {{-- <div class="row px-5 pt-5">
        <div class="col-10">
            <a href="#">
                <img class="busit-logo" src="/images/busit-logo.png" alt="busit-logo">
            </a>
            <p class="p-4 text-white fs-3 fw-bold">Your One Stop<br>Bus Stop,<br>Information App</p>
        </div>
        <div class="col-2 d-flex flex-column">
            <div class="row align-self-center">
                <i class="weather-icon fa-solid fa-cloud-sun-rain text-white"></i>
            </div>
            <p class="row align-self-center text-white fs-5 fw-medium">Cloudy with Rain</p>
        </div>
    </div>

    <div class="row px-5 pb-1">
        <div class="row p-5">
            <button class="col-1 btn btn-warning px-3 text-white fw-medium" onclick="location.href='#about'">About
                Us</button>

        </div>
        <div class="row">
            <a href="" class="col align-self-start pb-4 fs-3 register-link">Become an admin</a>
            <p class="col-1 align-self-end text-white fs-3 fw-bold" id="clock">00:00</p>
        </div>
    </div> --}}
    <div class="landing-bar"></div>
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

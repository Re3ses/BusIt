<div class="fluid-container px-5 py-3 h-100">
    <div class="row px-3 my-5">
        <h1 class="fs-1 col-1 me-5">Map</h1>
        
    </div>
    <div class="row px-5 h-75">
        <div id="actualMap" class="h-100 w-100"></div>
    </div>
</div>

<script>
    var map = L.map('actualMap').setView([13.621775, 123.194824], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>

<div class="container-fluid px-5 py-3 h-100 text-white">
    {{-- Label and select tag --}}
    <div class="row px-3">
        <h1 class="fs-1 col-1 me-5">Routes</h1>
        <div class="col-2 py-3 d-flex align-items-center justify-content-center">
            <select class="form-select form-select-sm " name="routeSelector" id="routeSelector" 
                aria-label="Default select example">
                <option selected>Select Location</option>
                <option value="Daet">Daet</option>
                <option value="Iriga">Iriga</option>
                <option value="Lagonoy">Lagonoy</option>
                <option value="Legaspi">Legaspi</option>
                <option value="Polangui">Polangui</option>
            </select>
        </div>
       
    </div>
    <div class="row table-bg rounded flex-row py-3">
        {{-- Trips display table --}}
        <div class="table-responsive table-body">
            <table class="col-12 table table-dark table-hover table-striped table-sm text-white fw-medium">
                <thead>
                    <th scope="col">Bus No.</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Estimated Arrival Time</th>
                    <th scope="col">Distance</th>
                    <th scope="col">Fare</th>
                    <th scope="col">Driver</th>
                    <th scope="col">Bus Liner</th>
                </thead>
                <tbody>
                    {{-- Display table data via blade templating --}}
                    @foreach ($tripsData as $row)
                        <tr>
                            <th scope="row">{{ $row->bus_data->bus_number ?? 'N/A' }}</th>
                            <td>{{ $row->departure_time ?? 'N/A'}}</td>
                            <td>{{ $row->arrival_time ?? 'N/A'}}</td>
                            <td>{{ $row->bus_routes->route_distance ?? 'N/A'}}</td>
                            <td>{{ $row->bus_routes->route_fare ?? 'N/A' }}/ km</td>
                            <td>{{ $row->bus_drivers->driver_name ?? 'N/A' }}</td>
                            <td>{{ $row->bus_data->bus_company ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Listen for changes to the select element
        $('#routeSelector').on('change', function() {
            // Get the selected option value
            var selectedOption = $(this).val();

            // Make an AJAX request to get the updated table data
            $.ajax({
                url: 'get-table-data.php', // Replace with the URL to your PHP script
                type: 'POST',
                data: { route: selectedOption },
                success: function(response) {
                    // Update the table with the new data
                    $('#table-wrapper').html(response);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

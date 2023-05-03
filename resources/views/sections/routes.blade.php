<div class="container-fluid px-5 py-3 h-100 text-white">
    <div class="row px-3"><h1 class="fs-1">Routes</h1></div>
    <div class="row table-bg rounded flex-column">
        <div class="col-2 py-3">
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
        <table class="col-12 table text-white fw-medium">
            <thead>
                <th scope="col">Bus No.</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Estimated Arrival Time</th>
                <th scope="col">Bus Liner</th>
                <th scope="col">Distance</th>
                <th scope="col">Fare</th>
                <th scope="col">Driver</th>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->bus_data->bus_number ?? 'N/A' }}</td>
                        <td>{{ $row->departure_time }}</td>
                        <td>{{ $row->arrival_time }}</td>
                        <td>{{ $row->bus_model }}</td>
                        <td>{{ $bus_trip->bus_drivers->driver_name ?? 'N/A' }}</td>
                        <td>{{ $bus_trip->bus_drivers->driver_name ?? 'N/A' }}</td>
                    </tr>
                @endforeach
                
                <tr>
                    <th scope="row">1</th>
                    <td> eh </td>   
                    <td>8:30</td>
                    <td>Jian Are you reading this?</td>
                    <td>69km</td>
                    <td>420</td>
                    <td>Kono Dio Ga!!!</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

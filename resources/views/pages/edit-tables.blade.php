@auth
    @extends('layouts.app')

    @section('content')
        <section class="w-100 container-fluid">
            <div class="container-fluid flex-column px-5 py-3 h-100 w-100">
                <div class="container-lg">
                    <label for="tripTable">
                        <h1>Trips Table</h1>
                    </label>
                    <form method="POST" action="{{ route('store') }}" id="tripTable" class="d-flex align-items-center gap-5">
                        @csrf
                        <label class="h-25" for="destination">Destination:</label>
                        <div class="col-2 py-3 d-flex align-items-center justify-content-center flex-column">
                            <select class="form-select form-select-sm " name="destination" id="destination"
                                aria-label="Default select example" required>
                                <option value="" selected>Select Location</option>
                                <option value="Daet">Daet</option>
                                <option value="Iriga">Iriga</option>
                                <option value="Lagonoy">Lagonoy</option>
                                <option value="Legaspi">Legaspi</option>
                                <option value="Polangui">Polangui</option>
                            </select>
                        </div>

                        <label class="h-25" for="busNo">Bus Number:</label>
                        <div class="col-2 py-3 d-flex align-items-center justify-content-center flex-column">
                            <select class="form-select form-select-sm" name="busNo" id="">
                                @foreach ($bus_data as $bus_num)
                                    <option value="{{ $bus_num['bus_number'] }}">{{ $bus_num['bus_number'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label class="h-25" for="departure">Departure Time:</label>
                        <div class="col-2 py-3 d-flex align-items-center justify-content-center flex-column">
                            <input type="time" name="departure" id="departure">
                        </div>
                        <input type="submit" value="ADD">
                    </form>
                </div>
            </div>

            <hr>

            {{-- Routes table --}}
            <div class="container-fluid px-5">
                {{-- Label and select tag --}}
                <div class="row px-3">
                    <h1 class="fs-1 col-1 me-5">Routes</h1>
                    <div class="col-2 py-3 d-flex align-items-center justify-content-center">
                        <select class="form-select form-select-sm" id="routeSelector" aria-label="Default select example">
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
                        <table class="col-12 table table-dark table-hover table-striped table-sm text-white fw-medium"
                            id="routeTable">
                            <thead>
                                <th scope="col">Bus No.</th>
                                <th scope="col">Departure Time</th>
                                <th scope="col">Estimated Arrival Time</th>
                                <th scope="col">Distance</th>
                                <th scope="col">Fare</th>
                                <th scope="col">Driver</th>
                                <th scope="col">Bus Liner</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                {{-- Display table data via blade templating --}}
                                @foreach ($tripsData as $row)
                                    <tr>
                                        <th scope="row">{{ $row->bus_data->bus_number ?? 'N/A' }}</th>
                                        <td>{{ $row->departure_time ?? 'N/A' }}</td>
                                        <td>{{ $row->arrival_time ?? 'N/A' }}</td>
                                        <td>{{ $row->bus_routes->route_distance ?? 'N/A' }} km</td>
                                        <td>{{ $row->bus_routes->route_fare ?? 'N/A' }}/ km</td>
                                        <td>{{ $row->bus_data->bus_driver ?? 'N/A' }}</td>
                                        <td>{{ $row->bus_data->bus_company ?? 'N/A' }}</td>
                                        <td>
                                            <div class="h-100 w-100">
                                                <button type="button" class="btn btn-primary btn-sm w-100"
                                                    data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="/edit-tables/delete/{{$row->id}}" method = "POST"
                                                class="d-flex align-items-center">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Trip</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="edit-bus-number" class="col-form-label py-1">Bus Number:</label>
                                        <input type="text" value="insert code for bus number ehre" class="form-control"
                                            id="edit-bus-number" disabled>
                                        <label for="edit-departure" class="py-1">Bus Departure: </label>
                                        <input type="time" class="py-1" name="departure" id="edit-departure">
                                    </div>
                                    <label for="edit-destination">Destination</label>
                                    <div class="w-100 col-2 py-3 d-flex align-items-center justify-content-center">
                                        <select class="form-select form-select-sm" id="edit-destination"
                                            aria-label="Default select example" required>
                                            <option value="" selected>Select Location</option>
                                            <option value="Daet">Daet</option>
                                            <option value="Iriga">Iriga</option>
                                            <option value="Lagonoy">Lagonoy</option>
                                            <option value="Legaspi">Legaspi</option>
                                            <option value="Polangui">Polangui</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="save-changes-button">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>
                // Listen for changes to the select element
                $('#routeSelector').on('change', function() {
                    // Get the selected option value
                    var selectedOption = $(this).val();

                    // Make an AJAX request to get the updated table data
                    $.ajax({
                        type: 'PUT',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/routes/' + selectedOption, // Replace with the URL to your PHP script
                        data: {
                            route: selectedOption
                        },
                        success: function(response) {
                            console.log('success:', response);
                            // Update the table with the new data
                            var tableBody = $("#routeTable tbody");

                            tableBody.empty();

                            response.forEach(function(row) {
                                var tr = $("<tr>");
                                tr.append($("<td>").text(row.bus_data.bus_number ?? 'N/A'));
                                tr.append($("<td>").text(row.departure_time ?? 'N/A'));
                                tr.append($("<td>").text(row.arrival_time ?? 'N/A'));
                                tr.append($("<td>").text((row.bus_routes.route_distance ?? 'N/A') +
                                    ' km'));
                                tr.append($("<td>").text((row.bus_routes.route_fare ?? 'N/A') +
                                    '/ km'));
                                tr.append($("<td>").text(row.bus_data.bus_driver ?? 'N/A'));
                                tr.append($("<td>").text(row.bus_data.bus_company ?? 'N/A'));
                                tableBody.append(tr);
                            });
                        },

                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                        }
                    });
                });
            </script>
        </section>
    @endsection
@endauth

@extends('layouts.app')

@section('content')
    <section class="w-100">
        <div class="container-fluid flex-column px-5 py-3 h-100 w-100">
            <div class="container-lg">
                <label for="tripTable">
                    <h1>Trips Table</h1>
                </label>
                <form action="" id="tripTable" class="">
                    <label for="destination">Destination</label>
                    <div class="col-2 py-3 d-flex align-items-center justify-content-center">
                        <select class="form-select form-select-sm " name="destination" id="destination"
                            aria-label="Default select example" required>
                            <option value="" elected>Select Location</option>
                            <option value="Daet">Daet</option>
                            <option value="Iriga">Iriga</option>
                            <option value="Lagonoy">Lagonoy</option>
                            <option value="Legaspi">Legaspi</option>
                            <option value="Polangui">Polangui</option>
                        </select>
                    </div>
                    <label for="busNo">Bus Number</label>
                    <input type="text" name="" id="busNo" placehold="required" required>
                    <label for="busLiner">Bus Liner</label>
                    <input type="text" name="" id="busLiner">
                    <label for="busDriver">Bus Driver</label>
                    <input type="text" name="" id="busDriver">
                    <label for="departure">Departure TimeS</label>
                    <input type="time" name="" id="departure">
                    <input type="submit" value="ADD">
                </form>
            </div>
            <div>
                {{-- Label and select tag --}}
                <div class="row px-3">
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
                {{-- Trips display table --}}
                <div class="row table-bg rounded flex-row py-3">
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
                                        <td>{{ $row->departure_time ?? 'N/A' }}</td>
                                        <td>{{ $row->arrival_time ?? 'N/A' }}</td>
                                        <td>{{ $row->bus_routes->route_distance ?? 'N/A' }}</td>
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
        </div>
    </section>
@endsection

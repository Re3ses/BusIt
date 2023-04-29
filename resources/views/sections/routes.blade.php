<div class="container-fluid p-5 h-100">
    <div class="row table-bg rounded h-100 flex-column">
        <div class="col-2 py-3">
            <select class="form-select form-select-sm " name="routeSelector" id="routeSelector"
                aria-label="Default select example">
                <option selected>Select Location</option>
                <option value="1">Daet</option>
                <option value="2">Iriga</option>
                <option value="3">Lagonoy</option>
                <option value="4">Legazpi</option>
                <option value="5">Polangui</option>
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
                <tr>
                    <th scope="row">1</th>
                    <td>7:00</td>
                    <td>8:30</td>
                    <td>Jian Are you reading this?</td>
                    <td>69km</td>
                    <td>420</td>
                    <td>Kono Dio Ga!!!</td>
                </tr>
            </tbody>

            {{-- SAMPLE CODE FOR TABLE --}}
            {{-- <table id="table-data">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->column1 }}</td>
                            <td>{{ $row->column2 }}</td>
                            <td>{{ $row->column3 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}

        </table>
    </div>
</div>

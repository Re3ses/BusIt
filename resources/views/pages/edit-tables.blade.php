@extends('layouts.app')

@section('content')
    <section class="w-100">
        <div class="container-fluid flex-column px-5 py-3 h-100 w-100">
            <div class="container-lg">
                <label for="tripTable">
                    <h1>Trips Table</h1>
                </label>
                <form method="POST" action="{{ route('store') }}"  id="tripTable" class="">
                    @csrf
                    <label for="destination">Destination</label>
                    <div class="col-2 py-3 d-flex align-items-center justify-content-center">
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
                    <label for="busNo">Bus Number</label>
                    
                    <select name="busNo" id="">
                        @foreach($bus_data as $bus_num)
                        <option value="{{$bus_num['bus_number']}}">{{$bus_num['bus_number']}}</option>
                        @endforeach

                    </select>
                    <label for="departure">Departure TimeS</label>
                    <input type="time" name="departure" id="departure">
                    <input type="submit" value="ADD">
                </form>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <label for="tripTable"><h1>Trips Table</h1></label>
        <form action="" id="tripTable">
            <label for="busNo">Bus Number</label>
            <input type="text" name="" id="busNo" placehold="required" required>
            <label for="busLiner">Bus Liner</label>
            <input type="text" name="" id="busLiner" >
            <label for="busDriver">Bus Driver</label>
            <input type="text" name="" id="busDriver">
            <label for="departure">Departure TimeS</label>
            <input type="time" name="" id="departure">
            <input type="submit" value="ADD">
        </form>
    </div>
    <div>
        {{-- Add table here --}}
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <section class="w-100 vh-100 mb-5 landing" id="landing">
        @include('sections.landing')
    </section>
    {{-- <div class="separator w-100"></div> --}}
    <section class="w-100 vh-100 my-5 routes" id="routes">
        @include('sections.routes')
    </section>
    <section class="w-100 vh-50 weather" id="weather">
        
    </section>
    <section class="w-100 vh-100" id="news">
        
    </section>
    <section class="w-100 vh-100" id="map">
        
    </section>
    <section class="w-100 vh-100" id="about">
        
    </section>
@endsection
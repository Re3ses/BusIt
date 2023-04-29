@extends('layouts.app')

@section('content')
    <section class="w-100 vh-100 mb-5 landing shadow" id="landing">
        @include('sections.landing')
    </section>
    {{-- <div class="separator w-100"></div> --}}
    <section class="w-100 mt-5 routes shadow inset-shadow" id="routes">
        @include('sections.routes')
    </section>
    <section class="w-100 weather shadow inset-shadow" id="weather">
        @include('sections.weather')
    </section>
    <section class="w-100 vh-100 news shadow" id="news">
        
    </section>
    <section class="w-100 vh-100 map shadow" id="map">
        
    </section>
    <section class="w-100 vh-100 about shadow" id="about">
        
    </section>
@endsection
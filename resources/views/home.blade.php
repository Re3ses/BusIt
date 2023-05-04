@extends('layouts.app')

@section('content')
    {{-- Landing section --}}
    <section class="w-100 vh-100 landing shadow" id="landing">
        @include('sections.landing')
    </section>
    {{-- Weather section --}}
    <section class="w-100 mb-5 weather inset-shadow" id="weather">
        @include('sections.weather')
    </section>
    {{-- Routes section --}}
    <section class="w-100 routes shadow inset-shadow" id="routes">
        @include('sections.routes')
    </section>
    {{-- News section --}}
    <section class="w-100 vh-100 news shadow" id="news">
        
    </section>
    {{-- Map section --}}
    <section class="w-100 vh-100 map shadow" id="map">
        
    </section>
    {{-- About section --}}
    <section class="w-100 vh-100 about shadow" id="about">
        
    </section>
@endsection
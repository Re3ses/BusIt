@extends('layouts.app')

@section('content')
    {{-- Landing section --}}
    <section class="w-100 vh-100 landing shadow" id="landing">
        @include('sections.landing')
    </section>
    {{-- Weather section --}}
    <section class="w-100 weather inset-shadow" id="weather">
        @include('sections.weather')
    </section>
    {{-- Routes section --}}
    <section class="w-100 routes shadow inset-shadow" id="routes">
        @include('sections.routes')
    </section>
    {{-- News section --}}
    <section class="w-100 news shadow" id="news">
        @include('sections.news')
    </section>
    {{-- Map section --}}
    <section class="w-100 map shadow" id="map">
        @include('sections.map')
    </section>
    {{-- About section --}}
    <section class="w-100 about shadow" id="about">
        @include('sections.about')
    </section>
@endsection
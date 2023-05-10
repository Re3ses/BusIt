@extends('layouts.app')

@section('content')
    {{-- Landing section --}}
    <section class="w-100 vh-100 landing " id="landing">
        @include('sections.landing')
    </section>
    {{-- Weather section --}}
    <section class="w-100 weather" id="weather">
        @include('sections.weather')
    </section>
    {{-- Routes section --}}
    <section class="w-100 routes" id="routes">
        @include('sections.routes')
    </section>
    {{-- News section --}}
    <section class="w-100 news" id="news">
        @include('sections.news')
    </section>
    {{-- Map section --}}
    <section class="w-100 map" id="map">
        @include('sections.map')
    </section>
    {{-- About section --}}
    <section class="w-100 about " id="about">
        @include('sections.about')
    </section>
@endsection
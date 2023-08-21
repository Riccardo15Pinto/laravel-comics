@extends('layouts.layout')

@section('title', 'COMIC')

@section('item')
    <div class="flag-detail">
        <figure>
            <img src="{{ $product['thumb'] }}" alt="">
        </figure>
    </div>
@endsection


@section('main')
    <section class="details">

        <div class="info-detail">
            <h1>{{ $product['title'] }}</h1>
            <p>{{ $product['description'] }}</p>
        </div>

        <figure>
            <img src="{{ @Vite::asset('resources/img/adv.jpg') }}" alt="">
        </figure>
    </section>
@endsection

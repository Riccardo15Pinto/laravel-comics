<?php $comics = config('comics'); ?>

@extends('layouts.layout')

@section('title', 'COMICS')

@section('main')
    <div class="home-main">

        <div class="card-section">
            <h1>COMICS</h1>
            <div class="container-card">
                @foreach ($comics as $comic)
                    <div class="card">
                        <figure>
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </figure>

                        <h3>{{ $comic['series'] }}</h3>
                    </div>
                @endforeach

            </div>
            <a href="#" class="button">LOAD MORE</a>
        </div>
    </div>
@endsection

<?php $comics = config('comics'); ?>
<?php $buys = config('buys'); ?>

@extends('layouts.layout')

@section('title', 'HOME')

@section('main')
    <section id="home-main">
        @include('includes/jumbotron')
        <div class="card-section">
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
        <div class="info-merch">

            <div>
                <ul>
                    @foreach ($buys as $buy)
                        <li>
                            <figure>
                                <img src="{{ @Vite::asset("resources/img/{$buy['pic']}") }}" alt="">
                            </figure>
                            <span>{{ $buy['name'] }}</span>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
@endsection

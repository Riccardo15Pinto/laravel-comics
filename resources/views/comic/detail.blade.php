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

        <div class="detail-container">

            <div class="col">

                <div class="info-detail">

                    <h1>{{ $product['title'] }}</h1>

                    <div id="info-avaible">

                        <div>
                            <h4>U.S. Price:
                                <span>
                                    {{ $product['price'] }}
                                </span>
                            </h4>
                            <h4>Avaible</h4>
                        </div>
                        <div>
                            <h4>Check Avaiblety</h4>
                        </div>
                    </div>

                    <p>{{ $product['description'] }}</p>
                </div>
            </div>
            <div class="col">
                <h1>Advertisment</h1>

                <figure>
                    <img src="{{ @Vite::asset('resources/img/adv.jpg') }}" alt="">
                </figure>
            </div>
        </div>

        <div class="detail-product">
            <div class="detail-product-container">

                <div>
                    <h2>Talent</h2>
                    <ul>
                        <li>
                            <h3>Art by:</h3>
                            <div>
                                @foreach ($product['artists'] as $artist)
                                    <span>{{ $artist }} @if (!$loop->last)
                                            ,
                                        @else
                                            .
                                        @endif
                                    </span>
                                @endforeach
                            </div>
                        </li>

                        <li>
                            <h3>Written by:</h3>
                            <div>
                                @foreach ($product['writers'] as $artist)
                                    <span>{{ $artist }} @if (!$loop->last)
                                            ,
                                        @else
                                            .
                                        @endif
                                    </span>
                                @endforeach
                            </div>
                        </li>

                    </ul>
                </div>

                <div>
                    <h2>Specs</h2>
                    <ul>
                        <li>
                            <h3>Series:</h3>
                            <h3>{{ $product['series'] }}</h3>
                        </li>

                        <li>
                            <h3>U.S.Price:</h3>
                            <h3>{{ $product['price'] }}</h3>
                        </li>

                        <li>
                            <h3>On Sale Date:</h3>
                            <h3>{{ $product['sale_date'] }}</h3>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection

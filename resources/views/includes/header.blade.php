<?php $voices = config('voices'); ?>

<header>

    <div>

        <figure>
            <img src="{{ @Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </figure>
        <ul>
            @foreach ($voices as $voice)
                <li>

                    <a href="{{ route($voice['route']) }}">{{ $voice['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>

</header>

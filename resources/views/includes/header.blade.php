<header>

    <div>

        <figure>
            <img src="{{ @Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </figure>
        <ul>
            @foreach ($voices as $voice)
                <li>

                    <a href="">{{ $voice['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>

</header>

<footer>
    <div class="container">
        <a href="#" class="button">SING-UP NOW!</a>
        <div class="social">
            <h2>FOLLOW US</h2>
            <ul>
                @foreach ($socials as $social)
                    <li>

                        <a href="#">
                            <figure>
                                <img src="{{ @Vite::asset("resources/img/{$social['picture']}") }}">
                            </figure>
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</footer>

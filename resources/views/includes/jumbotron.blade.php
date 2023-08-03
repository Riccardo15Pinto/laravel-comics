<section class="jumbo-section">
    <div class="top-jumbo">
        <h2>Current Series</h2>
    </div>
    <div class="bottom-jumbo">
        <div class="container-card">
            @foreach($comics as $comic)

            <div class="card">
                <figure>
                    <img src="{{ $comic['thumb']}}" alt="">
                </figure>

                <h3>{{ $comic['series']}}</h3>
            </div>
            @endforeach

        </div>
        <a href="#" class="button">LOAD MORE</a>
    </div>
</section>
<section class="info-merch">

    <div>
        <ul>
            @foreach($buys as $buy)

            <li>
                <figure>
                    <img src="{{@Vite::asset($buy['pic'])}}" alt="">
                </figure>
                <span>{{ $buy['name'] }}</span>
            </li>
            @endforeach

        </ul>
    </div>
</section>
<section class="jumbo-section">
    <div class="top-jumbo">
        <h2>Current Series</h2>
    </div>
    <div class="bottom-jumbo">
        <div class="container-card">
            <ComicCard v-for=" comic in comics" :comic="comic" :key="comic.series" />
        </div>
        <a href="#" class="button">LOAD MORE</a>
    </div>
</section>
<section class="info-merch">

    <div>
        <ul>
            <li v-for="image in images" :key="image.name">
                <figure>
                    <img :src="getImagePath(image.pic)" alt="">
                </figure>
                <span>{{ image.name }}</span>
            </li>
        </ul>
    </div>
</section>
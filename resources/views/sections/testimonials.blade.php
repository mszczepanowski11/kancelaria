<section class="sec sec--green">
    <div class="wrap">
        <p class="eyebrow">Opinie Klientów</p>
        <h2 class="h2 mb-56">Co mówią o&nbsp;Kancelarii <em>Klienci</em></h2>
        <div class="cards3">
            @foreach ($c['testimonials'] as $quote)
                <figure class="card quote">
                    <div>
                        <p class="quote__mark" aria-hidden="true">"</p>
                        <blockquote>{{ $quote }}</blockquote>
                    </div>
                    <figcaption>Opinia z Google · ★★★★★</figcaption>
                </figure>
            @endforeach
        </div>
        <div class="rating">
            <p class="rating__score"><span>{{ $c['rating'] }}</span> · {{ $c['reviews_count'] }} opinii w&nbsp;Google</p>
            <a class="btn btn--mint" href="{{ config('site.google_reviews') }}" target="_blank" rel="noopener">Zobacz wszystkie opinie</a>
        </div>
    </div>
</section>

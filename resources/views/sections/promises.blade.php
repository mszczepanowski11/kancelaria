<section class="sec sec--green">
    <div class="wrap">
        <div class="sec-head">
            <div>
                <p class="eyebrow">Jak pracuję</p>
                <h2 class="h2">Trzy rzeczy,<br><em>na które możesz liczyć</em></h2>
            </div>
            <p class="lead">Sprawa sądowa to dla większości ludzi stres i&nbsp;niepewność. Dlatego od pierwszej rozmowy dbam o&nbsp;to, by było dla Ciebie jasne, na czym stoisz, co się dzieje w&nbsp;Twojej sprawie i&nbsp;że zawsze możesz do mnie zadzwonić.</p>
        </div>
        <div class="cards3">
            @foreach ($c['promises'] as [$title, $desc])
                <article class="card">
                    <p class="card__no">{{ sprintf('%02d', $loop->iteration) }}</p>
                    <h3>{{ $title }}</h3>
                    <p>{{ $desc }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

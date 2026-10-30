<section id="uslugi" class="sec sec--green">
    <div class="wrap">
        <div class="sec-head">
            <div>
                <p class="eyebrow">Zakres usług</p>
                <h2 class="h2">Sprawy, które <em>prowadzę</em></h2>
            </div>
            <p class="lead">W&nbsp;tych sprawach mam największe doświadczenie. Zajmuję się nimi od lat, dlatego wiem, na co zwrócić uwagę już na samym początku.</p>
        </div>
        <div class="services">
            @foreach ($c['services'] as [$title, $desc])
                <article class="service">
                    <span class="service__no">{{ sprintf('%02d', $loop->iteration) }}</span>
                    <div>
                        <h3>{{ $title }}</h3>
                        <p>{{ $desc }}</p>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="cta-row">
            <div class="cta-row__text">
                <p class="cta-row__title">Twojej sprawy nie ma na liście?</p>
                <p>Prowadzę również sprawy rodzinne, karne i&nbsp;administracyjne. Zadzwoń lub napisz - powiem, czy i&nbsp;jak mogę pomóc.</p>
            </div>
            <a class="btn btn--light" href="#formularz">Napisz wiadomość</a>
        </div>
    </div>
</section>

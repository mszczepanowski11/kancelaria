<section class="sec">
    <div class="wrap">
        <p class="eyebrow">Wybrane sprawy</p>
        <h2 class="h2 mb-56">Pomagam podejmować dobre decyzje <em>w&nbsp;trudnych momentach</em></h2>
        <div class="cases">
            <img class="cases__img" src="{{ asset('images/sprawy-biurko.jpg') }}" alt="Adwokat Piotr Pietrołaj przy biurku" loading="lazy">
            <div class="cases__col">
                @foreach (array_slice($c['cases'], 0, 3) as [$title, $desc])
                    <article class="case"><h3>{{ $title }}</h3><p>{{ $desc }}</p></article>
                @endforeach
            </div>
            <div class="cases__col">
                @foreach (array_slice($c['cases'], 3) as [$title, $desc])
                    <article class="case"><h3>{{ $title }}</h3><p>{{ $desc }}</p></article>
                @endforeach
                <div class="ph ph--11 cases__square">
                    <img src="{{ asset('images/sprawy-klawiatura.jpg') }}" alt="Dłonie na klawiaturze laptopa" style="object-position: 60% 45%" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

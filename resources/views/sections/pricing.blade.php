<section id="wynagrodzenie" class="sec sec--green">
    <div class="wrap">
        <div class="sec-head mb-48">
            <div>
                <p class="eyebrow">Wynagrodzenie</p>
                <h2 class="h2">Jak się <em>rozliczamy</em></h2>
            </div>
            <p class="lead">Stawkę ustalam indywidualnie po zapoznaniu się ze sprawą. Zanim rozpocznę pracę, wiesz, jak będziemy się rozliczać.</p>
        </div>
        <div class="grid2 billing">
            <div class="billing__main">
                <p class="label">Preferowana forma</p>
                <h3>Rozliczenie godzinowe</h3>
                <div class="billing__paras">
                    <p>Najczęściej rozliczam się godzinowo. Płacisz za faktycznie wykonaną pracę, a&nbsp;do rozliczenia dołączam zestawienie czynności - wiesz dokładnie, za co płacisz.</p>
                    <p>Nie musisz płacić dużej kwoty z&nbsp;góry. Wynagrodzenie rozkłada się w&nbsp;czasie i&nbsp;rośnie wraz z&nbsp;postępem sprawy.</p>
                    <p>Rozprawa może trwać kwadrans albo kilka godzin, a&nbsp;cała sprawa - wiele miesięcy. Płacisz tylko za czas, w&nbsp;którym faktycznie dla Ciebie pracuję, a&nbsp;nie za oczekiwanie na kolejny termin.</p>
                </div>
            </div>
            <div>
                <p class="label mb-6">Inne możliwości</p>
                @foreach ($c['pricing'] as [$title, $desc])
                    <div class="billing__item"><h4>{{ $title }}</h4><p>{{ $desc }}</p></div>
                @endforeach
            </div>
        </div>
        <div class="cta-row cta-row--lined">
            <p class="cta-row__text">Pierwsza konsultacja jest płatna - jej koszt podaję przy umawianiu terminu.</p>
            <a class="btn btn--light" href="#formularz">Zapytaj o wycenę</a>
        </div>
    </div>
</section>

@php
    $items = [
        ['p1', 'Administrator danych', [
            'Administratorem danych osobowych jest adwokat Piotr Pietrołaj, prowadzący Kancelarię Adwokacką Piotr Pietrołaj, '.config('site.address').', NIP '.config('site.nip').', REGON '.config('site.regon').'.',
            'W sprawach dotyczących danych osobowych możesz kontaktować się pisemnie na adres Kancelarii, e-mailowo: '.config('site.email').' lub telefonicznie: '.config('site.phone_label').'.',
        ]],
        ['p2', 'Cele i podstawy przetwarzania', [
            'Odpowiedź na zapytanie przesłane przez formularz, e-mail lub telefon: zgoda (art. 6 ust. 1 lit. a RODO) oraz prawnie uzasadniony interes administratora (art. 6 ust. 1 lit. f RODO).',
            'Podjęcie działań przed zawarciem umowy oraz świadczenie pomocy prawnej: art. 6 ust. 1 lit. b RODO.',
            'Wypełnienie obowiązków prawnych, w szczególności podatkowych, rachunkowych i wynikających z ustawy Prawo o adwokaturze: art. 6 ust. 1 lit. c RODO.',
            'Ustalenie, dochodzenie lub obrona roszczeń: art. 6 ust. 1 lit. f RODO.',
        ]],
        ['p3', 'Tajemnica adwokacka', [
            'Wszystkie informacje przekazane Kancelarii w związku z prośbą o pomoc prawną są objęte tajemnicą adwokacką, niezależnie od tego, czy doszło do zawarcia umowy. Obowiązek ten wynika z art. 6 ustawy Prawo o adwokaturze i nie jest ograniczony w czasie.',
        ]],
        ['p4', 'Odbiorcy danych', [
            'Dane mogą być przekazywane wyłącznie podmiotom wspierającym działalność Kancelarii na podstawie umów powierzenia: dostawcy hostingu i poczty e-mail, biuru rachunkowemu, dostawcom oprogramowania oraz, po wyrażeniu zgody, dostawcom narzędzi analitycznych i map (Google Ireland Ltd.). Dane mogą być udostępniane sądom i organom, gdy wymaga tego prowadzenie sprawy lub przepis prawa.',
        ]],
        ['p5', 'Okres przechowywania', [
            'Dane z zapytań, które nie zakończyły się zawarciem umowy, przechowujemy przez czas potrzebny do udzielenia odpowiedzi, nie dłużej niż 12 miesięcy. Dane Klientów przechowujemy przez czas prowadzenia sprawy, a następnie przez okres wymagany przepisami o archiwizacji akt adwokackich, przepisami podatkowymi oraz do upływu terminów przedawnienia roszczeń.',
        ]],
        ['p6', 'Twoje prawa', [
            'Masz prawo do dostępu do danych i otrzymania ich kopii, ich sprostowania, usunięcia lub ograniczenia przetwarzania, przenoszenia danych, wniesienia sprzeciwu wobec przetwarzania opartego na prawnie uzasadnionym interesie oraz cofnięcia zgody w dowolnym momencie.',
            'Możesz też wnieść skargę do Prezesa Urzędu Ochrony Danych Osobowych, ul. Stawki 2, 00-193 Warszawa. Niektóre prawa mogą być ograniczone ze względu na obowiązek zachowania tajemnicy adwokackiej.',
        ]],
        ['p7', 'Dobrowolność podania danych', [
            'Podanie danych jest dobrowolne, ale niezbędne do udzielenia odpowiedzi na zapytanie lub zawarcia umowy. Dane nie są wykorzystywane do zautomatyzowanego podejmowania decyzji, w tym profilowania.',
        ]],
        ['p8', 'Pliki cookies', [
            'Strona korzysta z plików cookies. Szczegóły, w tym rodzaje plików i sposób zmiany zgody, opisuje osobna strona o plikach cookies.',
        ]],
        ['p9', 'Zmiany polityki', [
            'Polityka może być aktualizowana w razie zmiany przepisów lub sposobu działania strony. Aktualna wersja jest zawsze dostępna na tej stronie.',
        ]],
    ];
    $nb = fn (string $s) => preg_replace('/ ([aiouwzAIOUWZ]) /u', " $1\u{00A0}", $s);
@endphp
<x-layouts.app
    title="Polityka prywatności - Kancelaria Adwokacka Piotr Pietrołaj"
    description="Informacje o przetwarzaniu danych osobowych na stronie Kancelarii Adwokackiej Piotr Pietrołaj."
>
    <section class="sec">
        <div class="legal-wrap legal-hero">
            <p class="eyebrow">Informacje prawne</p>
            <h1 class="h2 mb-24">Polityka <em>prywatności</em></h1>
            <p class="lead lead--wide">Ta polityka wyjaśnia, w&nbsp;jaki sposób Kancelaria Adwokacka Piotr Pietrołaj przetwarza dane osobowe osób odwiedzających stronę oraz kontaktujących się z&nbsp;Kancelarią. Spełnia obowiązek informacyjny z&nbsp;art. 13 i&nbsp;14 RODO.</p>
        </div>
    </section>
    <section>
        <div class="legal-wrap legal-body">
            @foreach ($items as [$id, $title, $paras])
                <article id="{{ $id }}" class="legal-item">
                    <span class="legal-item__no">{{ sprintf('%02d', $loop->iteration) }}</span>
                    <div>
                        <h2>{{ $title }}</h2>
                        @foreach ($paras as $p)
                            <p>{{ $nb($p) }}</p>
                        @endforeach
                        @if ($id === 'p8')
                            <p><a href="{{ route('cookies') }}">Przejdź do informacji o plikach cookies</a></p>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-layouts.app>

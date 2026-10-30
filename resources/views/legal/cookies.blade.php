@php
    $items = [
        ['c1', 'Czym są pliki cookies', [
            'Pliki cookies to niewielkie pliki tekstowe zapisywane w przeglądarce podczas korzystania ze strony. Podobną funkcję pełni pamięć lokalna przeglądarki (localStorage), w której zapisujemy Twój wybór dotyczący cookies.',
        ]],
        ['c2', 'Niezbędne', [
            'Zapewniają prawidłowe działanie strony: bezpieczne wysłanie formularza kontaktowego (sesja i ochrona przed nadużyciami) oraz zapamiętanie Twojej decyzji dotyczącej cookies. Nie wymagają zgody.',
        ]],
        ['c3', 'Analityczne', [
            'Jeśli wyrazisz zgodę, uruchamiamy Google Tag Manager i Google Analytics, które pomagają zrozumieć, jak odwiedzający korzystają ze strony. Dostawcą jest Google Ireland Ltd. Bez zgody te narzędzia nie są ładowane.',
        ]],
        ['c4', 'Mapa Google', [
            'Mapa w sekcji Kontakt pochodzi z serwisu Google Maps, który może zapisywać własne pliki cookies. Ładujemy ją dopiero po wyrażeniu zgody lub po kliknięciu przycisku „Pokaż mapę”.',
        ]],
        ['c5', 'Jak zmienić zgodę', [
            'Swoją decyzję możesz zmienić w każdej chwili za pomocą przycisku poniżej lub linku „Ustawienia cookies” w stopce strony. Możesz też usunąć pliki cookies w ustawieniach przeglądarki.',
        ]],
    ];
    $nb = fn (string $s) => preg_replace('/ ([aiouwzAIOUWZ]) /u', " $1\u{00A0}", $s);
@endphp
<x-layouts.app
    title="Pliki cookies - Kancelaria Adwokacka Piotr Pietrołaj"
    description="Informacje o plikach cookies na stronie Kancelarii Adwokackiej Piotr Pietrołaj."
>
    <section class="sec">
        <div class="legal-wrap legal-hero">
            <p class="eyebrow">Informacje prawne</p>
            <h1 class="h2 mb-24">Pliki <em>cookies</em></h1>
            <p class="lead lead--wide">Wyjaśniamy, jakie pliki cookies wykorzystuje strona, w&nbsp;jakim celu i&nbsp;jak możesz zarządzać swoją zgodą. Więcej o&nbsp;przetwarzaniu danych w&nbsp;<a href="{{ route('privacy') }}" style="color:#9DBDAF; text-decoration:underline; text-underline-offset:3px">polityce prywatności</a>.</p>
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
                        @if ($loop->last)
                            <p><a href="#" data-cookie-settings>Zmień ustawienia cookies</a></p>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-layouts.app>

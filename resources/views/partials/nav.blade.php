@php
    $home = request()->routeIs('home') ? '' : route('home');
    $nav = [
        '#o-kancelarii' => 'O kancelarii',
        '#uslugi' => 'Zakres usług',
        '#wspolpraca' => 'Współpraca',
        '#wynagrodzenie' => 'Wynagrodzenie',
        '#kontakt' => 'Kontakt',
    ];
@endphp
<header class="site-header">
    <div class="site-header__in">
        <a class="site-header__logo" href="{{ $home === '' ? '#top' : $home }}">
            <img src="{{ asset('images/logo.png') }}" alt="Kancelaria Adwokacka Piotr Pietrołaj" width="300" height="80">
        </a>
        <nav class="nav" aria-label="Menu główne">
            @foreach ($nav as $href => $label)
                <a href="{{ $home.$href }}">{{ $label }}</a>
            @endforeach
            <a class="nav__cta" href="{{ $home }}#formularz">Umów spotkanie</a>
        </nav>
        <button class="burger" type="button" aria-label="Menu" aria-expanded="false" aria-controls="mmenu"><span></span><span></span><span></span></button>
    </div>
</header>
<div class="mmenu" id="mmenu" aria-hidden="true">
    <nav class="mmenu__nav">
        @foreach ($nav as $href => $label)
            <a href="{{ $home.$href }}" style="--d: {{ number_format(0.12 + $loop->index * 0.06, 2) }}s">{{ $label }}</a>
        @endforeach
    </nav>
    <div class="mmenu__foot">
        <a class="btn btn--green" href="{{ $home }}#formularz">Umów spotkanie</a>
        <div class="mmenu__info">
            <a href="tel:{{ config('site.phone') }}">{{ config('site.phone_label') }}</a>
            <span>ul. Moniuszki 48/2, Kraków</span>
        </div>
    </div>
</div>

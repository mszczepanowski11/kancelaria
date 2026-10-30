@php($home = request()->routeIs('home') ? '' : route('home'))
<footer class="site-footer">
    <div class="site-footer__in">
        <div class="site-footer__brand">
            <img src="{{ asset('images/logo.png') }}" alt="Kancelaria Adwokacka Piotr Pietrołaj" width="270" height="72" loading="lazy">
            <p>{{ config('site.address') }}<br>NIP {{ config('site.nip') }}</p>
        </div>
        <div class="site-footer__col site-footer__col--s">
            <p class="site-footer__label">Nawigacja</p>
            <div class="site-footer__links">
                <a href="{{ $home }}#o-kancelarii">O kancelarii</a>
                <a href="{{ $home }}#uslugi">Zakres usług</a>
                <a href="{{ $home }}#wspolpraca">Współpraca</a>
                <a href="{{ $home }}#wynagrodzenie">Wynagrodzenie</a>
                <a href="{{ $home }}#kontakt">Kontakt</a>
            </div>
        </div>
        <div class="site-footer__col site-footer__col--m">
            <p class="site-footer__label">Kontakt</p>
            <div class="site-footer__links">
                <a href="tel:{{ config('site.phone') }}">{{ config('site.phone_label') }}</a>
                <a href="mailto:{{ config('site.email') }}" class="break">{{ config('site.email') }}</a>
                <span>pon.-pt. 9:00-17:00</span>
            </div>
        </div>
        <div class="site-footer__col site-footer__col--s">
            <p class="site-footer__label">Informacje prawne</p>
            <div class="site-footer__links">
                <a href="{{ route('privacy') }}">Polityka prywatności</a>
                <a href="{{ route('cookies') }}">Pliki cookies</a>
                <a href="#" data-cookie-settings>Ustawienia cookies</a>
            </div>
        </div>
    </div>
    <div class="site-footer__bar">
        <span>© {{ date('Y') }} Kancelaria Adwokacka Piotr Pietrołaj</span>
        <span>Wszelkie prawa zastrzeżone</span>
    </div>
</footer>

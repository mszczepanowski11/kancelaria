@php($status = session('form_status'))
<section id="kontakt" class="sec sec--last">
    <div class="wrap grid2 contact">
        <div>
            <p class="eyebrow">Kontakt</p>
            <h2 class="h2 mb-40">Umów <em>spotkanie</em></h2>
            <dl class="data">
                <div><dt>Adres</dt><dd>{{ config('site.address') }}<br><span class="muted">lokal na parterze</span></dd></div>
                <div><dt>Telefon</dt><dd><a href="tel:{{ config('site.phone') }}">{{ config('site.phone_label') }}</a></dd></div>
                <div><dt>E-mail</dt><dd class="break"><a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></dd></div>
                <div><dt>Godziny</dt><dd>pon.-pt. 9:00-17:00. Po uzgodnieniu spotkania także poza godzinami pracy Kancelarii - osobiście lub zdalnie.</dd></div>
            </dl>
            <div class="map">
                <iframe data-src="https://maps.google.com/maps?q=Kancelaria%20Adwokacka%20Piotr%20Pietro%C5%82aj%2C%20Stanis%C5%82awa%20Moniuszki%2048%2F2%2C%2031-523%20Krak%C3%B3w&amp;z=16&amp;hl=pl&amp;output=embed" title="Mapa dojazdu do Kancelarii" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="map__consent">
                    <p>Mapa Google wyświetli się po zaakceptowaniu plików cookies.</p>
                    <button type="button" class="btn btn--ghost map__load">Pokaż mapę</button>
                </div>
                <a class="map__route" href="https://www.google.com/maps/dir/?api=1&amp;destination=Stanis%C5%82awa%20Moniuszki%2048%2F2%2C%2031-523%20Krak%C3%B3w" target="_blank" rel="noopener">Wyznacz trasę</a>
            </div>
        </div>

        <form id="formularz" class="form" action="{{ route('contact.store') }}" method="post" novalidate>
            @csrf
            <div>
                <h3>Wyślij wiadomość</h3>
                <p class="form__note">Wszystko, co napiszesz, objęte jest tajemnicą adwokacką.</p>
            </div>
            <div class="form__row">
                <label>Imię<input type="text" name="imie" required maxlength="80" autocomplete="given-name"></label>
                <label>Nazwisko<input type="text" name="nazwisko" required maxlength="80" autocomplete="family-name"></label>
            </div>
            <div class="form__row">
                <label>E-mail<input type="email" name="email" required maxlength="120" autocomplete="email"></label>
                <label><span>Telefon <span class="lc">(opcjonalnie)</span></span><input type="tel" name="telefon" maxlength="30" autocomplete="tel"></label>
            </div>
            <label>Temat
                <select name="temat" required>
                    <option value="" disabled selected>Wybierz temat</option>
                    @foreach (config('site.home.topics') as $topic)
                        <option>{{ $topic }}</option>
                    @endforeach
                </select>
            </label>
            <label>Treść wiadomości<textarea name="tresc" rows="4" required maxlength="5000" placeholder="Opisz krótko swoją sprawę - wystarczy kilka zdań."></textarea></label>
            <label class="form__consent">
                <input type="checkbox" name="zgoda" value="1" required>
                <span>Wyrażam zgodę na przetwarzanie moich danych osobowych w&nbsp;celu udzielenia odpowiedzi na zapytanie. Administratorem danych jest Kancelaria Adwokacka Piotr Pietrołaj. Szczegóły w&nbsp;<a href="{{ route('privacy') }}">polityce prywatności</a>.</span>
            </label>
            <div class="hp" aria-hidden="true"><label>Strona www<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
            <input type="hidden" name="t" value="{{ now()->timestamp }}">
            <button type="submit" class="btn btn--green form__submit">Wyślij wiadomość</button>
            <p @class(['form__msg', 'is-ok' => $status === 'ok', 'is-err' => $status === 'blad']) role="status" @if (! $status) hidden @endif>
                @if ($status === 'ok')
                    Dziękuję, wiadomość została wysłana. Odpowiem najszybciej, jak to możliwe.
                @elseif ($status === 'blad')
                    Nie udało się wysłać wiadomości. Proszę sprawdzić pola formularza lub zadzwonić: 608 358 731.
                @endif
            </p>
            <p class="form__call">Wolisz porozmawiać? Zadzwoń: <a href="tel:{{ config('site.phone') }}">608 358 731</a></p>
        </form>
    </div>
</section>

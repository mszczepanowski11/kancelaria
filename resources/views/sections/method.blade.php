<section class="sec sec--panel">
    <div class="wrap grid2 approach">
        <div class="approach__aside">
            <p class="eyebrow">Strategia i&nbsp;przygotowanie</p>
            <h2 class="h2 mb-20">Jak prowadzę <em class="nowrap">Twoją sprawę</em></h2>
            <p class="lead lead--narrow mb-36">Doświadczenie z&nbsp;sali sądowej przekładam na konkretne decyzje w&nbsp;Twojej sprawie.</p>
            <div class="ph ph--43">
                <img src="{{ asset('images/strategia.jpg') }}" alt="Adwokat Piotr Pietrołaj podczas rozmowy telefonicznej" style="object-position: 50% 30%" loading="lazy">
            </div>
        </div>
        <div class="acc">
            @foreach ($c['method'] as [$title, $desc])
                <div @class(['acc__item', 'is-open' => $loop->first])>
                    <button class="acc__btn" type="button" aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                        <span class="acc__title">{{ $title }}</span>
                        <span class="acc__icon" aria-hidden="true">+</span>
                    </button>
                    <div class="acc__panel"><div><p>{{ $desc }}</p></div></div>
                </div>
            @endforeach
        </div>
    </div>
</section>

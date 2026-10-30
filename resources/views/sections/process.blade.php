<section id="wspolpraca" class="sec">
    <div class="wrap">
        <p class="eyebrow">Przebieg współpracy</p>
        <h2 class="h2 mb-64">Co Cię czeka <em class="nowrap">krok po kroku</em></h2>
        <ol class="steps">
            @foreach ($c['process'] as [$title, $desc])
                <li class="step">
                    <span class="step__dot">{{ $loop->iteration }}</span>
                    <h3>{{ $title }}</h3>
                    <p>{{ $desc }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>

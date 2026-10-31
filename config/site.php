<?php

return [

    /*
    | Dane kontaktowe i integracje. Wartości z .env nadpisują domyślne.
    */

    'mail_to' => env('SITE_MAIL_TO', 'p.pietrolaj@kancelaria-pietrolaj.pl'),
    'gtm_id' => env('GTM_ID', ''),
    'trustindex_id' => env('TRUSTINDEX_ID', 'f93b2868438779330e160a4b485'),
    'google_places' => [
        'key' => env('GOOGLE_PLACES_KEY'),
        'place_id' => env('GOOGLE_PLACE_ID'),
    ],
    'google_reviews' => env('GOOGLE_REVIEWS_URL', 'https://www.google.com/maps/search/?api=1&query=Kancelaria%20Adwokacka%20Piotr%20Pietro%C5%82aj%20Krak%C3%B3w'),

    'phone' => '+48608358731',
    'phone_label' => '+48 608 358 731',
    'email' => 'p.pietrolaj@kancelaria-pietrolaj.pl',
    'address' => 'ul. Moniuszki 48/2, 31-523 Kraków',
    'nip' => '551-247-25-49',
    'regon' => '367706537',

    /*
    | Treści powtarzalnych sekcji strony głównej.
    */

    'home' => [

        'promises' => [
            ['Rozumiesz swoją sytuację', 'Wyjaśniam Twoją sprawę prostym językiem: jakie masz możliwości, co może się wydarzyć i co z tego wynika. Pytaj, ile potrzebujesz. Gdy wszystko rozumiesz, łatwiej o spokój.'],
            ["Wiesz, co się dzieje w\u{00A0}sprawie", 'Na bieżąco informuję Cię o każdym piśmie, terminie i decyzji sądu, a także o tym, co może się wydarzyć w przyszłości.'],
            ["Zawsze jesteśmy w\u{00A0}kontakcie", 'Masz do mnie bezpośredni numer telefonu. Rozmawiasz ze mną, nie z sekretariatem. Możesz do mnie zadzwonić nawet poza godzinami pracy Kancelarii. Jeśli nie będę mógł odebrać, oddzwonię.'],
        ],

        'method' => [
            ['Uczciwa ocena szans', 'Mówię wprost, jakie masz szanse i jakie są ryzyka - także wtedy, gdy sprawa jest trudna. Nie obiecuję wyników, których nie da się zagwarantować. Dzięki temu decyzję podejmujesz na podstawie rzetelnej oceny, a nie obietnic.'],
            ['Opłacalność sprawy', 'Oceniam, czy proces się opłaca: ile może kosztować i trwać w porównaniu z tym, co możesz zyskać.'],
            ['Strategia dopasowana do sprawy', 'Nie stosuję gotowych schematów. Doradzam, kiedy warto zawrzeć ugodę, a kiedy iść do sądu, i pokazuję, co wynika z każdego z tych rozwiązań. Ostateczną decyzję podejmujemy razem.'],
            ['Rzetelne przygotowanie', 'Dokładnie analizuję dokumenty i dowody, przewiduję argumenty drugiej strony i przygotowuję się na różne scenariusze. Na rozprawę idę z planem.'],
            ['Sprawy trudne i nietypowe', 'Nie unikam spraw zawiłych i niestandardowych. Wymagają więcej pracy i dokładności - i właśnie w nich doświadczenie procesowe ma największe znaczenie.'],
        ],

        'services' => [
            ['Majątek po rozstaniu', 'Podział majątku wspólnego oraz rozliczenia majątkowe byłych małżonków i partnerów.'],
            ['Spadki i zachowek', 'Dziedziczenie i dział spadku, dochodzenie zachowku oraz obrona przed takimi roszczeniami.'],
            ['Nieruchomości', 'Zniesienie współwłasności i rozliczenia współwłaścicieli, regulowanie stanu prawnego, zasiedzenie i służebności.'],
            ['Budowy, deweloperzy i wady', 'Spory z deweloperami, inwestycje budowlane, wady robót i odpowiedzialność wykonawców, rękojmia za wady.'],
            ['Przedsiębiorcy', 'Obsługa prawna firm i spory gospodarcze, w tym windykacja należności.'],
            ['Odszkodowania', 'Sprawy o odszkodowanie i zadośćuczynienie.'],
        ],

        'cases' => [
            ['Zachowek obniżony ugodą', 'Klient odziedziczył nieruchomość po dalekim krewnym i został pozwany o zapłatę kilkuset tysięcy złotych zachowku. Sprawa zakończyła się ugodą - Klient zapłacił tylko część żądanej kwoty.'],
            ['Powrót na wolność', 'Klient po latach pracy za granicą trafił do zakładu karnego za niewykonane obowiązki z dawnego wyroku. Udało się doprowadzić do jego zwolnienia.'],
            ['Zwrot inwestycji od gminy', 'Klient zainwestował kilka milionów złotych w nieruchomość należącą do gminy, a gmina nie chciała mu tego zwrócić. Przeprowadziłem Klienta przez kilkanaście postępowań sądowych i egzekucyjnych w tej sprawie.'],
            ['Firma poza podziałem', 'Klient prowadził firmę, której rozliczenia w podziale majątku wspólnego domagała się druga strona. Te bezzasadne roszczenia zostały w całości oddalone.'],
            ['Odzyskana nieruchomość', 'Klientem była gmina, której nieruchomość posiadała osoba bez umowy. Po latach procesu nieruchomość wróciła do gminy.'],
        ],

        // Opinie zapasowe (gdy brak klucza Google lub błąd API) - pisownia oryginalna.
        'testimonials' => [
            'Skorzystałam z porady prawnej pana Piotra.Jestem pod wielkim wrażeniem wysokiej kultury osobistej..ogromnej wiedzy oraz jasnych odpowiedzi na stawiane pytania .Otrzymana porada była merytoryczną i wnikliwa .Polecam wszystkim .którzy poszukują porady .która nie jest ograniczona czasowo a prawnik jest osobą o dużej empatii',
            'Dzięki wspólnemu przegadaniu tematu z prawnikiem udało nam się wygrać sprawę, mega plus za pokazanie różnych słabych stron tej sprawy, które pozwoliły lepiej przygotować się do sytuacji. Mega doceniam możliwość kontaktu poza spotkaniem i porady prawne.',
            'Pan Piotr to odpowiednia osoba na odpowiednim miejscu. Moją sprawą zajął sie błyskawicznie, cały czas pozostawał w kontakcie oraz informował na bieżąco o jej przebiegu. Szczerze polecam',
        ],
        'rating' => '5,0',
        'reviews_count' => 40,

        'process' => [
            ['Pierwszy kontakt', 'Dzwonisz lub piszesz i krótko opowiadasz, z czym przychodzisz. Umawiamy spotkanie w Kancelarii lub zdalnie. Dokumenty możesz przesłać mailem.'],
            ['Spotkanie i analiza', 'Przeglądam dokumenty i wyjaśniam Twoją sytuację prostym językiem: jakie masz możliwości, szanse i ryzyka.'],
            ['Plan i warunki', 'Ustalamy, jak działamy dalej. Omawiamy zasady wynagrodzenia zanim rozpocznę pracę.'],
            ['Prowadzenie sprawy', 'Przygotowuję pisma i reprezentuję Cię przed sądem. O każdym etapie dowiadujesz się na bieżąco.'],
            ['Zakończenie', 'Omawiam z Tobą wyrok lub ugodę: co z nich wynika i czy warto działać dalej.'],
        ],

        'pricing' => [
            ['Wynagrodzenie za sprawę', 'Z góry ustalona kwota za prowadzenie sprawy, np. w danej instancji.'],
            ['Ryczałt miesięczny', 'Stała miesięczna opłata za bieżącą obsługę prawną firmy w ustalonym zakresie.'],
            ['Premia za wynik', 'Dodatkowe wynagrodzenie zależne od rezultatu sprawy, ustalane obok wynagrodzenia podstawowego.'],
        ],

        // Używane też do walidacji formularza - w widoku brane bez zmian (config('site.home.topics')).
        'topics' => [
            'Majątek po rozstaniu', 'Spadki i zachowek', 'Nieruchomości', 'Budowy, deweloperzy i wady', 'Przedsiębiorcy',
            'Odszkodowania', 'Sprawy rodzinne', 'Sprawy karne', 'Sprawy administracyjne', 'Inna sprawa',
        ],
    ],

];

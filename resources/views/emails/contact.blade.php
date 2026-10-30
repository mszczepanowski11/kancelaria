Nowa wiadomość ze strony internetowej

Imię i nazwisko: {{ $data['imie'] }} {{ $data['nazwisko'] }}
E-mail: {{ $data['email'] }}
Telefon: {{ $data['telefon'] ?: '-' }}
Temat: {{ $data['temat'] }}

Treść:
{{ $data['tresc'] }}

---
Zgoda na przetwarzanie danych: tak
Wysłano: {{ now()->format('Y-m-d H:i') }}

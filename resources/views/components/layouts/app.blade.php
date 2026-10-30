@props([
    'title' => 'Adwokat Piotr Pietrołaj - Kancelaria Adwokacka Kraków',
    'description' => 'Kancelaria Adwokacka Piotr Pietrołaj w Krakowie. Spory sądowe, spadki i zachowek, podział majątku, nieruchomości, sprawy przedsiębiorców. Reprezentacja przed sądami w całej Polsce.',
])
<!DOCTYPE html>
<html lang="pl" data-gtm="{{ config('site.gtm_id') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/hero.jpg') }}">
    <meta name="theme-color" content="#0A0A09">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="page">
    @include('partials.nav')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')
    @include('partials.cookie-banner')
</div>
</body>
</html>

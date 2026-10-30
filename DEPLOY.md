# Wdrożenie strony Kancelarii

## Co jest w tej paczce
Pliki wklejasz do repozytorium w te same ścieżki (nadpisują puste pliki ze struktury):

- `routes/web.php` - `/`, `/polityka-prywatnosci`, `/cookies`, `POST /kontakt`
- `app/Http/Controllers/PageController.php`, `ContactController.php`
- `app/Mail/ContactFormSubmitted.php` + `resources/views/emails/contact.blade.php`
- `config/site.php` - dane kontaktowe i wszystkie powtarzalne treści strony
- `resources/views/components/layouts/app.blade.php` - layout (`<x-layouts.app>`)
- `resources/views/partials/*`, `resources/views/sections/*`, `resources/views/home.blade.php`
- `resources/views/legal/privacy-policy.blade.php`, `legal/cookies.blade.php`
- `resources/css/app.css`, `resources/js/*.js`, `vite.config.js` (fonty Jost + Sansation przez Bunny)
- `public/images/*` - zdjęcia i logo
- `tests/Feature/ContactFormTest.php`

Do usunięcia z repo: `resources/views/legal/privacy-policy.php` (pusty, zastępuje go wersja `.blade.php`)
oraz `resources/views/welcome.blade.php` (nieużywany).

## .env
```
APP_NAME="Kancelaria Pietrołaj"
APP_URL=https://kancelaria-pietrolaj.pl
APP_LOCALE=pl

MAIL_MAILER=smtp
MAIL_HOST=            # serwer SMTP z panelu cyber_Folks
MAIL_PORT=465
MAIL_SCHEME=smtps
MAIL_USERNAME=formularz@kancelaria-pietrolaj.pl
MAIL_PASSWORD=
MAIL_FROM_ADDRESS=formularz@kancelaria-pietrolaj.pl
MAIL_FROM_NAME="Strona Kancelarii"

SITE_MAIL_TO=p.pietrolaj@kancelaria-pietrolaj.pl
GTM_ID=               # GTM-XXXXXXX, puste = brak statystyk
GOOGLE_REVIEWS_URL=   # link do wizytówki Google
```

## Lokalnie
```
composer install
npm install
npm run build      # lub: composer dev
php artisan test
```

## cyber_Folks
1. Ustaw PHP 8.3+ w direct_Admin.
2. Katalog domeny musi wskazywać na `public/` (np. `public_html` jako symlink do `public`).
3. Wgraj projekt bez `node_modules`; `public/build` zbuduj lokalnie (`npm run build`) i wgraj.
4. `composer install --no-dev --optimize-autoloader`, `php artisan key:generate`, `php artisan config:cache`, `php artisan route:cache`, `php artisan view:cache`.
5. Utwórz skrzynkę `formularz@...` i wyślij testową wiadomość z formularza.

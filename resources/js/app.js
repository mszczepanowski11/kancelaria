import { initAccordion } from './accordion';
import { initCookieConsent } from './cookie-consent';
import { initMobileMenu } from './mobile-menu';

initMobileMenu();
initAccordion();
initCookieConsent();
initContactForm();

// Formularz kontaktowy bez przeładowania strony. Bez JS działa zwykłe wysłanie (redirect).
function initContactForm() {
    const form = document.getElementById('formularz');
    if (!form) return;

    const msg = form.querySelector('.form__msg');
    const btn = form.querySelector('[type=submit]');
    const ERR = 'Nie udało się wysłać wiadomości. Proszę zadzwonić: 608 358 731.';

    const show = (ok, text) => {
        msg.textContent = text;
        msg.className = `form__msg ${ok ? 'is-ok' : 'is-err'}`;
        msg.hidden = false;
    };

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        btn.disabled = true;
        msg.hidden = true;

        try {
            const res = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: { Accept: 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
            });

            if (res.status === 429) {
                show(false, 'Wysłano już kilka wiadomości. Proszę spróbować później lub zadzwonić: 608 358 731.');
            } else if (res.status === 419) {
                show(false, 'Sesja wygasła. Proszę odświeżyć stronę i spróbować ponownie.');
            } else {
                const data = await res.json().catch(() => null);
                if (data?.message) show(data.ok, data.message);
                else show(false, ERR);
                if (data?.ok) form.reset();
            }
        } catch {
            show(false, ERR);
        } finally {
            btn.disabled = false;
        }
    });
}

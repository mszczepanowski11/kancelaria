// Zgoda na cookies. Google Tag Manager i mapa Google ładują się dopiero po akceptacji.

const KEY = 'pp_cookies';

const getConsent = () => {
    try {
        return localStorage.getItem(KEY);
    } catch {
        return null;
    }
};

const setConsent = (value) => {
    try {
        localStorage.setItem(KEY, value);
    } catch {
        // tryb prywatny - zgoda tylko na tę wizytę
    }
};

function loadGTM() {
    const id = document.documentElement.dataset.gtm;
    if (!id || window.__ppGtm) return;
    window.__ppGtm = true;
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ 'gtm.start': Date.now(), event: 'gtm.js' });
    const s = document.createElement('script');
    s.async = true;
    s.src = `https://www.googletagmanager.com/gtm.js?id=${encodeURIComponent(id)}`;
    document.head.appendChild(s);
}

function loadMap() {
    document.querySelectorAll('iframe[data-src]').forEach((frame) => {
        frame.src = frame.dataset.src;
        frame.removeAttribute('data-src');
        frame.parentElement.querySelector('.map__consent')?.remove();
    });
}

function apply(value) {
    if (value === 'all') {
        loadGTM();
        loadMap();
    }
}

export function initCookieConsent() {
    const banner = document.getElementById('cookies');
    const saved = getConsent();

    if (saved) apply(saved);
    else if (banner) banner.hidden = false;

    document.querySelectorAll('[data-consent]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const value = btn.dataset.consent;
            setConsent(value);
            if (banner) banner.hidden = true;
            apply(value);
        });
    });

    document.querySelectorAll('.map__load').forEach((btn) => btn.addEventListener('click', loadMap));

    document.querySelectorAll('[data-cookie-settings]').forEach((link) => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            if (banner) banner.hidden = false;
        });
    });
}

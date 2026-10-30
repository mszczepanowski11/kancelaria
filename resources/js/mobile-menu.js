// Nagłówek chowany przy przewijaniu w dół + menu mobilne.

export function initMobileMenu() {
    const header = document.querySelector('.site-header');
    const burger = document.querySelector('.burger');
    const menu = document.getElementById('mmenu');
    const body = document.body;
    if (!header) return;

    let lastY = window.scrollY;
    const onScroll = () => {
        const y = window.scrollY;
        const d = y - lastY;
        header.classList.toggle('is-scrolled', y > 40);
        if (body.classList.contains('menu-open')) return;
        if (y < 120) {
            header.classList.remove('is-hidden');
            lastY = y;
            return;
        }
        if (d > 6) {
            header.classList.add('is-hidden');
            lastY = y;
        } else if (d < -6) {
            header.classList.remove('is-hidden');
            lastY = y;
        }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    if (!burger || !menu) return;

    const setMenu = (open) => {
        body.classList.toggle('menu-open', open);
        burger.setAttribute('aria-expanded', String(open));
        menu.setAttribute('aria-hidden', String(!open));
        if (open) header.classList.remove('is-hidden');
    };

    burger.addEventListener('click', () => setMenu(!body.classList.contains('menu-open')));
    menu.querySelectorAll('a').forEach((a) => a.addEventListener('click', () => setMenu(false)));
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) setMenu(false);
    });
}

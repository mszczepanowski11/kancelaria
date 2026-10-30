// Akordeon w sekcji "Jak prowadzę Twoją sprawę" - otwarty jeden punkt naraz.

export function initAccordion() {
    document.querySelectorAll('.acc').forEach((acc) => {
        acc.querySelectorAll('.acc__btn').forEach((btn) => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.acc__item');
                const willOpen = !item.classList.contains('is-open');
                acc.querySelectorAll('.acc__item').forEach((i) => {
                    i.classList.remove('is-open');
                    i.querySelector('.acc__btn').setAttribute('aria-expanded', 'false');
                });
                if (willOpen) {
                    item.classList.add('is-open');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });
    });
}

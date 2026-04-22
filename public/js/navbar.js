/* ═══════════════════════════════════════════
           NAVBAR
        ═══════════════════════════════════════════ */
(function () {
    const nav = document.getElementById('navbar');
    const burger = document.getElementById('burger');
    const drawer = document.getElementById('drawer');
    const bg = document.getElementById('drawerBg');
    const close = document.getElementById('drawerClose');
    const sections = document.querySelectorAll('section[id]');
    const links = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 80);
        let cur = '';
        sections.forEach(s => {
            if (window.scrollY >= s.offsetTop - 130) cur = s.id
        });
        links.forEach(l => l.classList.toggle('active', l.getAttribute('href').slice(1) === cur));
    }, {
        passive: true
    });

    function open() {
        drawer.classList.add('open');
        drawer.setAttribute('aria-hidden', 'false');
        burger.classList.add('open');
        burger.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden'
    }

    function closeD() {
        drawer.classList.remove('open');
        drawer.setAttribute('aria-hidden', 'true');
        burger.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = ''
    }
    burger.addEventListener('click', open);
    close.addEventListener('click', closeD);
    bg.addEventListener('click', closeD);
    drawer.querySelectorAll('.nav-link').forEach(l => l.addEventListener('click', closeD));
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeD()
    });
})();

/* ═══════════════════════════════════════════
           LIGHTBOX
        ═══════════════════════════════════════════ */
(function () {
    const items = document.querySelectorAll('.port-item');
    const lb = document.getElementById('lb');
    const content = document.getElementById('lbContent');
    const closeBtn = document.getElementById('lbClose');
    const prevBtn = document.getElementById('lbPrev');
    const nextBtn = document.getElementById('lbNext');
    if (!lb) return;
    const data = Array.from(items).map(el => ({
        cap: el.dataset.cap || '',
        img: el.querySelector('img') || null
    }));
    let cur = 0;

    function render() {
        const d = data[cur];
        content.innerHTML = '';
        if (d.img) {
            const i = document.createElement('img');
            i.src = d.img.src;
            i.alt = d.img.alt;
            i.className = 'lb-img';
            content.appendChild(i)
        } else {
            const ph = document.createElement('div');
            ph.className = 'lb-ph';
            ph.textContent = 'Foto · ' + d.cap;
            content.appendChild(ph)
        }
        const cap = document.createElement('span');
        cap.className = 't-caption';
        cap.textContent = d.cap;
        content.appendChild(cap);
    }

    function open(i) {
        cur = i;
        render();
        lb.classList.add('open');
        lb.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        closeBtn.focus()
    }

    function close() {
        lb.classList.remove('open');
        lb.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        items[cur].focus()
    }

    function prev() {
        cur = (cur - 1 + data.length) % data.length;
        render()
    }

    function next() {
        cur = (cur + 1) % data.length;
        render()
    }

    items.forEach((el, i) => {
        el.addEventListener('click', () => open(i));
        el.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                open(i)
            }
        });
    });
    closeBtn.addEventListener('click', close);
    prevBtn.addEventListener('click', prev);
    nextBtn.addEventListener('click', next);
    lb.addEventListener('click', e => {
        if (e.target === lb) close()
    });
    document.addEventListener('keydown', e => {
        if (!lb.classList.contains('open')) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') prev();
        if (e.key === 'ArrowRight') next();
    });
})();
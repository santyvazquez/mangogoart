/* ═══════════════════════════════════════════
  CURSOR
═══════════════════════════════════════════ */
(function () {
    if (!window.matchMedia('(hover:hover)').matches) return;
    const c = document.getElementById('cur'),
        r = document.getElementById('curRing');
    if (!c || !r) return;
    let mx = 0,
        my = 0,
        rx = 0,
        ry = 0;
    document.addEventListener('mousemove', e => {
        mx = e.clientX;
        my = e.clientY;
        c.style.left = mx + 'px';
        c.style.top = my + 'px'
    });
    (function tick() {
        rx += (mx - rx) * .11;
        ry += (my - ry) * .11;
        r.style.left = rx + 'px';
        r.style.top = ry + 'px';
        requestAnimationFrame(tick)
    })();
    document.querySelectorAll('a,button,.port-item,.scard,input,select,textarea').forEach(el => {
        el.addEventListener('mouseenter', () => {
            c.classList.add('big');
            r.classList.add('big')
        });
        el.addEventListener('mouseleave', () => {
            c.classList.remove('big');
            r.classList.remove('big')
        });
    });
    document.addEventListener('mouseleave', () => {
        c.style.opacity = '0';
        r.style.opacity = '0'
    });
    document.addEventListener('mouseenter', () => {
        c.style.opacity = '1';
        r.style.opacity = '1'
    });
})();
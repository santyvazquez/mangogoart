/* ═══════════════════════════════════════════
          FORM
       ═══════════════════════════════════════════ */
(function () {
    const form = document.getElementById('contactForm');
    const btn = document.getElementById('submitBtn');
    const btnTxt = document.getElementById('btnText');
    if (!form) return;

    function val(name, value) {
        if (name === 'nombre') return value.trim().length < 2 ? 'Mínimo 2 caracteres' : '';
        if (name === 'email') return !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value) ? 'Correo inválido' : '';
        if (name === 'sesion') return !value ? 'Selecciona una opción' : '';
        if (name === 'mensaje') return value.trim().length < 10 ? 'Mínimo 10 caracteres' : '';
        return '';
    }

    function showErr(field, msg) {
        const e = document.getElementById('err-' + field.name);
        if (e) e.textContent = msg;
        field.style.borderColor = msg ? '#e06666' : '';
    }
    form.querySelectorAll('input,select,textarea').forEach(f => {
        f.addEventListener('blur', () => showErr(f, val(f.name, f.value)));
        f.addEventListener('input', () => {
            if (f.style.borderColor) showErr(f, val(f.name, f.value))
        });
    });

    form.addEventListener('submit', async e => {
        e.preventDefault();
        let ok = true;
        form.querySelectorAll('input,select,textarea').forEach(f => {
            const err = val(f.name, f.value);
            showErr(f, err);
            if (err) ok = false
        });
        if (!ok) return;
        btn.disabled = true;
        btnTxt.textContent = 'Enviando...';
        await new Promise(r => setTimeout(r, 1600));
        // Conectar aquí con Formspree: fetch('https://formspree.io/f/ID', {method:'POST',body:new FormData(form)})
        form.reset();
        btn.disabled = false;
        btnTxt.textContent = 'Enviar mensaje';
        const msg = document.createElement('div');
        msg.className = 'f-success';
        msg.textContent = '¡Mensaje enviado! Te contactamos pronto.';
        form.appendChild(msg);
        setTimeout(() => msg.remove(), 5000);
    });
})();

/* Smooth scroll */
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function (e) {
        const t = document.querySelector(this.getAttribute('href'));
        if (!t) return;
        e.preventDefault();
        t.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});
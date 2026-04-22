<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="mango.goart — Fotografía deportiva y retrato en Guanajuato, México. Agenda tu sesión en línea." />
    <title>mango.goart — Fotografía deportiva</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/tipografia.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/cursor.css">
    <link rel="stylesheet" href="css/overlay.css">
    <link rel="stylesheet" href="css/animaciones.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/sesiones.css">
    <link rel="stylesheet" href="css/proceso.css">
    <link rel="stylesheet" href="css/cta.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;600;700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&family=JetBrains+Mono:wght@300;400&display=swap" rel="stylesheet" />
</head>

<body>

    <!-- Cursores -->
    <div class="cur" id="cur" aria-hidden="true"></div>
    <div class="cur-ring" id="curRing" aria-hidden="true"></div>

    <!-- ═══════ NAVBAR ═══════ -->
    <nav class="navbar" id="navbar">
        <div class="nav-inner">
            <a href="#" class="nav-logo">MANGO.GOART</a>
            <ul class="nav-links">
                <li><a href="#portafolio" class="nav-link">Portafolio</a></li>
                <li><a href="#sesiones" class="nav-link">Sesiones</a></li>
                <li><a href="#proceso" class="nav-link">Proceso</a></li>
                <li><a href="#contacto" class="nav-link">Contacto</a></li>
            </ul>
            <a href="#contacto" class="btn btn--primary btn--sm nav-cta">Agendar</a>
            <button class="burger" id="burger" aria-label="Menú" aria-expanded="false">
                <span class="bline"></span><span class="bline"></span><span class="bline"></span>
            </button>
        </div>
    </nav>

    <!-- Drawer móvil -->
    <div class="drawer" id="drawer" aria-hidden="true">
        <div class="drawer-bg" id="drawerBg"></div>
        <div class="drawer-panel">
            <button class="drawer-close" id="drawerClose" aria-label="Cerrar">&times;</button>
            <ul class="drawer-links">
                <li><a href="#portafolio" class="nav-link">Portafolio</a></li>
                <li><a href="#sesiones" class="nav-link">Sesiones</a></li>
                <li><a href="#proceso" class="nav-link">Proceso</a></li>
                <li><a href="#contacto" class="nav-link">Contacto</a></li>
            </ul>
            <a href="#contacto" class="btn btn--primary">Agendar sesión</a>
        </div>
    </div>

    <!-- ═══════ HERO ═══════ -->
    <section class="hero" id="inicio">
        <div class="hero-bg">
            <!-- Reemplazar .hero-placeholder con <img class="hero-bg-img" src="hero.jpg" alt="..."> -->
            <img class="hero-bg-img" src="img/mongo-hero3.png" alt="...">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content container">
            <span class="t-label hero-tag">Fotografía deportiva · Guanajuato, MX</span>
            <h1 class="t-display hero-title">La velocidad<br><em>en foco</em></h1>
            <p class="hero-sub">Captamos el instante que otros no pueden ver.</p>
            <div class="hero-btns">
                <a href="#contacto" class="btn btn--primary">Agendar sesión</a>
                <a href="#portafolio" class="btn btn--secondary">Ver portafolio</a>
            </div>
        </div>
        <div class="scroll-hint">
            <span class="t-caption">Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- ═══════ ABOUT ═══════ -->
    <section class="about" id="nosotros">
        <div class="about-inner container">
            <div class="about-text reveal">
                <span class="t-label">Sobre mí</span>
                <h2 class="t-h1">Detrás del<br>lente</h2>
                <p class="t-body">No soy una agencia. Soy un fotógrafo que vive esto. Cada curva, cada instante de velocidad suspendida, cada luz de montaña — los veo diferente desde que tengo una cámara en la mano.</p>
                <p class="t-body">Me especializo en fotografía deportiva de motos y retrato editorial en Guanajuato y sus carreteras. Si tienes la moto, yo tengo el ojo.</p>
                <div class="about-stats">
                    <div>
                        <span class="stat-num">¿?</span>
                        <span class="t-caption">Sesiones realizadas</span>
                    </div>
                    <div>
                        <span class="stat-num">¿?</span>
                        <span class="t-caption">Años de experiencia</span>
                    </div>
                    <div>
                        <span class="stat-num">100%</span>
                        <span class="t-caption">Clientes satisfechos</span>
                    </div>
                </div>
            </div>
            <div class="reveal d1">
                <div class="about-frame">
                    <!-- Reemplazar con <img src="about.jpg" alt="Fotógrafo mango.goart"> -->
                    <img src="img/mongo-fotografo.jpeg" alt="Fotógrafo mango.goart">
                    <div class="about-tag"><span class="t-mono">EST. 2026</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════ PORTAFOLIO ═══════ -->
    <section class="portfolio" id="portafolio">
        <div class="port-header container reveal">
            <span class="t-label">Portafolio</span>
            <h2 class="t-h1">El trabajo<br>habla solo</h2>
        </div>
        <div class="port-grid" id="portGrid">
            <div class="port-item" tabindex="0" data-cap="Sesión deportiva · 2026">
                <div class="port-ph ph1"><img src="img/mongo-gallery1.jpg" alt=""></div>
                <div class="port-overlay"><span class="t-caption">Sesión deportiva · 2026</span></div>
            </div>
            <div class="port-item" tabindex="0" data-cap="Retrato editorial · 2026">
                <div class="port-ph ph2"><img src="img/mongo-gallery9.jpg" alt=""></div>
                <div class="port-overlay"><span class="t-caption">Retrato editorial · 2026</span></div>
            </div>
            <div class="port-item" tabindex="0" data-cap="Carretera de montaña · 2026">
                <div class="port-ph ph3"><img src="img/mongo-gallery6.jpg" alt=""></div>
                <div class="port-overlay"><span class="t-caption">Carretera de montaña · 2026</span></div>
            </div>
            <div class="port-item" tabindex="0" data-cap="Velocidad · 2026">
                <div class="port-ph ph4"><img src="img/mongo-gallery4.jpg" alt=""></div>
                <div class="port-overlay"><span class="t-caption">Velocidad · 2026</span></div>
            </div>
            <div class="port-item" tabindex="0" data-cap="Detalle técnico · 2026">
                <div class="port-ph ph5"><img src="img/mongo-gallery5.jpg" alt=""></div>
                <div class="port-overlay"><span class="t-caption">Detalle técnico · 2026</span></div>
            </div>
            <div class="port-item" tabindex="0" data-cap="Niebla de montaña · 2026">
                <div class="port-ph ph6"><img src="img/mongo-gallery3.jpg" alt=""></div>
                <div class="port-overlay"><span class="t-caption">Niebla de montaña · 2026</span></div>
            </div>
            <div class="port-item" tabindex="0" data-cap="Sesión grupal · 2026">
                <div class="port-ph ph7"><img src="img/mongo-gallery8.jpg" alt=""></div>
                <div class="port-overlay"><span class="t-caption">Sesión grupal · 2026</span></div>
            </div>
        </div>
        <div class="port-cta container">
            <a href="#contacto" class="btn btn--secondary reveal">Solicitar portafolio completo</a>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lb" id="lb" aria-hidden="true" role="dialog">
        <div class="lb-content" id="lbContent"></div>
        <button class="lb-btn lb-close" id="lbClose" aria-label="Cerrar">&#10005;</button>
        <button class="lb-btn lb-prev" id="lbPrev" aria-label="Anterior">&#8592;</button>
        <button class="lb-btn lb-next" id="lbNext" aria-label="Siguiente">&#8594;</button>
    </div>

    <!-- ═══════ SESIONES ═══════ -->
    <section class="sessions" id="sesiones">
        <div class="container">
            <div class="reveal">
                <span class="t-label">Qué ofrecemos</span>
                <h2 class="t-h1">Elige tu<br>sesión</h2>
            </div>
            <div class="sess-grid">

                <article class="scard featured reveal">
                    <div class="scard-num">01</div>
                    <div class="scard-img">
                        <div class="scard-img-ph sph1"><img src="img/mongo-deportiva.jpg" alt=""></div>
                    </div>
                    <div class="scard-body">
                        <h3 class="scard-title">Deportiva en carretera</h3>
                        <p class="t-body">Curvas, velocidad, adrenalina. Tu moto y tú en su elemento natural. Locaciones de carretera seleccionadas.</p>
                        <ul class="scard-list">
                            <li>¿? horas de sesión</li>
                            <li>¿? fotos editadas</li>
                            <li>Galería privada en línea</li>
                            <li>Descarga en alta resolución</li>
                        </ul>
                        <div class="scard-foot"><a href="#contacto" class="btn btn--primary">Quiero esta sesión</a></div>
                    </div>
                </article>

                <article class="scard reveal d1">
                    <div class="scard-num">02</div>
                    <div class="scard-img">
                        <div class="scard-img-ph sph2"><img src="img/mongo-gallery2.jpg" alt=""></div>
                    </div>
                    <div class="scard-body">
                        <h3 class="scard-title">Retrato editorial</h3>
                        <p class="t-body">Tu imagen, tu historia. Retratos con carácter en locaciones urbanas o en estudio. Para quien quiere algo diferente.</p>
                        <ul class="scard-list">
                            <li>¿? horas de sesión</li>
                            <li>¿? fotos editadas</li>
                            <li>Galería privada en línea</li>
                            <li>Descarga en alta resolución</li>
                        </ul>
                        <div class="scard-foot"><a href="#contacto" class="btn btn--secondary">Quiero esta sesión</a></div>
                    </div>
                </article>

                <article class="scard reveal d2">
                    <div class="scard-num">03</div>
                    <div class="scard-img">
                        <div class="scard-img-ph sph3"><img src="img/mongo-gallery8.jpg" alt=""></div>
                    </div>
                    <div class="scard-body">
                        <h3 class="scard-title">Sesión grupal</h3>
                        <p class="t-body">Un grupo de motos, una carretera, una tarde. Cobertura de eventos, salidas y encuentros de motociclistas.</p>
                        <ul class="scard-list">
                            <li>Hasta ¿? horas de cobertura</li>
                            <li>¿? fotos editadas</li>
                            <li>Galería compartida privada</li>
                            <li>Descarga individual por piloto</li>
                        </ul>
                        <div class="scard-foot"><a href="#contacto" class="btn btn--secondary">Quiero esta sesión</a></div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ═══════ PROCESO ═══════ -->
    <section class="process" id="proceso">
        <div class="container">
            <div class="reveal">
                <span class="t-label">Así funciona</span>
                <h2 class="t-h1">El proceso,<br>sin complicaciones</h2>
            </div>
            <div class="proc-steps">

                <div class="proc-step reveal">
                    <span class="proc-num">01</span>
                    <div class="proc-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 4c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm0 14c-2.67 0-5.03-1.33-6.47-3.36C6.1 15.19 9.16 14 12 14s5.9 1.19 6.47 2.64C16.03 18.67 14.67 20 12 20z" fill="currentColor" />
                        </svg>
                    </div>
                    <h3 class="proc-title">Regístrate</h3>
                    <p class="t-body" style="font-size:14px">Crea tu cuenta y selecciona el tipo de sesión que te interesa.</p>
                </div>

                <div class="proc-conn"></div>

                <div class="proc-step reveal d1">
                    <span class="proc-num">02</span>
                    <div class="proc-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2zm0 16H5V9h14v11zM7 11h5v5H7z" fill="currentColor" />
                        </svg>
                    </div>
                    <h3 class="proc-title">Coordinamos</h3>
                    <p class="t-body" style="font-size:14px">Elegimos juntos la fecha, horario y locación ideal para tu sesión.</p>
                </div>

                <div class="proc-conn"></div>

                <div class="proc-step reveal d2">
                    <span class="proc-num">03</span>
                    <div class="proc-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15a5 5 0 110-10 5 5 0 010 10zm0-8a3 3 0 100 6 3 3 0 000-6z" fill="currentColor" />
                        </svg>
                    </div>
                    <h3 class="proc-title">La sesión</h3>
                    <p class="t-body" style="font-size:14px">Nos encontramos, rodamos y captamos los mejores momentos.</p>
                </div>

                <div class="proc-conn"></div>

                <div class="proc-step reveal d3">
                    <span class="proc-num">04</span>
                    <div class="proc-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M20 6h-2.18c.07-.44.18-.87.18-1.33C18 2.54 15.96.5 13.5.5c-1.32 0-2.5.56-3.36 1.46L9 3.17l-1.14-1.2A4.49 4.49 0 004.5.5C2.04.5 0 2.54 0 4.67c0 .46.11.89.18 1.33H0v2h20V6zM3 10v8h18v-8H3zm8 6H5v-4h6v4zm8 0h-6v-4h6v4z" fill="currentColor" />
                        </svg>
                    </div>
                    <h3 class="proc-title">Tu galería</h3>
                    <p class="t-body" style="font-size:14px">Recibes acceso a tu galería privada con fotos en alta resolución.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══════ CTA FINAL ═══════ -->
    <section class="cta-final">
        <div class="cta-bg">
            <div class="cta-bg-ph"></div>
            <div class="cta-overlay"></div>
        </div>
        <div class="cta-content container reveal">
            <span class="t-label" style="justify-content:center">¿Listo para empezar?</span>
            <h2 class="t-h1">Tu sesión<br>te espera.</h2>
            <p class="t-body">Regístrate, elige tu sesión y agenda en minutos.<br>Sin WhatsApp, sin esperas, sin complicaciones.</p>
            <a href="#contacto" class="btn btn--primary btn--lg">Agendar ahora</a>
        </div>
    </section>

    <!-- ═══════ CONTACTO ═══════ -->
    <section class="contact" id="contacto">
        <div class="contact-inner container">

            <div class="contact-info reveal">
                <span class="t-label">Hablemos</span>
                <h2 class="t-h1">Contáctanos</h2>
                <p class="t-body">Para preguntas rápidas o cotizaciones especiales. Respondemos en menos de 24 horas.</p>
                <ul class="contact-items">
                    <li class="c-item">
                        <span class="c-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z" fill="currentColor" />
                            </svg></span>
                        <span>Guanajuato, México</span>
                    </li>
                    <li class="c-item">
                        <span class="c-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" fill="currentColor" />
                            </svg></span>
                        <a href="https://instagram.com/mango.goart" target="_blank" rel="noopener">@mango.goart</a>
                    </li>
                    <li class="c-item">
                        <span class="c-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884" fill="currentColor" />
                            </svg></span>
                        <a href="https://wa.me/521XXXXXXXXXX" target="_blank" rel="noopener">WhatsApp</a>
                    </li>
                </ul>
                <div class="c-social">
                    <a href="https://instagram.com/mango.goart" target="_blank" rel="noopener" class="c-soc-a" aria-label="Instagram">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="https://tiktok.com/@mango.goart" target="_blank" rel="noopener" class="c-soc-a" aria-label="TikTok">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.27 8.27 0 004.84 1.55V6.79a4.85 4.85 0 01-1.07-.1z" fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="reveal d1">
                <form class="form" id="contactForm" novalidate>
                    <div class="f-group">
                        <label class="f-label" for="nombre">Nombre completo</label>
                        <input class="f-input" type="text" id="nombre" name="nombre" placeholder="Tu nombre" autocomplete="name" required />
                        <span class="f-err" id="err-nombre"></span>
                    </div>
                    <div class="f-group">
                        <label class="f-label" for="email">Correo electrónico</label>
                        <input class="f-input" type="email" id="email" name="email" placeholder="tu@correo.com" autocomplete="email" required />
                        <span class="f-err" id="err-email"></span>
                    </div>
                    <div class="f-group">
                        <label class="f-label" for="sesion">Tipo de sesión</label>
                        <select class="f-select" id="sesion" name="sesion" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="deportiva">Deportiva en carretera</option>
                            <option value="retrato">Retrato editorial</option>
                            <option value="grupal">Sesión grupal / evento</option>
                            <option value="otra">Otra</option>
                        </select>
                        <span class="f-err" id="err-sesion"></span>
                    </div>
                    <div class="f-group">
                        <label class="f-label" for="mensaje">Mensaje</label>
                        <textarea class="f-textarea" id="mensaje" name="mensaje" rows="4" placeholder="Cuéntame sobre tu sesión ideal, fecha tentativa, locación..." required></textarea>
                        <span class="f-err" id="err-mensaje"></span>
                    </div>
                    <button type="submit" class="btn btn--primary btn--full" id="submitBtn">
                        <span id="btnText">Enviar mensaje</span>
                    </button>
                    <p class="f-note">También puedes <a href="/registro">registrarte y agendar directamente</a> en el sitio.</p>
                </form>
            </div>

        </div>
    </section>

    <!-- ═══════ FOOTER ═══════ -->
    <footer class="footer">
        <div class="foot-top container">
            <div class="foot-brand">
                <span class="foot-logo">MANGO.GOART</span>
                <p class="t-caption">Fotografía deportiva y retrato en Guanajuato, México.</p>
                <div class="foot-soc">
                    <a href="https://instagram.com/mango.goart" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="https://wa.me/521XXXXXXXXXX" target="_blank" rel="noopener" aria-label="WhatsApp">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884" fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>
            <nav class="foot-nav">
                <span class="t-label" style="font-size:10px">Navegación</span>
                <ul>
                    <li><a href="#portafolio">Portafolio</a></li>
                    <li><a href="#sesiones">Sesiones</a></li>
                    <li><a href="#proceso">Proceso</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
            <nav class="foot-nav">
                <span class="t-label" style="font-size:10px">Cuenta</span>
                <ul>
                    <li><a href="/registro">Registrarse</a></li>
                    <li><a href="/login">Iniciar sesión</a></li>
                    <li><a href="/mis-galerias">Mis galerías</a></li>
                </ul>
            </nav>
        </div>
        <div class="foot-bottom container">
            <span class="t-caption">© 2024 mango.goart — Todos los derechos reservados</span>
            <span class="t-caption">Guanajuato, México</span>
        </div>
    </footer>
    <script src="js/cursor.js"></script>
    <script src="js/form.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/scroll.js"></script>
</body>

</html>
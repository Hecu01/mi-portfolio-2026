@extends('layouts.portfolio')

@section('title', 'Valentín Urbine | Desarrollo Web y Sistemas')


@section('content')

<nav class="navbar navbar-expand-lg portfolio-navbar sticky-top">

    <div class="container">

        <a
            href="#inicio"
            class="navbar-brand d-flex align-items-center"
        >

            <div class="brand-logo">
                VU
            </div>

            <div class="brand-text ms-2">

                <strong>
                    Valentín Urbine
                </strong>

                <small>
                    Desarrollo Web & Sistemas
                </small>

            </div>

        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarPortfolio"
        >

            <i class="fa-solid fa-bars"></i>

        </button>


        <div class="collapse navbar-collapse" id="navbarPortfolio">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#inicio"
                    >
                        Inicio
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#sobre-mi"
                    >
                        Sobre mí
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#servicios"
                    >
                        Servicios
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#proyectos"
                    >
                        Proyectos
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#contacto"
                    >
                        Contacto
                    </a>

                </li>


                <!-- INDICADOR -->

                <span class="nav-indicator"></span>

            </ul>


            <a href="#contacto" class="btn btn-outline-light rounded-pill px-4" >
                <i class="fa-regular fa-envelope me-2"></i>
                Hablemos
            </a>

        </div>

    </div>

</nav>

<section id="inicio" class="hero">

    <div class="container">

        <div class="row align-items-center">

            <!-- TEXTO -->

            <div class="col-lg-6">

                <div class="hero-label">

                    <span></span>

                    SISTEMAS QUE SOLUCIONAN PROBLEMAS

                    <span></span>

                </div>


                <h1>

                    Desarrollo

                    <span>
                        sistemas web
                    </span>

                    y páginas web

                </h1>


                <p class="hero-description">

                    Soy Analista de Sistemas y desarrollador
                    PHP & Laravel.

                    Transformo ideas y necesidades de negocios
                    en soluciones digitales funcionales,
                    modernas y a medida.

                </p>


                <div class="hero-buttons">

                    <a href="#contacto" class="btn btn-primary-custom">
                        <i class="fa-solid fa-paper-plane me-2"></i>
                        Solicitar presupuesto
                    </a>


                    <a href="#proyectos" class="btn btn-outline-custom">
                        <i class="fa-regular fa-folder-open me-2"></i>
                        Ver proyectos

                    </a>

                </div>


                <!-- TECNOLOGIAS -->

                <div class="hero-technologies">

                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>MySQL</span>
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>JS</span>

                </div>

            </div>


            <!-- IMAGEN -->

            <div class="col-lg-6">

                <div class="hero-image">

                    <img
                        src="{{ asset('images/yo-2026-traje.jpg') }}"
                        alt="Desarrollo de sistemas web"
                    >

                    <div class="hero-overlay"></div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================
    SOBRE MÍ
========================= -->

<section id="sobre-mi" class="about-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- COLUMNA IZQUIERDA -->

            <div class="col-lg-6">

                <div class="section-label">

                    <span></span>

                    SOBRE MÍ

                </div>


                <h2 class="section-title">

                    Analista de Sistemas
                    <br>
                    <span>y Desarrollador Web</span>

                </h2>


                <p class="about-text">

                    Soy Técnico Superior Analista de Sistemas y
                    desarrollador web especializado en PHP y Laravel.

                </p>


                <p class="about-text">

                    Me gusta entender primero el problema y después
                    encontrar una solución mediante la tecnología.
                    Desarrollo páginas web y sistemas personalizados
                    pensados para las necesidades reales de cada
                    negocio o emprendimiento.

                </p>


                <p class="about-text">

                    Mi objetivo no es simplemente escribir código:
                    es crear herramientas que ayuden a trabajar mejor,
                    organizar información, ahorrar tiempo y hacer
                    crecer un proyecto.

                </p>


                <!-- DATOS -->

                <div class="about-features">

                    <div class="about-feature">

                        <div class="feature-icon">

                            <i class="fa-solid fa-graduation-cap"></i>

                        </div>

                        <div>

                            <strong>
                                Analista de Sistemas
                            </strong>

                            <small>
                                Técnico Superior
                            </small>

                        </div>

                    </div>


                    <div class="about-feature">

                        <div class="feature-icon">

                            <i class="fa-solid fa-code"></i>

                        </div>

                        <div>

                            <strong>
                                PHP & Laravel
                            </strong>

                            <small>
                                Desarrollo de sistemas web
                            </small>

                        </div>

                    </div>


                    <div class="about-feature">

                        <div class="feature-icon">

                            <i class="fa-solid fa-lightbulb"></i>

                        </div>

                        <div>

                            <strong>
                                Enfoque en soluciones
                            </strong>

                            <small>
                                Tecnología aplicada a problemas reales
                            </small>

                        </div>

                    </div>

                </div>

            </div>


            <!-- COLUMNA DERECHA -->

            <div class="col-lg-6">

                <div class="solution-card">

                    <div class="solution-card-header">

                        <div class="solution-icon">

                            <i class="fa-solid fa-laptop-code"></i>

                        </div>

                        <h3>
                            ¿Qué puedo hacer por vos?
                        </h3>

                    </div>


                    <div class="solution-list">

                        <div class="solution-item">

                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Páginas web institucionales
                                y personalizadas
                            </span>

                        </div>


                        <div class="solution-item">

                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Landing pages para promocionar
                                productos o servicios
                            </span>

                        </div>


                        <div class="solution-item">

                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Sistemas web a medida para negocios
                            </span>

                        </div>


                        <div class="solution-item">

                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Paneles administrativos y gestión
                                de información
                            </span>

                        </div>


                        <div class="solution-item">

                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Bases de datos e integración con
                                aplicaciones web
                            </span>

                        </div>


                        <div class="solution-item">

                            <i class="fa-solid fa-circle-check"></i>

                            <span>
                                Mantenimiento y mejoras de sistemas
                                existentes
                            </span>

                        </div>

                    </div>


                    <div class="solution-message">

                        <span>
                            Cada proyecto es un desafío.
                        </span>

                        <br>

                        Y me gusta hacerlo bien.

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================
     SERVICIOS Y TECNOLOGÍAS
========================= -->

<section id="servicios" class="services-section">

    <div class="container">

        <div class="row g-5">

            <!-- TECNOLOGÍAS -->

            <div class="col-lg-5">

                <div class="section-label section-label-dark">

                    <span></span>

                    TECNOLOGÍAS

                </div>

                <h2 class="section-title section-title-dark">

                    Herramientas para crear
                    <span>soluciones</span>

                </h2>

                <p class="services-intro">

                    Trabajo con tecnologías modernas y probadas
                    para desarrollar productos sólidos, seguros,
                    escalables y fáciles de mantener.

                </p>


                <div class="technologies-grid">

                    <div class="technology">
                        <i class="fa-brands fa-php"></i>
                        <span>PHP</span>
                    </div>

                    <div class="technology">
                        <i class="fa-brands fa-laravel"></i>
                        <span>Laravel</span>
                    </div>

                    <div class="technology">
                        <i class="fa-solid fa-database"></i>
                        <span>MySQL</span>
                    </div>

                    <div class="technology">
                        <i class="fa-brands fa-html5"></i>
                        <span>HTML5</span>
                    </div>

                    <div class="technology">
                        <i class="fa-brands fa-css3-alt"></i>
                        <span>CSS3</span>
                    </div>

                    <div class="technology">
                        <i class="fa-brands fa-js"></i>
                        <span>JavaScript</span>
                    </div>

                    <div class="technology">
                        <i class="fa-brands fa-bootstrap"></i>
                        <span>Bootstrap</span>
                    </div>

                    <div class="technology">
                        <i class="fa-brands fa-git-alt"></i>
                        <span>Git</span>
                    </div>

                </div>

            </div>


            <!-- SERVICIOS -->

            <div class="col-lg-7">

                <div class="section-label section-label-dark">

                    <span></span>

                    SERVICIOS

                </div>

                <h2 class="section-title section-title-dark">

                    ¿Qué puedo
                    <span>desarrollar?</span>

                </h2>


                <div class="services-grid">


                    <!-- SERVICIO 1 -->

                    <div class="service-card">

                        <div class="service-icon">

                            <i class="fa-solid fa-globe"></i>

                        </div>

                        <div>

                            <h3>
                                Páginas Web
                            </h3>

                            <p>
                                Sitios institucionales, landing pages,
                                páginas comerciales y sitios
                                personalizados.
                            </p>

                        </div>

                    </div>


                    <!-- SERVICIO 2 -->

                    <div class="service-card">

                        <div class="service-icon">

                            <i class="fa-solid fa-gears"></i>

                        </div>

                        <div>

                            <h3>
                                Sistemas Web
                            </h3>

                            <p>
                                Sistemas personalizados para
                                automatizar procesos y organizar
                                la información de tu negocio.
                            </p>

                        </div>

                    </div>


                    <!-- SERVICIO 3 -->

                    <div class="service-card">

                        <div class="service-icon">

                            <i class="fa-solid fa-chart-line"></i>

                        </div>

                        <div>

                            <h3>
                                Paneles Administrativos
                            </h3>

                            <p>
                                Dashboards para gestionar clientes,
                                productos, ventas, turnos y otros
                                procesos.
                            </p>

                        </div>

                    </div>


                    <!-- SERVICIO 4 -->

                    <div class="service-card">

                        <div class="service-icon">

                            <i class="fa-solid fa-database"></i>

                        </div>

                        <div>

                            <h3>
                                Bases de Datos
                            </h3>

                            <p>
                                Diseño e integración de bases de datos
                                para almacenar y administrar la
                                información de forma eficiente.
                            </p>

                        </div>

                    </div>


                    <!-- SERVICIO 5 -->

                    <div class="service-card">

                        <div class="service-icon">

                            <i class="fa-solid fa-plug"></i>

                        </div>

                        <div>

                            <h3>
                                APIs REST
                            </h3>

                            <p>
                                Integración entre sistemas y servicios
                                mediante APIs para conectar diferentes
                                aplicaciones.
                            </p>

                        </div>

                    </div>


                    <!-- SERVICIO 6 -->

                    <div class="service-card">

                        <div class="service-icon">

                            <i class="fa-solid fa-mobile-screen-button"></i>

                        </div>

                        <div>

                            <h3>
                                Aplicaciones Web
                            </h3>

                            <p>
                                Aplicaciones responsive y PWA que
                                pueden utilizarse desde computadoras
                                y dispositivos móviles.
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================
     PROYECTOS
========================= -->

<section id="proyectos" class="projects-section">

    <div class="container">

        <!-- ENCABEZADO -->

        <div class="text-center mb-5">

            <div class="section-label justify-content-center">

                <span></span>

                PROYECTOS DESTACADOS

                <span></span>

            </div>

            <h2 class="section-title">

                Algunos de mis
                <span>trabajos</span>

            </h2>

            <p class="projects-intro mx-auto">

                Proyectos reales y soluciones desarrolladas
                para resolver necesidades concretas.

            </p>

        </div>


        <!-- PROYECTO PRINCIPAL -->

        <div class="project-featured">

            <!-- IMAGEN -->

            <div class="project-image">

                <img src="{{ asset('images/proyectos/churros-valcel.jpg') }}" alt="Sistema de gestión Churros Valcel">

                <div class="project-image-overlay">

                    <span>
                        Proyecto real
                    </span>

                </div>

            </div>


            <!-- INFORMACIÓN -->

            <div class="project-content">

                <div class="project-category">

                    SISTEMA WEB

                </div>


                <h3>

                    Churros Valcel

                </h3>


                <p class="project-description">

                    Sistema web de gestión desarrollado para un
                    emprendimiento gastronómico real.

                    El proyecto permite centralizar y administrar
                    diferentes aspectos del negocio desde un único
                    panel.

                </p>


                <!-- FUNCIONALIDADES -->

                <div class="project-features">

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Gestión de clientes
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Gestión de productos
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Gestión de ventas
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Estados de ventas
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Medios de pago
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Base de datos
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Autenticación
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        Panel administrativo
                    </div>

                </div>


                <!-- TECNOLOGÍAS -->

                <div class="project-stack">

                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>Blade</span>
                    <span>Bootstrap</span>
                    <span>MySQL</span>
                    <span>Git</span>

                </div>


                <!-- BOTÓN -->

                <a href="#contacto" class="project-button" >
                    Quiero un sistema así
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>


        <!-- SEGUNDA FILA DE PROYECTOS -->

        <div class="row g-4 mt-4">


            <!-- PROYECTO 2 -->

            <div class="col-md-6">

                <div class="project-small">

                    <div class="project-small-icon">

                        <i class="fa-solid fa-calculator"></i>

                    </div>

                    <div>

                        <span class="project-small-category">
                            CONCEPTO DE SISTEMA
                        </span>

                        <h3>
                            Sistema de presupuestos
                        </h3>

                        <p>

                            Aplicación web pensada para profesionales
                            que necesitan calcular y presentar
                            presupuestos de forma rápida.

                        </p>

                    </div>

                </div>

            </div>


            <!-- PROYECTO 3 -->

            <div class="col-md-6">

                <div class="project-small">

                    <div class="project-small-icon">

                        <i class="fa-solid fa-calendar-check"></i>

                    </div>

                    <div>

                        <span class="project-small-category">
                            CONCEPTO DE SISTEMA
                        </span>

                        <h3>
                            Sistema de turnos
                        </h3>

                        <p>

                            Aplicación para administrar clientes,
                            profesionales, horarios y turnos
                            desde un panel web.

                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =========================
     CONTACTO
========================= -->

<section id="contacto" class="contact-section">

    <div class="container">

        <div class="contact-card">

            <div class="contact-decoration"></div>

            <div class="contact-content">

                <div class="contact-label">
                    <span></span>
                    ¿TENÉS UN PROYECTO EN MENTE?
                </div>

                <h2>
                    Hagamos realidad
                    <span>tu próxima idea.</span>
                </h2>

                <p>
                    Contame qué necesitás, qué problema querés
                    resolver o qué idea tenés en mente.

                    Podemos encontrar juntos una solución
                    tecnológica para tu negocio.
                </p>

                <div class="contact-buttons">

                    <a
                        href="https://wa.me/5493364036241?text=Hola%20Valent%C3%ADn!%20Vi%20tu%20portfolio%20y%20me%20gustar%C3%ADa%20consultarte%20por%20un%20proyecto."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="contact-whatsapp"
                    >
                        <i class="fa-brands fa-whatsapp"></i>
                        Hablemos por WhatsApp
                    </a>

                    <a
                        href="mailto:valentin.urbine967@gmail.com?subject=Consulta%20sobre%20un%20proyecto"
                        class="contact-email"
                    >
                        <i class="fa-regular fa-envelope"></i>
                        Enviar un email
                    </a>

                </div>

            </div>

            <div class="contact-icon-decoration">
                <i class="fa-solid fa-code"></i>
            </div>

        </div>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer class="portfolio-footer">

    <div class="container">

        <div class="row align-items-center gy-4">

            <div class="col-lg-5">

                <a href="#inicio" class="footer-brand">

                    <div class="brand-logo">
                        VU
                    </div>

                    <div class="brand-text ms-2">

                        <strong>Valentín Urbine</strong>

                        <small>Analista de Sistemas | PHP & Laravel</small>

                    </div>

                </a>

                <p class="footer-description">
                    Desarrollo de páginas web y sistemas
                    personalizados para transformar ideas
                    en soluciones digitales.
                </p>

            </div>


            <div class="col-lg-4">

                <h4>Explorá mi portfolio</h4>

                <div class="footer-links">

                    <a href="#inicio">Inicio</a>
                    <a href="#sobre-mi">Sobre mí</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#proyectos">Proyectos</a>
                    <a href="#contacto">Contacto</a>

                </div>

            </div>


            <div class="col-lg-3">

                <h4>Conectemos</h4>

                <div class="footer-social">

                    <a
                        href="https://wa.me/5493364036241"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="WhatsApp"
                    >
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a
                        href="https://www.linkedin.com/in/valentin-urbine/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn"
                    >
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a
                        href="https://github.com/hecu01"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="GitHub"
                    >
                        <i class="fa-brands fa-github"></i>
                    </a>

                    <a
                        href="mailto:valentin.urbine967@gmail.com"
                        aria-label="Email"
                    >
                        <i class="fa-regular fa-envelope"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} Valentín Urbine.
                Todos los derechos reservados.
            </p>

            <p>
                Desarrollado con
                <span>PHP & Laravel</span>
                <i class="fa-solid fa-heart"></i>
            </p>

        </div>

    </div>

</footer>
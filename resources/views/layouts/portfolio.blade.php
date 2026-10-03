<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Valentín Urbine | Desarrollo Web y Sistemas')
    </title>

    <meta
        name="description"
        content="Analista de Sistemas y desarrollador PHP & Laravel. Desarrollo de páginas web y sistemas web a medida."
    >

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    >

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- Nuestro CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    @stack('styles')

</head>

    <body>

        @yield('content')


        <!-- Bootstrap JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        </script>

        @stack('scripts')
        <script>

            document.addEventListener('DOMContentLoaded', function () {

                const sections = document.querySelectorAll(
                    '#inicio, #sobre-mi, #servicios, #proyectos, #contacto'
                );

                const navLinks = document.querySelectorAll(
                    '.portfolio-navbar .nav-link'
                );

                const navbar = document.querySelector('.portfolio-navbar');

                const indicator = document.querySelector(
                    '.portfolio-navbar .nav-indicator'
                );


                function moverIndicador(link) {

                    if (!link || !indicator) {
                        return;
                    }


                    const nav = link.closest('.navbar-nav');

                    const navRect = nav.getBoundingClientRect();

                    const linkRect = link.getBoundingClientRect();


                    indicator.style.left =
                        (linkRect.left - navRect.left) + 'px';


                    indicator.style.width =
                        linkRect.width + 'px';

                }


                function actualizarNavbar() {

                    const scrollPosition =
                        window.scrollY +
                        navbar.offsetHeight +
                        120;


                    let seccionActual = 'inicio';


                    sections.forEach(section => {

                        if (
                            scrollPosition >=
                            section.offsetTop
                        ) {

                            seccionActual =
                                section.id;

                        }

                    });


                    let linkActivo = null;


                    navLinks.forEach(link => {

                        link.classList.remove('active');


                        if (
                            link.getAttribute('href') ===
                            '#' + seccionActual
                        ) {

                            link.classList.add('active');

                            linkActivo = link;

                        }

                    });


                    moverIndicador(linkActivo);

                }


                /* SCROLL */

                window.addEventListener(
                    'scroll',
                    actualizarNavbar,
                    { passive: true }
                );


                /* CLICK */

                navLinks.forEach(link => {

                    link.addEventListener(
                        'click',
                        function () {

                            navLinks.forEach(item => {
                                item.classList.remove('active');
                            });


                            this.classList.add('active');


                            moverIndicador(this);

                        }
                    );

                });


                /* CARGA INICIAL */

                actualizarNavbar();


                /* REAJUSTAR SI CAMBIA EL TAMAÑO */

                window.addEventListener(
                    'resize',
                    actualizarNavbar
                );

            });

        </script>
    </body>

</html>
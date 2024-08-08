<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>Tecnodemo Iberica Mantenimiento y Servicios S.L.</title>
        <meta name="format-detection" content="telephone=no">
        <meta
            name="viewport"
            content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        <!-- Stylesheets-->
        <link
            rel="stylesheet"
            type="text/css"
            href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
        <style>
            .ie-panel {
                display: none;
                background: #212121;
                padding: 10px 0;
                box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
                clear: both;
                text-align: center;
                position: relative;
                z-index: 1;
            }
            html.ie-10 .ie-panel,
            html.lt-ie-10 .ie-panel {
                display: block;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                const root = document.documentElement;
                const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
                const marqueeContent = document.querySelector("ul.marquee-content");

                root.style.setProperty("--marquee-elements", marqueeContent.children.length);

                for(let i=0; i<marqueeElementsDisplayed; i++) {
                    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
                }
                });
        </script>
    </head>
    <body id="tecnodemo-body">
        <div class="ie-panel">
            <a href="http://windows.microsoft.com/en-US/internet-explorer/">Estás utilizando Internet Explorer. Para ir más rápido, cambia de navegador.</a>
        </div>
        <div class="preloader">
            <div class="preloader-body">
                <div class="cssload-container">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="page">
            <div id="home">
                <!-- Page Header-->
                <header class="section page-header">
                    <!-- RD Navbar-->
                    <div class="rd-navbar-wrap">
                        <nav
                            class="rd-navbar rd-navbar-classic"
                            data-layout="rd-navbar-fixed"
                            data-sm-layout="rd-navbar-fixed"
                            data-md-layout="rd-navbar-fixed"
                            data-md-device-layout="rd-navbar-fixed"
                            data-lg-layout="rd-navbar-static"
                            data-lg-device-layout="rd-navbar-fixed"
                            data-xl-layout="rd-navbar-static"
                            data-xl-device-layout="rd-navbar-static"
                            data-xxl-layout="rd-navbar-static"
                            data-xxl-device-layout="rd-navbar-static"
                            data-lg-stick-up-offset="46px"
                            data-xl-stick-up-offset="46px"
                            data-xxl-stick-up-offset="46px"
                            data-lg-stick-up="true"
                            data-xl-stick-up="true"
                            data-xxl-stick-up="true">
                            <div class="rd-navbar-main-outer">
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Panel-->
                                    <div class="rd-navbar-panel">
                                        <!-- RD Navbar Toggle-->
                                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                            <span></span></button>
                                        <!-- RD Navbar Brand-->
                                        <div class="rd-navbar-brand">
                                            <a class="brand" href="index.html"><img class="logo" src="images/logo-tecnodemo.png" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="rd-navbar-main-element">
                                        <div class="rd-navbar-nav-wrap">
                                            <!-- RD Navbar Share-->
                                            <div
                                                class="rd-navbar-share fl-bigmug-line-share27"
                                                data-rd-navbar-toggle=".rd-navbar-share-list">
                                                <ul class="list-inline rd-navbar-share-list">
                                                    <li class="rd-navbar-share-list-item">
                                                        <a class="icon fa fa-whatsapp" target="_blank" href="https://wa.me/34676016882"></a>
                                                    </li>
                                                    <li class="rd-navbar-share-list-item">
                                                        <a class="icon fa fa-instagram" target="_blank" href="https://www.instagram.com/tecnodemo_iberica/"></a>
                                                    </li>
                                                    <li class="rd-navbar-share-list-item">
                                                        <a class="icon fa fa-facebook" target="_blank" href="https://www.facebook.com/NetejesTecnodemoiberica"></a>
                                                    </li>
                                                    <li class="rd-navbar-share-list-item">
                                                        <a class="icon fa fa-twitter" target="_blank" href="https://twitter.com/Tecnodemoiberic"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="tecnodemo-menu rd-navbar-nav">
                                                <li class="rd-nav-item active">
                                                    <a class="rd-nav-link" href="#home">@lang('index.inicio')</a>
                                                </li>
                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="#services">@lang('index.servicios')</a>
                                                </li>
                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="#projects">@lang('index.proyectos')</a>
                                                </li>
                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="#team">@lang('index.sobre-nosotros')</a>
                                                </li>
                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="#news">@lang('index.novedades')</a>
                                                </li>
                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="#contacts">@lang('index.contacto')</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>

                <!-- Swiper-->
                <section
                    class="section swiper-container swiper-slider swiper-slider-classic"
                    data-loop="true"
                    data-autoplay="4859"
                    data-simulate-touch="true"
                    data-direction="vertical"
                    data-nav="false">
                    <div class="swiper-wrapper text-center">
                        <div class="swiper-slide" data-slide-bg="images/front-slider/front-image1.png">
                            <div class="swiper-slide-caption section-md">
                                <div class="container">
                                    <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Profesionales experimentados</h1>
                                    <p
                                        class="text-width-large"
                                        data-caption-animate="fadeInRight"
                                        data-caption-delay="100">Un equipo de personas cualificadas para el mejor mantenimiento y la mejor limpieza a tu alcance.</p>
                                    <a
                                        class="button button-primary button-ujarak"
                                        href="#modalCta"
                                        data-toggle="modal"
                                        data-caption-animate="fadeInUp"
                                        data-caption-delay="200">Contáctanos</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide-bg="images/front-slider/front-image2.png">
                            <div class="swiper-slide-caption section-md">
                                <div class="container">
                                    <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Equipo de alta calidad</h1>
                                    <p
                                        class="text-width-large"
                                        data-caption-animate="fadeInRight"
                                        data-caption-delay="100">Contamos con el mejor equipo técnico. Las mejores máquinas y material a tu servicio para un acabado extraordinario.</p>
                                    <a
                                        class="button button-primary button-ujarak"
                                        href="#modalCta"
                                        data-toggle="modal"
                                        data-caption-animate="fadeInUp"
                                        data-caption-delay="200">Contáctanos</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide-bg="images/front-slider/front-image3.png">
                            <div class="swiper-slide-caption section-md">
                                <div class="container">
                                    <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Garantía de resultados</h1>
                                    <p
                                        class="text-width-large"
                                        data-caption-animate="fadeInRight"
                                        data-caption-delay="100">Nuestros clientes nos avalan. Contamos con un largo historial de clientes satisfechos.</p>
                                    <a
                                        class="button button-primary button-ujarak"
                                        href="#modalCta"
                                        data-toggle="modal"
                                        data-caption-animate="fadeInUp"
                                        data-caption-delay="200">Contáctanos</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Swiper Pagination-->
                    <div class="swiper-pagination__module">
                        <div class="swiper-pagination__fraction">
                            <span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
                        <div class="swiper-pagination__divider"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>

            </div>
            <!-- See all services-->
            <section
                class="section section-sm section-first bg-default text-center"
                id="services">
                <div class="container">
                    <div class="row row-30 justify-content-center">
                        <div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp"><img src="images/que-ofrecemos/image1.png" alt="" width="415" height="592"/>
                        </div>
                        <div class="col-lg-7 col-xl-6">
                            <div class="row row-30">
                                <div class="col-sm-6 wow fadeInRight">
                                    <article class="box-icon-modern box-icon-modern-custom">
                                        <div>
                                            <h3 class="box-icon-modern-big-title">¿Qué ofrecemos?</h3>
                                            <div class="box-icon-modern-decor"></div>
                                            <a class="button button-primary button-ujarak" href="#">Ver servicios</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".1s">
                                    <article class="box-icon-modern box-icon-modern-2">
                                        <div class="box-icon-modern-icon linearicons-home4"></div>
                                        <h5 class="box-icon-modern-title">
                                            <a href="#">COMUNIDADES<br>Y PARKINGS</a>
                                        </h5>
                                        <div class="box-icon-modern-decor"></div>
                                        <p class="box-icon-modern-text">Limpieza especializada para tu comunidad y parking</p>
                                    </article>
                                </div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".2s">
                                    <article class="box-icon-modern box-icon-modern-2">
                                        <div class="box-icon-modern-icon linearicons-factory2"></div>
                                        <h5 class="box-icon-modern-title">
                                            <a href="#">EMPRESAS<br>Y COMERCIOS</a>
                                        </h5>
                                        <div class="box-icon-modern-decor"></div>
                                        <p class="box-icon-modern-text">La mejor opción para empresas, instalaciones, comercios y establecimientos</p>
                                    </article>
                                </div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".3s">
                                    <article class="box-icon-modern box-icon-modern-2">
                                        <div class="box-icon-modern-icon linearicons-city"></div>
                                        <h5 class="box-icon-modern-title">
                                            <a href="#">LIMPIEZAS<br>TÉCNICAS</a>
                                        </h5>
                                        <div class="box-icon-modern-decor"></div>
                                        <p class="box-icon-modern-text">Limpiezas traumáticas, de altura y especiales. ¡Nada se nos escapa!</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cta-->
            <section class="section section-fluid bg-default">
                <div class="parallax-container" data-parallax-img="images/img5.png">
                    <div
                        class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay">
                        <div class="container">
                            <div class="row row-30 justify-content-end text-right">
                                <div class="col-sm-6">
                                    <h3 class="wow fadeInLeft">Contacta ya para obtener<br>tu presupuesto!</h3>
                                    <p>Necesitas ayuda u orientación?<br>Consultanos cual es la mejor opción para tí.<br>¡Estaremos encantados de poder ayudarte!</p>
                                    <div class="group-sm group-middle group justify-content-end">
                                        <a
                                            class="button button-primary button-ujarak"
                                            href="#modalCta"
                                            data-toggle="modal">Contáctanos</a>
                                        <a class="button button-white-outline button-ujarak" href="#contacts">Trabaja con nosotros</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Latest Projects-->
            <section
                class="section section-sm section-fluid bg-default text-center"
                id="projects">
                <div class="container-fluid tecnodemo-proyectos-margin">
                    <h2 class="wow fadeInLeft">Últimos trabajos y limpiezas</h2>
                    <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">Puedes ver algunos de nuestro últimos trabajos
                        hechos con todo detalle para nuestros clientes. Nuestro equipo cualificado no deja ningún rincon sin limpiar. Filtra por la especialidad que estés buscando.</p>
                    <div class="isotope-filters isotope-filters-horizontal">
                        <button
                            class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha"
                            data-custom-toggle="#isotope-3"
                            data-custom-toggle-hide-on-blur="true"
                            data-custom-toggle-disable-on-blur="true">
                            <span class="icon fa fa-caret-down"></span>Filtro</button>
                        <ul class="isotope-filters-list" id="isotope-3">
                            <li>
                                <a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">Todos</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">Comunidades</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Parkings</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">Cristales</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">Oficinas</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 5" data-isotope-group="gallery">De altura</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 6" data-isotope-group="gallery">Traumáticas</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 7" data-isotope-group="gallery">Técnicas</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 8" data-isotope-group="gallery">Mantenimientos de edificios</a>
                            </li>
                            <li>
                                <a href="#" data-isotope-filter="Type 9" data-isotope-group="gallery">Controles de acceso</a>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="row row-30 isotope"
                        data-isotope-layout="fitRows"
                        data-isotope-group="gallery"
                        data-lightgallery="group">
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 5"
                            data-wow-delay=".1s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/alturas-2.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/alturas-2.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/alturas-2.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Limpieza en altura</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 1"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/comunidades-1.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/comunidades-1.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/comunidades-1.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Comunidades</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 1"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/comunidades-2.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/comunidades-2.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/comunidades-2.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Comunidades</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 9"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/control-acceso-1.jpeg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/control-acceso-1.jpeg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/control-acceso-1.jpeg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Control de acceso</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 3"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/cristales-1.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/cristales-1.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/cristales-1.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Limpieza de cristales</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 8"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/mantenimiento-edificios-1.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/mantenimiento-edificios-1.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/mantenimiento-edificios-1.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Mantenimiento de edificios</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 8"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/mantenimiento-edificios-2.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/mantenimiento-edificios-2.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/mantenimiento-edificios-2.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Mantenimiento de edificios</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 5">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/alturas-1.jpeg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/alturas-1.jpeg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/alturas-1.jpeg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Limpieza en altura</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 4"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/oficinas-1.jpeg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/oficinas-1.jpeg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/oficinas-1.jpeg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Oficinas</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 4"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/oficinas-2.jpeg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/oficinas-2.jpeg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/oficinas-2.jpeg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Oficinas</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 2"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/parkings-1.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/parkings-1.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/parkings-1.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Parkings</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 2"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/parkings-2.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/parkings-2.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/parkings-2.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Parkings</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 7"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/tecnicas-1.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/tecnicas-1.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/tecnicas-1.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Limpiezas técnicas</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                        <div
                            class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight"
                            data-filter="Type 6"
                            data-wow-delay=".2s">
                            <!-- Thumbnail Classic-->
                            <article class="thumbnail thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-figure"><img
                                    src="images/galeria/miniaturas/traumaticas-1.jpg"
                                    alt=""
                                    width="420"
                                    height="350"/>
                                </div>
                                <div class="thumbnail-classic-caption">
                                    <div class="thumbnail-classic-title-wrap">
                                        <a
                                            class="icon fl-bigmug-line-zoom60"
                                            href="images/galeria/traumaticas-1.jpg"
                                            data-lightgallery="item"><img
                                            src="images/galeria/traumaticas-1.jpg"
                                            alt=""
                                            width="420"
                                            height="350"/></a>
                                        <h5 class="thumbnail-classic-title">
                                            <a href="#">Limpiezas traumáticas</a>
                                        </h5>
                                    </div>
                                    <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch
                                        features with great UI that you won’t find anywhere else.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-sm bg-default">
                <video class="video" controls style="width:70%">
                    <source src="{{ asset('videos/bumper.mp4') }}" type="video/mp4">
                    Tu navegador no soporta este video
                </video>
            </section>

            <!-- Years of experience-->
            <section class="section section-sm bg-default" id="team" style="display:flex;flex-direction:column;justify-items:center;align-items:center;">
                <div class="container-fluid tecnodemo-sobre-nosotros-margin">
                    <div class="container" style="margin-bottom:50px;">
                        <div
                            class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
                            <div class="col-md-6 col-lg-5 col-xl-4 text-center">
                                <a class="text-img" href="#">
                                    <div id="particles-js"></div>
                                    <span class="counter">{{ $years }}</span></a>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
                                <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                                    <h3 class="title-decoration-lines-left">Años de experiencia</h3>
                                    <p class="text-gray-500">Contamos con un equipo experimentado que cuidan del más mínimo detalle desde hace años.</p>
                                    <a class="button button-secondary button-pipaluk" href="#">Contáctanos</a>
                                </div>
                            </div>
                            <div
                                class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight"
                                data-wow-delay=".1s">
                                <div class="row justify-content-center border-2-column offset-top-xl-26">
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number">
                                                <span class="counter">100</span>
                                            </div>
                                            <h6 class="counter-amy-title">COMUNIDADES</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number">
                                                <span class="counter">55</span>
                                            </div>
                                            <h6 class="counter-amy-title">OPERARIOS</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number">
                                                <span class="counter">127</span>
                                            </div>
                                            <h6 class="counter-amy-title">CLIENTES<br>SATISFECHOS</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-6">
                                        <div class="counter-amy">
                                            <div class="counter-amy-number">
                                                <span class="counter">48</span>
                                            </div>
                                            <h6 class="counter-amy-title">PARTNERS</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Meet The Team-->
            <section class="section section-sm section-fluid bg-default" >
                <div class="container-fluid tecnodemo-sobre-nosotros-margin">
                    <h2>Nuestro equipo</h2>
                    <div class="row row-sm row-30 justify-content-center team-component-grid">
                        <div class="team-component wow fadeInRight">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/samuel_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Samuel Sánchez</a>
                                    </h4>
                                    <p class="team-classic-status">Manager & CEO</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".1s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/pablo_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Pablo López</a>
                                    </h4>
                                    <p class="team-classic-status">Director comercial</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".2s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/sandra_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Sandra Leal</a>
                                    </h4>
                                    <p class="team-classic-status">Dpto. RRHH y planificación</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".1s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/alejandro_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Alejandro González</a>
                                    </h4>
                                    <p class="team-classic-status">Dpto. comercial</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".3s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/nathaly_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Nathaly Manquecoi</a>
                                    </h4>
                                    <p class="team-classic-status">Dpto. comercial</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".3s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/isabel_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Isabel Alba</a>
                                    </h4>
                                    <p class="team-classic-status">Dpto. administración</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".3s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/alba_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Alba Reyes</a>
                                    </h4>
                                    <p class="team-classic-status">Dpto. administración</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".3s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/begona_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Begoña Romero</a>
                                    </h4>
                                    <p class="team-classic-status">Dpto. calidad y supervisión</p>
                                </div>
                            </article>
                        </div>
                        <div class="team-component wow fadeInRight" data-wow-delay=".3s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg">
                                <a class="team-classic-figure" href="#"><img src="images/equipo/giselda_m.jpeg" alt="" /></a>
                                <div class="team-classic-caption">
                                    <h4 class="team-classic-name">
                                        <a href="#">Giselda Ramos</a>
                                    </h4>
                                    <p class="team-classic-status">Dpto. calidad y supervisión</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- You dream — we embody-->
            <section class="section section-sm bg-default text-md-left">
                <div class="container">
                    <div
                        class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                        <div class="col-lg-6 col-xl-5 wow fadeInLeft">
                            <h2>Sal ganando con nosotros!</h2>
                            <!-- Bootstrap tabs-->
                            <div
                                class="tabs-custom tabs-horizontal tabs-line tabs-line-big text-center text-md-left"
                                id="tabs-6">
                                <!-- Nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link nav-link-big active" href="#tabs-6-1" data-toggle="tab">01</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link nav-link-big" href="#tabs-6-2" data-toggle="tab">02</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link nav-link-big" href="#tabs-6-3" data-toggle="tab">03</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link nav-link-big" href="#tabs-6-4" data-toggle="tab">04</a>
                                    </li>
                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-6-1">
                                        <h5 class="font-weight-normal">Alta calidad</h5>
                                        <p>Somos minuciosos a la hora de hacer nuestro trabajo. Nos gusta que el resultado sea lo más cercano a la perfección posible. Tener a Tecnodemo de tu lado es garantía de absoluta calidad.</p>
                                        <div class="group-sm group-middle">
                                            <a
                                                class="button button-secondary button-pipaluk"
                                                href="#modalCta"
                                                data-toggle="modal">Contáctanos</a>
                                            <a class="button button-default-outline button-wapasha" href="#contacts">Trabaja con nosotros</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-6-2">
                                        <h5 class="font-weight-normal">Ahorro de tiempo</h5>
                                        <p>Deja que seamos nosotros quienes se encargan de todos. Optimiza tu tiempo para que Tecnodemo se encargue de dejar todo impecable.</p>
                                        <div class="group-sm group-middle">
                                            <a
                                                class="button button-secondary button-pipaluk"
                                                href="#modalCta"
                                                data-toggle="modal">Contáctanos</a>
                                            <a class="button button-default-outline button-wapasha" href="#">Leer más</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-6-3">
                                        <h5 class="font-weight-normal">Flexibilidad</h5>
                                        <p>Nuestro personal y equipamiento está preparado para todo tipo de retos. Nada se nos escapa!</p>
                                        <div class="group-sm group-middle">
                                            <a
                                                class="button button-secondary button-pipaluk"
                                                href="#modalCta"
                                                data-toggle="modal">Contáctanos</a>
                                            <a class="button button-default-outline button-wapasha" href="#">Leer más</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-6-4">
                                        <h5 class="font-weight-normal">Sostenibilidad y responsabilidad ambiental</h5>
                                        <p>Utilizamos productos y prácticas sostenibles para el medio ambiente. Reducimos la huella ecológica y promovemos prácticas sostenibles en tu negocio.</p>
                                        <div class="group-sm group-middle">
                                            <a
                                                class="button button-secondary button-pipaluk"
                                                href="#modalCta"
                                                data-toggle="modal">Contáctanos</a>
                                            <a class="button button-default-outline button-wapasha" href="#">Leer más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay=".1s">
                            <div
                                class="owl-carousel owl-style-1"
                                data-items="2"
                                data-stage-padding="0"
                                data-loop="true"
                                data-margin="0"
                                data-mouse-drag="true"
                                data-autoplay="true">
                                <a class="box-device"><img src="images/sal-ganando/imagen1.png" alt="" width="313" height="580"/></a>
                                <a class="box-device"><img src="images/sal-ganando/imagen2.png" alt="" width="313" height="580"/></a>
                                <a class="box-device"><img src="images/sal-ganando/imagen3.jpg" alt="" width="313" height="580"/></a>
                                <!--a class="box-device" href="#"><img src="images/index-5-313x580.png" alt="" width="313" height="580"/></a-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- What people Say-->
            <section class="section section-sm section-bottom-70 section-fluid bg-default">
                <div class="container-fluid">
                    <a href="#"><h2>Opiniones de nuestros <span class="red">partners</span></h2></a>
                    <div class="row row-50 row-sm">
                        <div class="col-md-6 col-xl-4 wow fadeInRight">
                            <!-- Quote Modern-->
                            <article class="quote-modern quote-modern-custom">
                                <div class="unit unit-spacing-md align-items-center">
                                    <div class="unit-left">
                                        <a class="quote-modern-figure" href="#"><img
                                            class="img-circles"
                                            src="images/user-11-75x75.jpg"
                                            alt=""
                                            width="75"
                                            height="75"/></a>
                                    </div>
                                    <div class="unit-body">
                                        <h4 class="quote-modern-cite">
                                            <a href="#">Catherine Williams</a>
                                        </h4>
                                        <p class="quote-modern-status">Regular client</p>
                                    </div>
                                </div>
                                <div class="quote-modern-text">
                                    <p class="q">RatherApp offers a high caliber of resources skilled in Microsoft
                                        Azure .NET, mobile and Quality Assurance. They became our true business partners
                                        over the past three years.</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
                            <!-- Quote Modern-->
                            <article class="quote-modern quote-modern-custom">
                                <div class="unit unit-spacing-md align-items-center">
                                    <div class="unit-left">
                                        <a class="quote-modern-figure" href="#"><img
                                            class="img-circles"
                                            src="images/user-12-75x75.jpg"
                                            alt=""
                                            width="75"
                                            height="75"/></a>
                                    </div>
                                    <div class="unit-body">
                                        <h4 class="quote-modern-cite">
                                            <a href="#">Rupert Wood</a>
                                        </h4>
                                        <p class="quote-modern-status">Regular client</p>
                                    </div>
                                </div>
                                <div class="quote-modern-text">
                                    <p class="q">RatherApp powered us with a competent team to develop products for
                                        banking services. The team has been delivering results within budget and time,
                                        which is amazing.</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
                            <!-- Quote Modern-->
                            <article class="quote-modern quote-modern-custom">
                                <div class="unit unit-spacing-md align-items-center">
                                    <div class="unit-left">
                                        <a class="quote-modern-figure" href="#"><img
                                            class="img-circles"
                                            src="images/user-20-75x75.jpg"
                                            alt=""
                                            width="75"
                                            height="75"/></a>
                                    </div>
                                    <div class="unit-body">
                                        <h4 class="quote-modern-cite">
                                            <a href="#">Samantha Brown</a>
                                        </h4>
                                        <p class="quote-modern-status">Regular client</p>
                                    </div>
                                </div>
                                <div class="quote-modern-text">
                                    <p class="q">RatherApp is a highly skilled and uniquely capable firm with
                                        multitudes of talent on-board. We have collaborated on a number of diverse
                                        projects that have been a great success.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-sm bg-default" id="">
                <a href="{{ route('partners') }}" class="col-lg-12 col-xl-12 align-self-center wow fadeInRight" data-wow-delay=".2s" style="display:flex;justify-content:center;margin-top:35px;margin-bottom:100px;">
                    <div class="marquee" style="width:75%">
                        <ul class="marquee-content">
                            <li><img src="{{ asset('images/partners/a3comercial.png') }}"></li>
                            <li><img src="{{ asset('images/partners/alco.png') }}"></li>
                            <li><img src="{{ asset('images/partners/som-gestio.png') }}"></li>
                            <li><img src="{{ asset('images/partners/almazan-advocats.png') }}"></li>
                            <li><img src="{{ asset('images/partners/casal-estiu-san-mauro.png') }}"></li>
                            <li><img src="{{ asset('images/partners/casadepoble.png') }}"></li>
                            <li><img src="{{ asset('images/partners/central-lera-gestion.png') }}"></li>
                            <li><img src="{{ asset('images/partners/espadel.png') }}"></li>
                            <li><img src="{{ asset('images/partners/finques-gaudi.png') }}"></li>
                            <li><img src="{{ asset('images/partners/joralfran.png') }}"></li>
                            <li><img src="{{ asset('images/partners/openclass.jpeg') }}"></li>
                            <li><img src="{{ asset('images/partners/parkia.jpeg') }}"></li>
                        </ul>
                    </div>
                </a>
                <a href="{{ route('partners') }}" class="col-lg-12 col-xl-12 align-self-center wow fadeInRight" data-wow-delay=".2s" style="display:flex;justify-content:center;margin-top:35px;margin-bottom:100px;">
                    <div class="marquee2" style="width:75%">
                        <ul class="marquee-content2">
                            <li><img src="{{ asset('images/partners/pastisseria-pla.png') }}"></li>
                            <li><img src="{{ asset('images/partners/recasens.png') }}"></li>
                            <li><img src="{{ asset('images/partners/remma.jpg') }}"></li>
                            <li><img src="{{ asset('images/partners/bird.png') }}"></li>
                            <li><img src="{{ asset('images/partners/la-passio-esparraguera.png') }}"></li>
                            <li><img src="{{ asset('images/partners/maser-services.png') }}"></li>
                            <li><img src="{{ asset('images/partners/carmen-flores.png') }}"></li>
                            <li><img src="{{ asset('images/partners/dietflash.png') }}"></li>
                            <li><img src="{{ asset('images/partners/immobiliaria-la-llar.png') }}"></li>
                            <li><img src="{{ asset('images/partners/ondulados-carmen.png') }}"></li>
                            <li><img src="{{ asset('images/partners/bb-trends.png') }}"></li>
                            <li><img src="{{ asset('images/partners/asgv.png') }}"></li>
                        </ul>
                    </div>
                </a>
                <a href="{{ route('partners') }}" class="col-lg-12 col-xl-12 align-self-center wow fadeInRight" data-wow-delay=".2s" style="display:flex;justify-content:center;margin-top:35px;margin-bottom:100px;">
                    <div class="marquee" style="width:75%">
                        <ul class="marquee-content">
                            <li><img src="{{ asset('images/partners/finquesMontbui.jpeg') }}"></li>
                            <li><img src="{{ asset('images/partners/tecnoFincas.jpeg') }}"></li>
                            <li><img src="{{ asset('images/partners/empresa1.png') }}"></li>
                            <li><img src="{{ asset('images/partners/nto-transporte.jpeg') }}"></li>
                            <li><img src="{{ asset('images/partners/valles.png') }}"></li>
                            <li><img src="{{ asset('images/partners/codelearn.png') }}"></li>
                            <li><img src="{{ asset('images/partners/blaqus-seafood.png') }}"></li>
                            <li><img src="{{ asset('images/partners/collective.png') }}"></li>
                            <li><img src="{{ asset('images/partners/elowing.jpeg') }}"></li>
                            <li><img src="{{ asset('images/partners/mkpadel.png') }}"></li>
                            <li><img src="{{ asset('images/partners/opticalia.jpeg') }}"></li>
                            <li><img src="{{ asset('images/partners/pascualdisseny.jpeg') }}"></li>
                            <li><img src="{{ asset('images/partners/quintmar.png') }}"></li>
                        </ul>
                    </div>
                </a>
            </section>

            <!-- Latest blog posts-->
            <section class="section section-sm bg-default" id="news">
                <div class="container">
                    <h2 class="tecnodemo-novedades-margin">Últimas novedades</h2>
                    <div class="row row-45">
                        <div class="col-sm-6 col-lg-4 wow fadeInLeft">
                            <!-- Post Modern-->
                            <article class="post post-modern">
                                <a class="post-modern-figure" href="#"><img src="images/novedades/new1.png" alt="" width="370" height="307"/>
                                    <div class="post-modern-time">
                                        <time datetime="2023-08-04">
                                            <span style="font-size:28px;" class="post-modern-time-month">04</span>
                                            <span style="font-size:20px;" class="post-modern-time-month">08</span>
                                            <span style="font-size:20px;" class="post-modern-time-number">2023</span>
                                        </time>
                                    </div>
                                </a>
                                <h4 class="post-modern-title">
                                    <a href="#">Casal San Mauro</a>
                                </h4>
                                <p class="post-modern-text">Como es tradición anual, hemos tenido el honor de ser patrocinadores del Casal San Mauro. Un gesto de apoyo a las actividades y, sobre todo, una inversión en la sonrisa de los niños...</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".1s">
                            <!-- Post Modern-->
                            <article class="post post-modern">
                                <a class="post-modern-figure" href="#"><img src="images/novedades/new2.png" alt="" width="370" height="307"/>
                                    <div class="post-modern-time">
                                        <time datetime="2023-07-24">
                                            <span style="font-size:28px;" class="post-modern-time-month">24</span>
                                            <span style="font-size:20px;" class="post-modern-time-month">07</span>
                                            <span style="font-size:20px;" class="post-modern-time-number">2023</span>
                                        </time>
                                    </div>
                                </a>
                                <h4 class="post-modern-title">
                                    <a href="#">Reportaje en la Veu Anoia</a>
                                </h4>
                                <p class="post-modern-text">¡Estamos emocionados de compartir con vosotros un maravilloso reportaje que nos ha dedicado la Veu Anoia en honor a nuestro décimo aniversario...</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
                            <!-- Post Modern-->
                            <article class="post post-modern">
                                <a class="post-modern-figure" href="#"><img src="images/novedades/new3.png" alt="" width="370" height="307"/>
                                    <div class="post-modern-time">
                                        <time datetime="2023-06-15">
                                            <span style="font-size:28px;" class="post-modern-time-month">15</span>
                                            <span style="font-size:20px;" class="post-modern-time-month">06</span>
                                            <span style="font-size:20px;" class="post-modern-time-number">2023</span>
                                        </time>
                                    </div>
                                </a>
                                <h4 class="post-modern-title">
                                    <a href="#">¡Una década de innovación!</a>
                                </h4>
                                <p class="post-modern-text">El pasado 15 de Junio fue un día especial para nosotros en Tecnodemo Ibérica. Nos sentimos honrados y emocionados de haber participado en "La nit empresarial de l'Anoia...</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact information-->
            <section class="section section-sm bg-default">
                <div class="container">
                    <div class="row row-30 justify-content-center">
                        <div class="col-sm-8 col-md-6 col-lg-4">
                            <article class="box-contacts">
                                <div class="box-contacts-body">
                                    <a target="_blank" href="tel:931434915" class="box-contacts-icon fl-bigmug-line-cellphone55"></a>
                                    <div class="box-contacts-decor"></div>
                                    <p class="box-contacts-link">
                                        <a target="_blank" style="font-size:85%;" href="tel:931434915">+34 931 43 49 15<br/>&nbsp;</a>
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-8 col-md-6 col-lg-4">
                            <article class="box-contacts">
                                <div class="box-contacts-body">
                                    <a target="_blank" href="https://goo.gl/maps/FcWNJ2NCx58XnELD8" class="box-contacts-icon fl-bigmug-line-up104"></a>
                                    <div class="box-contacts-decor"></div>
                                    <p class="box-contacts-link">
                                        <a target="_blank" style="font-size:85%;" href="https://goo.gl/maps/FcWNJ2NCx58XnELD8">Carrer de França 34<br/>Igualada</a>
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-8 col-md-6 col-lg-4">
                            <article class="box-contacts">
                                <div class="box-contacts-body">
                                    <a target="_blank" href="mailto:info@tecnodemoiberica.com" class="box-contacts-icon fl-bigmug-line-chat55"></a>
                                    <div class="box-contacts-decor"></div>
                                    <p class="box-contacts-link">
                                        <a target="_blank" style="font-size:85%;" href="mailto:info@tecnodemoiberica.com">info@tecnodemoiberica.com<br/>&nbsp;</a>
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Form-->
            <section
                class="section section-sm section-last bg-default text-left"
                id="contacts">
                <div class="container tecnodemo-contacto-margin">
                    <article class="title-classic tecnodemo-contacto">
                        <div class="title-classic-title">
                            <h3>Danos un toque</h3>
                        </div>
                        <div class="title-classic-text">
                            <p class="tecnodemo-p-contacto">Si tienes alguna duda, llena el formulario de contacto y te contestaremos lo antes posible.</p>
                        </div>
                    </article>
                    <form
                        class="rd-form rd-form-variant-2 rd-mailform"
                        data-form-output="form-output-global"
                        data-form-type="contact"
                        method="post"
                        action="bat/rd-mailform.php">
                        <div class="row row-14 gutters-14">
                            <div class="col-md-4">
                                <div class="form-wrap">
                                    <input
                                        class="form-input"
                                        id="contact-your-name-2"
                                        type="text"
                                        name="name"
                                        data-constraints="@Required">
                                    <label class="form-label" for="contact-your-name-2">Tú nombre</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-wrap">
                                    <input
                                        class="form-input"
                                        id="contact-email-2"
                                        type="email"
                                        name="email"
                                        data-constraints="@Email @Required">
                                    <label class="form-label" for="contact-email-2">E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-wrap">
                                    <input
                                        class="form-input"
                                        id="contact-phone-2"
                                        type="text"
                                        name="phone"
                                        data-constraints="@Numeric">
                                    <label class="form-label" for="contact-phone-2">Teléfono</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message-2">Mensaje</label>
                                    <textarea
                                        class="form-input textarea-lg"
                                        id="contact-message-2"
                                        name="message"
                                        data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="button button-primary button-pipaluk" type="submit">Enviar mensaje</button>
                    </form>
                </div>
            </section>

            <!-- RD Google Map-->
            <iframe class="section" style="width:1502px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.8612835338436!2d1.6302817765738156!3d41.59388358316057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4427ba8759fcd%3A0xcc45c036af57f565!2sTecnodemo%20Iberica%20Mantenimiento%20y%20Servicios%20s.l.!5e0!3m2!1ses!2ses!4v1710979417946!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!--section class="section section-fluid">
                <section class="section">
                    <div
                        class="google-map-container"
                        data-center="6036 Richmond hwy., Alexandria, VA, 2230"
                        data-zoom="5"
                        data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                        <div class="google-map"></div>
                    </div>
                </section>
            </section-->

            <!-- Page Footer-->
            <footer class="section section-fluid footer-minimal context-dark tecnodemo-footer">
                <div class="bg-gray-15">
                    <div class="container-fluid">
                        <div class="footer-minimal-inset oh">
                            <ul class="footer-list-category-2">
                                <li>
                                    <a href="#">Servicios</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Partners</a>
                                </li>
                                <li>
                                    <a href="#">Aviso legal</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-minimal-bottom-panel text-sm-left">
                            <div class="row row-10 align-items-md-center">
                                <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                                    <div>
                                        <ul class="list-inline list-inline-sm footer-social-list-2">
                                            <li>
                                                <a class="icon fa fa-whatsapp" target="_blank" href="https://wa.me/34676016882"></a>
                                            </li>
                                            <li>
                                                <a class="icon fa fa-instagram" target="_blank" href="https://www.instagram.com/tecnodemo_iberica/"></a>
                                            </li>
                                            <li>
                                                <a class="icon fa fa-facebook" target="_blank" href="https://www.facebook.com/NetejesTecnodemoiberica"></a>
                                            </li>
                                            <li>
                                                <a class="icon fa fa-twitter" target="_blank" href="https://twitter.com/Tecnodemoiberic"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 order-sm-first">
                                    <!-- Rights-->
                                    <p class="rights">
                                        <span>&copy;&nbsp;</span>
                                        <span class="copyright-year"></span>
                                        <span>Todos los derechos reservados</span>
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-4 text-md-right">
                                    <span>Diseñado por Carlos Martín</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div
                class="modal fade"
                id="modalCta"
                tabindex="-1"
                role="dialog"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Contácto</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form
                                class="rd-form rd-form-variant-2 rd-mailform"
                                data-form-output="form-output-global"
                                data-form-type="contact-modal"
                                method="post"
                                action="bat/rd-mailform.php">
                                <div class="row row-14 gutters-14">
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input
                                                class="form-input"
                                                id="contact-modal-name"
                                                type="text"
                                                name="name"
                                                data-constraints="@Required">
                                            <label class="form-label" for="contact-modal-name">Tú nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input
                                                class="form-input"
                                                id="contact-modal-email"
                                                type="email"
                                                name="email"
                                                data-constraints="@Email @Required">
                                            <label class="form-label" for="contact-modal-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input
                                                class="form-input"
                                                id="contact-modal-phone"
                                                type="text"
                                                name="phone"
                                                data-constraints="@Numeric">
                                            <label class="form-label" for="contact-modal-phone">Teléfono</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <label class="form-label" for="contact-modal-message">Mensaje</label>
                                            <textarea
                                                class="form-input textarea-lg"
                                                id="contact-modal-message"
                                                name="message"
                                                data-constraints="@Required"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="button button-primary button-pipaluk" type="submit">Enviar mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- Javascript-->
        <script src="{{ asset('js/core.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <!-- coded by Himic-->
    </body>
</html>
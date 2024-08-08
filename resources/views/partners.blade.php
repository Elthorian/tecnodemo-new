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
        <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
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
                <section class="section section-sm section-bottom-70 section-fluid bg-default">
                    <div class="partners">
                        <div><img src="{{ asset('images/partners/a3comercial.png') }}"></div>
                        <div><img src="{{ asset('images/partners/alco.png') }}"></div>
                        <div><img src="{{ asset('images/partners/som-gestio.png') }}"></div>
                        <div><img src="{{ asset('images/partners/almazan-advocats.png') }}"></div>
                        <div><img src="{{ asset('images/partners/casal-estiu-san-mauro.png') }}"></div>
                        <div><img src="{{ asset('images/partners/casadepoble.png') }}"></div>
                        <div><img src="{{ asset('images/partners/central-lera-gestion.png') }}"></div>
                        <div><img src="{{ asset('images/partners/espadel.png') }}"></div>
                        <div><img src="{{ asset('images/partners/finques-gaudi.png') }}"></div>
                        <div><img src="{{ asset('images/partners/maser-services.png') }}"></div>
                        <div><img src="{{ asset('images/partners/joralfran.png') }}"></div>
                        <div><img src="{{ asset('images/partners/openclass.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/parkia.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/pastisseria-pla.png') }}"></div>
                        <div><img src="{{ asset('images/partners/recasens.png') }}"></div>
                        <div><img src="{{ asset('images/partners/remma.jpg') }}"></div>
                        <div><img src="{{ asset('images/partners/bird.png') }}"></div>
                        <div><img src="{{ asset('images/partners/la-passio-esparraguera.png') }}"></div>
                        <div><img src="{{ asset('images/partners/carmen-flores.png') }}"></div>
                        <div><img src="{{ asset('images/partners/dietflash.png') }}"></div>
                        <div><img src="{{ asset('images/partners/immobiliaria-la-llar.png') }}"></div>
                        <div><img src="{{ asset('images/partners/ondulados-carmen.png') }}"></div>
                        <div><img src="{{ asset('images/partners/bb-trends.png') }}"></div>
                        <div><img src="{{ asset('images/partners/asgv.png') }}"></div>
                        <div><img src="{{ asset('images/partners/finquesMontbui.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/empresa1.png') }}"></div>
                        <div><img src="{{ asset('images/partners/tecnoFincas.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/nto-transporte.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/valles.png') }}"></div>
                        <div><img src="{{ asset('images/partners/codelearn.png') }}"></div>
                        <div><img src="{{ asset('images/partners/blaqus-seafood.png') }}"></div>
                        <div><img src="{{ asset('images/partners/collective.png') }}"></div>
                        <div><img src="{{ asset('images/partners/elowing.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/mkpadel.png') }}"></div>
                        <div><img src="{{ asset('images/partners/opticalia.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/pascualdisseny.jpeg') }}"></div>
                        <div><img src="{{ asset('images/partners/quintmar.png') }}"></div>
                    </div>
                </section>
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
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    @include('layouts.common.header_script')

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WJH6LN7H');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JF29JB9QS7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JF29JB9QS7');
    </script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJH6LN7H" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="main-page-wrapper">
        <!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

        <!-- Add your site or application content here -->
        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->
        <!-- offcanvas start  -->
        <div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-header">
                <a data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fas fa-times search-close" id="search-close"></i>
                </a>
            </div>
            <div class="offcanvas-body">
                <!-- Fullscreen search -->
                <div class="search-wrap">
                    <form method="get">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </form>
                </div>
                <!-- end fullscreen search -->
            </div>
        </div>
        <!-- offcanvas end  -->

        <!-- header-area start -->
        <header class="theme-main-menu theme-menu-two pt-md-25 pt-40">
            <div class="top-header pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 text-start">
                            <div class="logo-area">
                                <a href="{{ route('home') }}"><img src="{{ asset('img/logo/header-logo-1.png') }}"
                                        alt="Header-logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6 text-end">
                            <ul class="right-nav mb-0 d-flex align-items-center justify-content-end">
                                <li class="search-area">
                                    <a class="search_input" href="#" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </li>
                                <li class="d-none d-lg-inline-block">
                                    <div class="hamburger-menu">
                                        <a class="round-menu" href="javascript:void(0);">
                                            <i class="bi bi-list"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header-area">
                <div class="container">
                    <div class="row gx-4 gx-xxl-5 align-items-center">
                        <div class="col-6 d-lg-none d-md-block">
                            <div class="hamburger-menu">
                                <a class="round-menu" href="javascript:void(0);">
                                    <i class="bi bi-list"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav list-none ps-0 mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('service') }}">Layanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team') }}">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team') }}">Faq</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-6 text-end">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav list-none ps-0 mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team') }}">Portofolio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team') }}">Tim</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.theme-main-menu -->
        </header>
        <!-- header-area end -->

        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar">
                <div class="offset-widget offset-logo mb-30">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo/header-logo-1.png') }}" alt="logo">
                    </a>
                </div>
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20">Tentang Kami</h4>
                        <p class="mb-30">Di Recodex, kami percaya pada kekuatan transformasi digital untuk mengangkat
                            bisnis ke tingkat yang lebih tinggi. Sebagai penyedia layanan pengembangan website
                            terkemuka, kami berspesialisasi dalam menciptakan solusi digital khusus yang disesuaikan
                            dengan kebutuhan Anda.</p>
                    </div>
                </div>
                <div class="offset-widget mb-30 pr-10">
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Info Kontak</h4>
                        <p>
                            <i class="fal fa-address-book"></i>
                            Gg. Nangka No.10, RT.3/RW.7, Halim Perdana Kusumah
                        </p>
                        <p>
                            <i class="fal fa-phone"></i>
                            (+62) 822 9814 1940
                        </p>
                        <p>
                            <i class="fal fa-envelope-open"></i>
                            sales@recodex.id
                        </p>
                    </div>
                </div>
                <!--
                <div class="login-btn text-center">
                    <a class="theme_btn w-100" href="login.html">Login</a>
                </div>
                -->
            </div>
            <!-- offset-sidebar end -->
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('service') }}">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('team') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Faq</a>
                    </li>
                    <li>
                        <a href="{{ route('team') }}">Portofolio</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Tim</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        <main>

            @yield('content')

        </main>

        <!--footer-area start-->

        <footer id="contact" class="gradient-bg footer-area theme-footer-two pt-95 pb-80 pb-lg-10">
            <img class="footer-shape shape-1b" src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
            <img class="footer-shape shape-2b d-none d-lg-inline-block" src="{{ asset('img/shape/star-4b.svg') }}"
                alt="shape">
            <img class="footer-shape shape-3b" src="{{ asset('img/shape/star-6.svg') }}" alt="shape">
            <img class="footer-shape shape-4b d-none d-lg-inline-block" src="{{ asset('img/shape/star-5b.svg') }}"
                alt="shape">
            <img class="footer-shape shape-5b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
            <img class="fot-shape-one" src="{{ asset('img/shape/line-round-7b.svg') }}" alt="footer shape">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 mb-10">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="footer__widget mb-40 ps-xxl-4">
                            <h4 class="widget-title mb-35">Info Kontak</h4>
                            <ul class="fot-list">
                                <li>
                                    <a href="#">sales@recodex.id</a>
                                </li>
                                <li>
                                    <a href="#">(+62) 822 9814 1940</a>
                                </li>
                                <li>
                                    <a href="#">Gg. Nangka No.10, RT.3/RW.7, Halim Perdana Kusumah</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 ps-xxl-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="footer__widget mb-40 px-xxl-5">
                            <h4 class="widget-title mb-35">Konsultasi</h4>
                            <p class="fs-17 mb-0 pb-20">
                                Mari kita bekerja sama untuk merancang ulang masa depan brand anda
                            </p>
                            <form class="sub-form" action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="bi bi-arrow-right"></i></button>
                            </form>
                            <div class="footer__social mb-30">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/recodex.id/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="footer__widget mb-40">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d495.74742613934603!2d106.88181322440913!3d-6.266438124859013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1709830529794!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row gx-4 gx-xxl-5 copyright-two align-items-center">
                    <div class="col-xl-5 col-md-5">
                        <ul class="fot-list d-flex align-items-center justify-content-center justify-content-md-start">
                            <li>
                                <a href="https://recodex.id/">Recodex.id</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-2 text-center">
                        <div class="footer__logo mb-25">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('img/logo/header-logo-1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-5 text-center text-md-end">
                        <p class="text-white mb-20 pe-xl-3">
                            <a href="https://recodex.id/">Recodex</a>
                            © 2024, All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-area end-->
    </div>

    <!-- JS here -->
    @include('layouts.common.footer_script')

</body>

</html>

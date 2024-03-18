@extends('layouts.master')

@section('content')
    <!--theme-banner-two start-->
    <div class="theme-banner-two pt-220 pb-230 pt-lg-120 pt-md-80 pt-xs-60 pb-sm-120">
        <img class="banner-shape shape-one " src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="banner-shape shape-two" src="{{ asset('img/shape/star-4b.svg') }}" alt="shape">
        <img class="banner-shape shape-three d-none d-lg-inline-block" src="{{ asset('img/shape/star-2.svg') }}"
            alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-7">
                    <div class="theme__content__two text-md-start text-center">
                        <h4 class="hero-sub-title mb-25">Buat Website Anda Bersama Kami!</h4>
                        <h1 class="main-title-two">
                            <span>Recode</span>
                            <br>
                            <span>Innovate</span>
                            <br>
                            <span>Transform</span>
                        </h1>
                        <a class="theme_btn" href="{{ route('website') }}">Buat Website</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-img-wrapper">
            <img class="hero-img img-1" src="{{ asset('img/hero/hero-home1.jpg') }}" alt="img">
            <img class="hero-img img-2" src="{{ asset('img/hero/hero-home2.jpg') }}" alt="img">
            <img class="hero-img arrow-1" src="{{ asset('img/shape/arrow-1b.svg') }}" alt="icon">
            <img class="hero-img arrow-2" src="{{ asset('img/shape/arrow-2b.svg') }}" alt="icon">
            <img class="hero-img arrow-3" src="{{ asset('img/shape/arrow-3b.svg') }}" alt="icon">
            <div class="hero-box">
                <span class="icon">
                    <img src="{{ asset('img/icon/icon-13b.svg') }}" alt="icon">
                </span>
                <div class="box">
                    <span class="text-theme"><span class="counter">24</span>+</span>
                    Website yang dibuat
                </div>
            </div>
            <div class="hero-box-two">
                <div class="icon">
                    <img src="{{ asset('img/icon/icon-14b.svg') }}" alt="icon">
                </div>
                <div class="box">
                    <span class="text-theme"><span class="counter">16</span>+</span>
                    Klien yang puas
                </div>
            </div>
        </div>
    </div>
    <!--theme-banner-two end-->

    <!--brand-area start-->
    <!-- <section class="brand-area brand-bg pt-25 pb-25 mt-1">
                                                                                                                                                                                                                                                                    <div class="container">
                                                                                                                                                                                                                                                                        <div class="row gx-4 gx-xxl-5">
                                                                                                                                                                                                                                                                            <div class="brand-slider-one">
                                                                                                                                                                                                                                                                                <div class="brand-logo">
                                                                                                                                                                                                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-1.svg') }}" alt="brand"></a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="brand-logo">
                                                                                                                                                                                                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-2.svg') }}" alt="brand"></a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="brand-logo">
                                                                                                                                                                                                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-3.svg') }}" alt="brand"></a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="brand-logo">
                                                                                                                                                                                                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-4.svg') }}" alt="brand"></a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="brand-logo">
                                                                                                                                                                                                                                                                                    <a href="#"><img src="{{ Asset('img/brand/brand-5.svg') }}" alt="brand"></a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="brand-logo">
                                                                                                                                                                                                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-6.svg') }}" alt="brand"></a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </section>
                                                                                                                                                                                                                                            <!--brand-area end-->

    <!--techy-feature start-->
    <section class="techy-feature pt-150 pb-30 pt-lg-120">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="{{ asset('img/icon/icon-15b.svg') }}" alt="icon" height="80">
                        </div>
                        <h3>
                            <a class="sect-title-two" href="{{ route('about') }}">Keahlian</a>
                        </h3>
                        <p>Dengan pengalaman bertahun-tahun di industri ini, tim kami memiliki keahlian untuk menangani
                            proyek yang paling rumit sekalipun. Kami selalu menjadi yang terdepan, memastikan website Anda
                            dibuat menggunakan teknologi terkini dan praktik terbaik.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="{{ asset('img/icon/icon-16b.svg') }}" alt="icon" height="80">
                        </div>
                        <h3>
                            <a class="sect-title-two" href="{{ route('about') }}">Inovasi</a>
                        </h3>
                        <p>Inovasi adalah inti dari semua yang kami lakukan. Kami terus mengeksplorasi tren dan teknologi
                            baru untuk memastikan website Anda menonjol di semua platform digital yang ramai.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8" data-aos="fade-rup" data-aos-delay="200">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="{{ asset('img/icon/icon-17b.svg') }}" alt="icon"
                                height="80">
                        </div>
                        <h3>
                            <a class="sect-title-two" href="{{ route('about') }}">Kualitas</a>
                        </h3>
                        <p>Kualitas adalah prioritas utama kami. Dari konsep awal hingga pengiriman akhir, kami menjunjung
                            standar kualitas dan pengerjaan tertinggi, memastikan website Anda melebihi ekspektasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--techy-feature end-->

    <!--about-techy start-->
    <section class="about-techy-two pt-75 pb-105 pt-lg-40 pb-lg-20 pt-md-30 pb-md-15">
        <img class="about-shape shape-1b" src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="about-shape shape-2b" src="{{ asset('img/shape/star-4b.svg') }}" alt="shape">
        <img class="about-shape shape-3b d-none d-md-inline-block" src="{{ asset('img/shape/star-2.svg') }}"
            alt="shape">
        <img class="about-shape shape-4b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xxl-5 col-xl-4 col-md-6 order-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-img-wrapper-two text-lg-end position-relative mb-45">
                        <img class="main-img w-100" src="{{ asset('img/about/about-home.jpg') }}" alt="img">
                        <img class="shape-one" src="{{ asset('img/shape/line-round-4a.svg') }}" alt="shape">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-6  order-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-style-three mb-45">
                        <h6 class="sub-title mb-20">Tentang Kami</h6>
                        <h2 class="sect-title mb-15">Mitra Anda dalam Inovasi Digital</h2>
                        <p>Di Recodex, kami percaya pada kekuatan transformasi digital untuk mengangkat bisnis ke tingkat
                            yang lebih tinggi. Sebagai penyedia layanan pengembangan website terkemuka, kami berspesialisasi
                            dalam menciptakan solusi digital khusus yang disesuaikan dengan kebutuhan Anda.</p>
                        <a class="theme_btn mt-55" href="{{ route('about') }}">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 order-3" data-aos="fade-left" data-aos-delay="100">
                    <ul class="list-none count-list">
                        <li>
                            <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-30">
                                <h3><span class="counter">24</span>+</h3>
                                <p class="text-white">Website yang Dibuat</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-30">
                                <h3><span class="counter">16</span>+</h3>
                                <p class="text-white">Klien yang Puas</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-30">
                                <h3><span class="counter">30</span>+</h3>
                                <p class="text-white">Klien Meninjau Website Kami</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--about-techy end-->

    <!--teachy-price start-->
    <section id="price" class="techy-price price-bg pt-50 pb-50 pt-lg-60">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h3 class="sect-title mb-25" data-aos="fade-up">Harga Terbaik Jasa Pembuatan Website</h3>
                        <p data-aos="fade-up" data-aos-delay="100">Kami siap membantu mengembangkan bisnis anda di
                            internet!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="plan mb-45">
                        <div class="plan__header">
                            <h3>Personal</h3>
                            <p>Cocok untuk personal branding atau blog Anda</p>
                        </div>
                        <div class="plan__price">
                            <sub>Rp</sub>
                            2,999,000
                        </div>
                        <div class="plan__btn">
                            <a class="price-btn" href="#">Pilih Paket</a>
                        </div>
                        <ul class="plan__body list-none">
                            <li>3 Halaman</li>
                            <li>Performa Standar</li>
                            <li>Domain Gratis (senilai Rp147.900)</li>
                            <li>Hosting Gratis</li>
                            <li>10 Email Bisnis</li>
                            <li>Backup Mingguan</li>
                            <li>SSL Gratis Unlimited</li>
                            <li>SEO Friendly</li>
                            <li>1x Maintenance Gratis</li>
                            <li>Google Index</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="plan mb-45">
                        <div class="plan__header">
                            <h3>Bisnis</h3>
                            <p>Paket lengkap untuk bisnis, portal berita, atau toko online</p>
                        </div>
                        <div class="plan__price">
                            <sub>Rp</sub>
                            4,899,000
                        </div>
                        <div class="plan__btn">
                            <a class="price-btn" href="#">Pilih Paket</a>
                        </div>
                        <ul class="plan__body list-none">
                            <li>5 Halaman</li>
                            <li>Performa Meningkat (hingga 5x)</li>
                            <li>Domain Gratis (senilai Rp147.900)</li>
                            <li>Hosting Gratis</li>
                            <li>15 Email Bisnis</li>
                            <li>Backup Harian (senilai Rp274.020)</li>
                            <li>SSL Gratis Unlimited</li>
                            <li>SEO Friendly</li>
                            <li>2x Maintenance Gratis</li>
                            <li>Google Index & Analytics</li>
                            <li>CDN Gratis</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="plan mb-45">
                        <div class="plan__header">
                            <h3>Premium</h3>
                            <p>Performa website yang lebih optimal & powerful resource</p>
                        </div>
                        <div class="plan__price">
                            <sub>Rp</sub>
                            7,499,000
                        </div>
                        <div class="plan__btn">
                            <a class="price-btn" href="#">Pilih Paket</a>
                        </div>
                        <ul class="plan__body list-none">
                            <li>12 Halaman</li>
                            <li>Performa Maksimal (hingga 10x)</li>
                            <li>Domain Gratis (senilai Rp147.900)</li>
                            <li>Hosting Gratis</li>
                            <li>Email Bisnis Gratis</li>
                            <li>Backup Harian (senilai Rp274.020)</li>
                            <li>SSL Gratis Unlimited</li>
                            <li>SEO Friendly</li>
                            <li>3x Maintenance Gratis</li>
                            <li>Google Index & Analytics</li>
                            <li>CDN Gratis</li>
                            <li>Bandwith Unlimited</li>
                            <li>Alamat IP Dedicated</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--teachy-price end-->

    <!--our-services start-->
    <section class="our-services service-bg-two pt-95 pb-50 pt-lg-50 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-55">
                        <h3 class="sect-title mb-25" data-aos="fade-up">Layanan</h3>
                        <p data-aos="fade-up" data-aos-delay="100">Temukan kebutuhan pelayanan terbaik kami di sini dan
                            percayakan semuanya kepada kami!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-18b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="{{ route('website') }}">Pembuatan Website</a>
                        </h2>
                        <p>Dari desain yang sederhana hingga fungsionalitas yang lancar, kami menciptakan website yang
                            meninggalkan kesan mendalam. Tim kami bekerja tanpa kenal lelah untuk memastikan website Anda
                            mencerminkan identitas unik merek Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-19b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="{{ route('hosting') }}">Solusi Hosting</a>
                        </h2>
                        <p>Solusi hosting kami dirancang untuk memberi Anda keandalan dan keamanan yang dibutuhkan situs web
                            Anda. Dengan Recodex, Anda dapat yakin bahwa website Anda berada di tangan yang aman.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-20b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="{{ route('domain') }}">Pendaftaran Domain</a>
                        </h2>
                        <p>Temukan nama domain yang sempurna untuk bisnis Anda dengan layanan pendaftaran domain kami. Tim
                            kami akan membantu Anda mendapatkan domain yang selaras dengan merek Anda dan membedakan Anda
                            dari pesaing.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-21b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="{{ route('services') }}">Website Toko Online</a>
                        </h2>
                        <p>Siapkan toko online Anda dengan mudah dan mulailah menjual produk atau layanan Anda secara
                            online. Solusi Website Toko Online kami dirancang untuk memaksimalkan penjualan Anda dan
                            meningkatkan pengalaman berbelanja pelanggan Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-22b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="{{ route('services') }}">Desain UI/UX</a>
                        </h2>
                        <p>Ciptakan pengalaman pengguna yang lancar dan intuitif dengan layanan desain UI/UX kami. Kami
                            fokus pada pembuatan antarmuka yang tidak hanya menarik secara visual tetapi juga sangat
                            fungsional dan mudah dinavigasi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-23b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="{{ route('services') }}">Pemrograman</a>
                        </h2>
                        <p>Jika Anda memerlukan aplikasi web khusus atau solusi backend yang kompleks, tim pemrogram ahli
                            kami siap membantu Anda. Kami menggunakan bahasa pemrograman dan kerangka kerja terbaru untuk
                            memastikan website Anda cepat, aman, dan terukur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our-services end-->

    <!--latest-case-work start-->
    <section class="latest-case-work pt-145 pb-150 pt-lg-60 pb-lg-120">
        <img class="case-shape shape-1b d-none d-lg-inline-block" src="{{ asset('img/shape/star-3b.svg') }}"
            alt="shape">
        <img class="case-shape shape-2b d-none d-lg-inline-block" src="{{ asset('img/shape/star-4b.svg') }}"
            alt="shape">
        <img class="case-shape shape-3b d-none d-lg-inline-block" src="{{ asset('img/shape/star-2.svg') }}"
            alt="shape">
        <img class="case-shape shape-4b d-none d-lg-inline-block" src="{{ asset('img/shape/star-5b.svg') }}"
            alt="shape">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title mb-55 text-md-start text-center">
                        <h6 class="sub-title mb-20" data-aos="fade-up">Portofolio</h6>
                        <h3 class="sect-title mb-25" data-aos="fade-up" data-aos-delay="100">Lihat beberapa
                            portofolio terbaik kami</h3>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center pb-40">
                    <div class="slick-nav">
                        <div class="prev_p1 mr-20">
                            <i class="bi bi-chevron-left"></i>
                        </div>
                        <div class="next_p1">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row case-slider-one" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4">
                    <div class="case-item-one">
                        <div class="case-thumb">
                            <img class="w-100" src="{{ asset('img/work/case-1b.jpg') }}" alt="img">
                        </div>
                        <div class="case-content">
                            <span>Web Development</span>
                            <h3><a class="sect-title-two" href="https://alfa5aviation.com">Alfa5 Aviation</a></h3>
                            <p>Membuat Website Profil Perusahaan untuk Alfa5 Aviation.</p>
                            <a class="case-btn" href="https://alfa5aviation.com"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-item-one">
                        <div class="case-thumb">
                            <img class="w-100" src="{{ asset('img/work/case-pjci.jpg') }}" alt="img">
                        </div>
                        <div class="case-content">
                            <span>Web Development</span>
                            <h3><a class="sect-title-two" href="https://privatejetcharter.id">Private Jet Charter
                                    Indonesia</a>
                            </h3>
                            <p>Membuat Website Profil Perusahaan untuk Private Jet Charter Indonesia.</p>
                            <a class="case-btn" href="https://privatejetcharter.id"><i
                                    class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-item-one">
                        <div class="case-thumb">
                            <img class="w-100" src="{{ asset('img/work/case-b5.jpg') }}" alt="img">
                        </div>
                        <div class="case-content">
                            <span>Web Development</span>
                            <h3><a class="sect-title-two" href="https://b5inflightcatering.com">Berlima Inflight
                                    Catering</a>
                            </h3>
                            <p>Membuat Website Profil Perusahaan untuk Berlima Inflight Catering.</p>
                            <a class="case-btn" href="https://b5inflightcatering.com"><i
                                    class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-item-one">
                        <div class="case-thumb">
                            <img class="w-100" src="{{ asset('img/work/case-bgs.jpg') }}" alt="img">
                        </div>
                        <div class="case-content">
                            <span>Web Development</span>
                            <h3><a class="sect-title-two" href="https://berlianflightsupport.com">Berlian Ground
                                    Support</a></h3>
                            <p>Membuat Website Profil Perusahaan untuk Berlian Ground Support.</p>
                            <a class="case-btn" href="https://berlianflightsupport.com"><i
                                    class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-item-one">
                        <div class="case-thumb">
                            <img class="w-100" src="{{ asset('img/work/case-1b.jpg') }}" alt="img">
                        </div>
                        <div class="case-content">
                            <span>Web Development</span>
                            <h3><a class="sect-title-two" href="https://alfalimasatu.id">Alfalimasatu</a></h3>
                            <p>Membuat Website Profil Perusahaan untuk Alfalimasatu.</p>
                            <a class="case-btn" href="https://alfalimasatu.id"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-item-one">
                        <div class="case-thumb">
                            <img class="w-100" src="{{ asset('img/work/case-1b.jpg') }}" alt="img">
                        </div>
                        <div class="case-content">
                            <span>Web Development</span>
                            <h3><a class="sect-title-two" href="https://blueverizon.com">Blueverizon</a></h3>
                            <p>Membuat Website Profil Perusahaan untuk Blueverizon.</p>
                            <a class="case-btn" href="https://blueverizon.com"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest-case-work end-->

    <!--techy-team start-->
    <section class="gradient-bg techy-team pt-210 pt-lg-180 pt-sm-60 pb-100 pb-lg-55">
        <img class="team-shape shape-1b" src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="team-shape shape-2b" src="{{ asset('img/shape/star-4b.svg') }}" alt="shape">
        <img class="team-shape shape-3b" src="{{ asset('img/shape/star-2.svg') }}" alt="shape">
        <img class="team-shape shape-4b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="team-shape shape-5b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="team-shape shape-6b" src="{{ asset('img/shape/line-round-6b.svg') }}" alt="shape">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="sub-title mb-20">Tim</h6>
                        <h2 class="sect-title">Anggota Tim Ahli</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-one text-center mb-45">
                        <a href="#"><img src="{{ asset('img/team/team-zachran.jpg') }}" alt="img"></a>
                        <div class="team-content">
                            <p>Front-End Developer</p>
                            <h3 class="sect-title-two"><a href="#">Zachran Razendra</a></h3>
                            <div class="team-social">
                                <a href="https://www.instagram.com/zachranraze/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-one text-center mb-45">
                        <a href="#"><img src="{{ asset('img/team/team-taufiq.jpg') }}" alt="img"></a>
                        <div class="team-content">
                            <p>Back-End Developer</p>
                            <h3 class="sect-title-two"><a href="#">M.Taufiq Shidiq</a></h3>
                            <div class="team-social">
                                <a href="https://www.instagram.com/shantaufiq/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-one text-center mb-45">
                        <a href="#"><img src="{{ asset('img/team/team-taufiq.jpg') }}" alt="img"></a>
                        <div class="team-content">
                            <p>Project Manager</p>
                            <h3 class="sect-title-two"><a href="#">Michael Patriot Napitupulu</a></h3>
                            <div class="team-social">
                                <a href="https://www.instagram.com/michaelnapitupuluu/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12 text-center pt-15" data-aos="fade-up" data-aos-delay="200">
                    <a class="theme_btn" href="{{ route('team') }}">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    <!--techy-team end-->
@endsection

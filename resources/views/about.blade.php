@extends('layouts.master')

@section('content')
    <!--page-title-area start-->
    <div class="page-title-area pt-210 pb-150 pt-lg-120 pb-lg-125 pb-md-100">
        <img class="page-title-shape shape-one " src="{{ asset('img/shape/star-10d.svg') }}" alt="shape">
        <img class="page-title-shape shape-three" src="{{ asset('img/shape/star-2.svg') }}" alt="shape">
        <img class="page-title-shape shape-four d-none d-md-inline-block " src="{{ asset('img/shape/star-4b.svg') }}"
            alt="shape">
        <img class="page-title-shape shape-five d-none d-lg-inline-block " src="{{ asset('img/shape/line-round-9d.svg') }}"
            alt="shape">
        <img class="page-title-shape shape-six" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="page-title-shape shape-seven" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="page-title-shape shape-eight d-none d-xl-inline-block" src="{{ asset('img/page-title/img-01.png') }}"
            alt="img">
        <img class="page-title-shape shape-nine d-none d-xl-inline-block" src="{{ asset('img/page-title/img-02.png') }}"
            alt="img">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-20">Tentang Kami</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li class="active" aria-current="page">Tentang Kami</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!--techy-feature start-->
    <section class="techy-feature pt-150 pt-lg-100 pb-30 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="{{ asset('img/icon/icon-15b.svg') }}" alt="icon"></div>
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
                        <div class="icon"><img src="{{ asset('img/icon/icon-16b.svg') }}" alt="icon"></div>
                        <h3>
                            <a class="sect-title-two" href="{{ route('about') }}">Inovasi</a>
                        </h3>
                        <p>Inovasi adalah inti dari semua yang kami lakukan. Kami terus mengeksplorasi tren dan teknologi
                            baru untuk memastikan website Anda menonjol di semua platform digital yang ramai.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8" data-aos="fade-rup" data-aos-delay="200">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="img/icon/icon-17b.svg" alt="icon"></div>
                        <h3>
                            <a class="sect-title-two" href="{{ route('about') }}">Kualitas</a>
                        </h3>
                        <p>Kualitas adalah prioritas utama kami. Dari konsep awal hingga pengiriman akhir, kami menjunjung
                            standar kualitas dan pengerjaan tertinggi, memastikan website Anda melebihi ekspekta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--techy-feature end-->

    <!--about-techy start-->
    <section class="about-techy about-techy-4d pt-140 pb-75 pt-lg-60 pb-lg-15">
        <img class="about-shape-4d shape-1b d-none d-xl-inline-block" src="{{ asset('img/shape/star-3b.svg') }}"
            alt="shape">
        <img class="about-shape-4d shape-2b d-none d-lg-inline-block" src="{{ asset('img/shape/star-4b.svg') }}"
            alt="shape">
        <img class="about-shape-4d shape-3b d-none d-md-inline-block" src="{{ asset('img/shape/star-4b.svg') }}"
            alt="shape">
        <img class="about-shape-4d shape-4b d-none d-md-inline-block" src="{{ asset('img/shape/star-7c.svg') }}"
            alt="shape">
        <img class="about-shape-4d shape-5b d-none d-xl-inline-block" src="{{ asset('img/shape/star-4b.svg') }}"
            alt="shape">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                    <div class="about-img-wrapper-four position-relative mb-45">
                        <img class="main-img" src="{{ asset('img/about/about-3d.png') }}" alt="img">
                        <img class="main-img-two d-none d-xl-inline-block" src="{{ asset('img/about/about-4d.png') }}"
                            alt="img">
                        <img class="shape-one" src="{{ asset('img/shape/line-round-2a.svg') }}" alt="shape">
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
                    <div class="block-style-one pl-lg-20 mb-45">
                        <h2 class="mb-15">Tentang Kami</h2>
                        <p>Di Recodex, kami percaya pada kekuatan transformasi digital untuk mengangkat bisnis ke tingkat
                            yang lebih tinggi. Sebagai penyedia layanan pengembangan website terkemuka, kami berspesialisasi
                            dalam menciptakan solusi digital khusus yang disesuaikan dengan kebutuhan Anda.</p>
                        <ul class="block-box box-two list-none">
                            <li>
                                <a href="#">
                                    <span class="img-bg"><img src="{{ asset('img/icon/icon-1a.svg') }}"
                                            alt="icon"></span>
                                    <span>Proses Cepat</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="img-bg"><img src="{{ asset('img/icon/icon-2a.svg') }}"
                                            alt="icon"></span>
                                    <span>Dukungan Online 24/7</span>
                                </a>
                            </li>
                        </ul>
                        <a class="theme_btn mt-60" href="price">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-techy end-->

    <!--counter-area end-->
    <section class="counter-area pt-70 pb-100 pt-lg-25 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                    <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-45">
                        <h3><span class="counter">24</span>+</h3>
                        <p class="text-white">Website yang Dibuat</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-45">
                        <h3><span class="counter">16</span>+</h3>
                        <p class="text-white">Klien yang Puas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-45">
                        <h3><span class="counter">30</span>+</h3>
                        <p class="text-white">Klien Meninjau Website Kami</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-45">
                        <h3><span class="counter">100</span>%</h3>
                        <p class="text-white">Layanan Terbaik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter-area start-->

    <!--techy-team start-->
    <section class="gradient-bg techy-team team-sec-two mt-0 pt-95  pb-90 pt-lg-55 pb-lg-60">
        <img class="team-shape shape-1b" src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="team-shape shape-2b" src="{{ asset('img/shape/star-4b.svg') }}" alt="shape">
        <img class="team-shape shape-3b" src="{{ asset('img/shape/star-6b.svg') }}" alt="shape">
        <img class="team-shape shape-4b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="team-shape shape-5b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="team-shape shape-6b" src="{{ asset('img/shape/line-round-6b.svg') }}" alt="shape">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12">
                    <div class="section-title-two text-center mb-55">
                        <h6 class="sub-title mb-20">Tim</h6>
                        <h2 class="sect-title">Anggota Tim Ahli</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-two text-center mb-45">
                        <div class="team-thumb">
                            <a href="#"><img src="{{ asset('img/team/team-zachran.jpg') }}" alt="img"></a>
                            <div class="team-social-two">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content">
                            <p>Front-End Developer</p>
                            <h3 class="sect-title-two"><a href="#">Zachran Razendra</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-two text-center mb-45">
                        <div class="team-thumb">
                            <a href="#"><img src="{{ asset('img/team/team-taufiq.jpg') }}" alt="img"></a>
                            <div class="team-social-two">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content">
                            <p>Back-End Developer</p>
                            <h3 class="sect-title-two"><a href="#">M. Taufiq Shidiq</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-two text-center mb-45">
                        <div class="team-thumb">
                            <a href="#"><img src="{{ asset('img/team/team-nabila.jpg') }}" alt="img"></a>
                            <div class="team-social-two">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content">
                            <p>Project Manager</p>
                            <h3 class="sect-title-two"><a href="#">Michael Patriot Napitupulu</a></h3>
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

    <!--teachy-price start-->
    <section id="price" class="techy-price price-bg pt-150 pb-50 pt-lg-60">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12">
                    <div class="section-title-two text-center mb-30 pb-1">
                        <h6 class="sub-title mb-20">Daftar Harga</h6>
                        <h2 class="sect-title">Harga Terbaik Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12 text-center mb-60">
                    <ul class="nav nav-tabs price-tab" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Pembuatan
                                Website
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row gx-4 gx-xxl-5">
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Personal</h3>
                                    <p>Paket ini cocok untuk pemula yang membutuhkan website sederhana untuk memperkenalkan
                                        bisnisnya secara online.</p>
                                </div>
                                <div class="plan__price">
                                    IDR 2,500,000
                                </div>
                                <ul class="plan__body list-none">
                                    <li>5 pages</li>
                                    <li>Responsive Design</li>
                                    <li>Social Media Integration</li>
                                    <li>Basic SEO Optimization</li>
                                    <li>1 Month Free Hosting</li>
                                </ul>
                                <div class="plan__footer">
                                    <a class="price-btn" href="#">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Premium</h3>
                                    <p>Paket ini cocok untuk bisnis menengah yang menginginkan website lebih lengkap dengan
                                        fitur tambahan seperti galeri foto atau video.</p>
                                </div>
                                <div class="plan__price">
                                    IDR 5,000,000
                                </div>
                                <ul class="plan__body list-none">
                                    <li>10 pages</li>
                                    <li>Responsive design</li>
                                    <li>Social Media Integration</li>
                                    <li>Contact Form</li>
                                    <li>Photo or Video Gallery</li>
                                    <li>Advanced SEO Optimization</li>
                                    <li>2 months Free Hosting</li>
                                </ul>
                                <div class="plan__footer">
                                    <a class="price-btn" href="#">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Bisnis</h3>
                                    <p>Paket ini cocok untuk bisnis yang mencari website berfitur lengkap, termasuk blog
                                        atau berita untuk interaksi lebih aktif dengan pengunjung.</p>
                                </div>
                                <div class="plan__price">
                                    IDR 7,500,000
                                </div>
                                <ul class="plan__body list-none">
                                    <li>15 pages</li>
                                    <li>Responsive DEsign</li>
                                    <li>Social Media Integration</li>
                                    <li>Contact Form</li>
                                    <li>Photo or Video Gallery</li>
                                    <li>Blog or News Section</li>
                                    <li>Full SEO Optimization</li>
                                    <li>3 Months Free Hosting</li>
                                </ul>
                                <div class="plan__footer">
                                    <a class="price-btn" href="#">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--teachy-price end-->

    <!--techy-newsletter start-->
    <section class="techy-newsletter pt-120 pb-95 pt-md-20">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="block-style-two text-center">
                        <img class="news-shape-one" src="{{ asset('img/shape/line-round-3a.svg') }}" alt="shape">
                        <h3>Buat Websita Anda Bersama Kami!</h3>
                        <a href="#" class="theme_btn">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--techy-newsletter end-->
@endsection

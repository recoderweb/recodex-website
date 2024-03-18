@extends('layouts.master')

@section('content')
    <!--theme-banner-two start-->
    <div class="theme-banner-three pt-100 pb-155 pt-lg-120 pb-lg-100 pt-md-80 pb-md-40">
        <img class="banner-shape shape-one d-none d-sm-inline-block" src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="banner-shape shape-three d-none d-sm-inline-block" src="{{ asset('img/shape/star-2.svg') }}"
            alt="shape">
        <img class="banner-shape shape-four d-none d-md-inline-block " src="{{ asset('img/shape/star-4b.svg') }}"
            alt="shape">
        <img class="banner-shape shape-five" src="{{ asset('img/shape/star-7c.svg') }}" alt="shape">
        <img class="banner-shape shape-six d-none d-xl-inline-block" src="{{ asset('img/hero/hero-shape-3a.svg') }}"
            alt="shape">
        <img class="banner-shape shape-seven d-none d-xl-inline-block" src="{{ asset('img/hero/hero-shape-3b.svg') }}"
            alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="theme__content__two text-md-start text-center mb-45">
                        <h4 class="hero-sub-title mb-25">Solusi hosting terpercaya bersama kami!</h4>
                        <h1 class="main-title-two">
                            Solusi Hosting
                            <br />
                            Website
                            <span>Terpercaya</span>
                        </h1>
                        <p class="mb-45">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam ad, eos
                            veritatis tenetur fuga molestiae praesentium beatae nihil enim blanditiis nam expedita! Repellat
                            placeat voluptates, cupiditate quos qui natus excepturi?</p>
                        <a class="theme_btn" href="contact.html">Mulai Sekarang</a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div data-tilt class="hero-ilustration-wrapper mb-45">
                        <img src="{{ asset('img/hero/hero-3c.svg') }}" alt="ilus">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--theme-banner-two end-->

    <!--our-services start-->
    <section class="service-details-wrapper pt-100 pb-100 pt-lg-60 pb-lg-20">
        <div class="container">

            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-10 col-md-8">
                    <div class="section-title text-center mb-35">
                        <h3 class="sect-title mb-25">Harga Paket Hosting</h3>
                    </div>
                </div>
            </div>

            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12 text-center mb-60">
                    <ul class="nav nav-tabs price-tab" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Bulanan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Tahunan</button>
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
                                    <p>For most businesses that want to the otpimize web queries</p>
                                </div>
                                <div class="plan__btn">
                                    <a class="price-btn" href="#">Choose Plan</a>
                                </div>
                                <div class="plan__price">
                                    Rp 250.000
                                    <sub>/bln</sub>
                                </div>
                                <ul class="plan__body list-none">
                                    <li>All limited links</li>
                                    <li>Own analytics platform</li>
                                    <li>Chat support</li>
                                    <li>Optimize hashtags</li>
                                    <li>Unlimited users</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Premium</h3>
                                    <p>For most businesses that want to the otpimize web queries</p>
                                </div>
                                <div class="plan__btn">
                                    <a class="price-btn" href="#">Choose Plan</a>
                                </div>
                                <div class="plan__price">
                                    Rp 500.000
                                    <sub>/bln</sub>
                                </div>
                                <ul class="plan__body list-none">
                                    <li>All limited links</li>
                                    <li>Own analytics platform</li>
                                    <li>Chat support</li>
                                    <li>Optimize hashtags</li>
                                    <li>Unlimited users</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Bisnis</h3>
                                    <p>For most businesses that want to the otpimize web queries</p>
                                </div>

                                <div class="plan__btn">
                                    <a class="price-btn" href="#">Choose Plan</a>
                                </div>
                                <div class="plan__price">
                                    Rp 750.000
                                    <sub>/bln</sub>
                                </div>
                                <ul class="plan__body list-none">
                                    <li>All limited links</li>
                                    <li>Own analytics platform</li>
                                    <li>Chat support</li>
                                    <li>Optimize hashtags</li>
                                    <li>Unlimited users</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row gx-4 gx-xxl-5">
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Personal</h3>
                                    <p>For most businesses that want to the otpimize web queries</p>
                                </div>
                                <div class="plan__btn">
                                    <a class="price-btn" href="#">Choose Plan</a>
                                </div>
                                <div class="plan__price">
                                    Rp 2.500.000
                                    <sub>/thn</sub>
                                </div>
                                <ul class="plan__body list-none">
                                    <li>All limited links</li>
                                    <li>Own analytics platform</li>
                                    <li>Chat support</li>
                                    <li>Optimize hashtags</li>
                                    <li>Unlimited users</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Premium</h3>
                                    <p>For most businesses that want to the otpimize web queries</p>
                                </div>
                                <div class="plan__btn">
                                    <a class="price-btn" href="#">Choose Plan</a>
                                </div>
                                <div class="plan__price">
                                    Rp 5.000.000
                                    <sub>/thn</sub>
                                </div>
                                <ul class="plan__body list-none">
                                    <li>All limited links</li>
                                    <li>Own analytics platform</li>
                                    <li>Chat support</li>
                                    <li>Optimize hashtags</li>
                                    <li>Unlimited users</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="plan mb-45">
                                <div class="plan__header">
                                    <h3>Bisnis</h3>
                                    <p>For most businesses that want to the otpimize web queries</p>
                                </div>
                                <div class="plan__btn">
                                    <a class="price-btn" href="#">Choose Plan</a>
                                </div>
                                <div class="plan__price">
                                    Rp 7.500.000
                                    <sub>/thn</sub>
                                </div>
                                <ul class="plan__body list-none">
                                    <li>All limited links</li>
                                    <li>Own analytics platform</li>
                                    <li>Chat support</li>
                                    <li>Optimize hashtags</li>
                                    <li>Unlimited users</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our-services end-->

    <!--our-services start-->
    <section class="our-services service-bg-two pt-145 pb-100 pt-lg-60 pb-lg-20">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-55">
                        <h3 class="sect-title mb-25" data-aos="fade-up">Layanan Kami</h3>
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
                        <img src="{{ asset('img/icon/icon-18b.svg') }}" alt="icon" height="75">
                        <h2>
                            <a class="sect-title-two" href="#">Pembuatan Website</a>
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
                        <img src="{{ asset('img/icon/icon-19b.svg') }}" alt="icon" height="75">
                        <h2>
                            <a class="sect-title-two" href="#">Solusi Hosting</a>
                        </h2>
                        <p>Solusi hosting kami dirancang untuk memberi Anda keandalan dan keamanan yang dibutuhkan situs web
                            Anda. Dengan Recodex, Anda dapat yakin bahwa website Anda berada di tangan yang aman.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-20b.svg') }}" alt="icon" height="75">
                        <h2>
                            <a class="sect-title-two" href="#">Pendaftaran Domain</a>
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
                        <img src="{{ asset('img/icon/icon-21b.svg') }}" alt="icon" height="75">
                        <h2>
                            <a class="sect-title-two" href="#">Website Toko Online</a>
                        </h2>
                        <p>Siapkan toko online Anda dengan mudah dan mulailah menjual produk atau layanan Anda secara
                            online. Solusi E-Commerce kami dirancang untuk memaksimalkan penjualan Anda dan meningkatkan
                            pengalaman berbelanja pelanggan Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-22b.svg') }}" alt="icon" height="75">
                        <h2>
                            <a class="sect-title-two" href="#">Desain UI/UX</a>
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
                        <img src="{{ asset('img/icon/icon-23b.svg') }}" alt="icon" height="75">
                        <h2>
                            <a class="sect-title-two" href="#">Pemrograman</a>
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
@endsection

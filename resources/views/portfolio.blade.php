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
                        <h2 class="page-title mb-20">Portofolio</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li class="active" aria-current="page">Portofolio</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!--techy-project-one start-->
    <section class="techy-project-one pt-145 pb-105 pt-lg-55 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-25">
                        <h3 class="sect-title mb-25" data-aos="fade-up">Portofolio</h3>
                        <p data-aos="fade-up">Lihat beberapa portofolio terbaik kami</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-10 text-center">
                    <div class="portfolio-menu mb-40" data-aos="fade-up" data-aos-delay="100">
                        <button class="gf_btn active" data-filter="*">All</button>
                        <button class="gf_btn" data-filter=".cat1">Web Devlopment</button>
                        <button class="gf_btn" data-filter=".cat2">Web E-Commerce</button>
                        <button class="gf_btn" data-filter=".cat3">Domain</button>
                        <button class="gf_btn" data-filter=".cat4">Hosting</button>
                        <button class="gf_btn" data-filter=".cat5">UI/UX Design</button>
                    </div>
                </div>
            </div>
            <div class="grid row gx-4 gx-xxl-5 feature-slider-one pe-0" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat3 cat5">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-1.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Web Design</a>
                        </h5>
                        <h3><a href="project-details.html">Web Analytics</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat2 cat4">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-2.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Cyber Secure</a>
                        </h5>
                        <h3><a href="project-details.html">Cyber Security Core</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat1 cat5">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-3.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Mobile info</a>
                        </h5>
                        <h3><a href="project-details.html">Upcoming Phone</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat1 cat2">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-4.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Graphic Design</a>
                        </h5>
                        <h3><a href="project-details.html">Design The Future</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat2 cat5">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-5.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Development</a>
                        </h5>
                        <h3><a href="project-details.html">Web Cycle Develop</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat1 cat4">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-6.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Apps Development</a>
                        </h5>
                        <h3><a href="project-details.html">Company Developmnet</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat4">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-7.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">App Case Study</a>
                        </h5>
                        <h3><a href="project-details.html">Full Apps Journey</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat3">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-8.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Cyber Engineering</a>
                        </h5>
                        <h3><a href="project-details.html">Specialized Security</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat1">
                    <div class="feature-item mb-40">
                        <a class="back-bg" href="project-details.html"><img class="w-100"
                                src="{{ asset('img/work/project-9.jpg') }}" alt="img"></a>
                        <h5>
                            <a href="project-details.html">Chemical Engineering</a>
                        </h5>
                        <h3><a href="prject-details.html">World Medicine Care</a></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-10 mb-45">
                    <a class="theme_btn" href="#">Load More</a>
                </div>
            </div>
        </div>

    </section>
    <!--techy-project-one end-->

    <!--call-to-action start-->
    <section class="call-to-action pt-100 pb-100">
        <img class="call-shape shape-one" src="{{ asset('img/shape/line-round-8c.svg') }}" alt="shape">
        <img class="call-shape shape-two d-none d-lg-inline-block" src="{{ asset('img/icon/icon-39c.svg') }}"
            alt="icon">
        <img class="call-shape shape-three d-none d-lg-inline-block" src="{{ asset('img/icon/icon-40c.svg') }}"
            alt="icon">
        <img class="call-shape shape-four d-none d-lg-inline-block" src="{{ asset('img/icon/icon-41c.svg') }}"
            alt="icon">
        <img class="call-shape shape-five d-none d-lg-inline-block" src="{{ asset('img/icon/icon-42c.svg') }}"
            alt="icon">
        <img class="call-shape shape-six d-none d-lg-inline-block" src="{{ asset('img/icon/icon-43c.svg') }}"
            alt="icon">
        <img class="call-shape shape-seven d-none d-lg-inline-block" src="{{ asset('img/icon/icon-44c.svg') }}"
            alt="icon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-8">
                    <div class="call-to-wrapper">
                        <h3 class="title-big mb-60" data-aos="fade-up">
                            Buat Website Anda Bersama Kami!
                        </h3>
                        <a class="theme_btn" data-aos="fade-up" href="#">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call-to-action end-->
@endsection

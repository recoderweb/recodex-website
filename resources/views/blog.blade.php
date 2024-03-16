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
                        <h2 class="page-title mb-20">Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li class="active" aria-current="page">Blog</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!--blog-grid-area start-->
    <section class="blog-grid-area pt-150 pb-105 pt-lg-60 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-03.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Google is removing the Movies &
                                    TV section from the
                                    Play Store</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Samir Jam</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-04.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Twitter asks shareholders to
                                    approve the $44 billion Elon Musk takeover</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Anisa kdar</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-05.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Where Minds Meet Machines: The
                                    Future of Robotics</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Samir Jam</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-06.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Announcing the full agenda for TC
                                    Sessions: Robotics happening this July</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Samir Jam</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-07.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Finger on your pulse: API-first
                                    startup Vivanta hopes to be Plaid for health</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Anisa kdar</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-08.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Fermyon wants to reinvent the way
                                    programmers develop microservices</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Samir Jam</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-09.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Deal terms look different in a
                                    downturn. Here’s what to watch out for</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Samir Jam</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-10.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Neuron7 raises $10M to help
                                    customer service agents find solutions</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Anisa kdar</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style-two mb-45">
                        <div class="blog-thumb">
                            <img class="w-100" src="{{ asset('img/blog/blog-11.jpg') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag pb-10">
                                Research , Technology
                            </div>
                            <h3><a class="blog-title" href="blog-details.html">Kibo School gets $2M to offer
                                    online STEM degrees to students in Africa</a></h3>
                            <div class="blog-meta">
                                <a href="#" class="mr-20"><i class="bi bi-person-plus"></i> Samir Jam</a>
                                <a href="#"><i class="bi bi-clock"></i> 21 Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-center mb-45">
                    <a class="theme_btn" href="blog-details.html">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!--blog-grid-area end-->

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

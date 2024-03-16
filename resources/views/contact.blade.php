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
                        <h2 class="page-title mb-20">Kontak</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li class="active" aria-current="page">Kontak</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!--contact-section start-->
    <div class="contact-section pt-145 pb-100 pt-lg-60 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-5">
                    <div class="contact-info-wrapper me-xxl-5 pe-xxl-5 mb-45">
                        <h2 class="sect-title mb-5">Mari Terhubung Dengan Kami</h2>
                        <div class="single-info-box mb-50">
                            <div class="icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <span class="mb-10">(+62) 822 9814 1940</span>
                            <span>(+62) 822 1234 7489</span>
                        </div>
                        <div class="single-info-box mb-50">
                            <div class="icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <span class="mb-10">Gg. Nangka No.10, RT.3/RW.7,</span>
                            <span>Halim Perdana Kusumah</span>
                        </div>
                        <div class="single-info-box mb-50">
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <span class="mb-10">sales@recodex.id</span>
                            <span>admin@recodex.id</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-content-wrapper mb-45">
                        <div class="row gx-4 gx-xxl-5 px-0 align-items-center mb-25">
                            <div class="col-xxl-8 col-md-7">
                                <div class="text-center text-md-start">
                                    <p class="text-white mb-40">Mari kita bekerja sama untuk merancang ulang masa depan
                                        Brand Anda.</p>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-5">
                                <div class="text-center text-md-end team-social-three social-style-five d-block mb-40">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a class="me-0" href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-map pb-40 mb-xxl-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d495.74742613934603!2d106.88181322440913!3d-6.266438124859013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1709830529794!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="contact-form-two">
                            <h3 class="post-title mb-50">Kirimkan Pesan kepada Kami</h3>
                            <form class="widget-form" action="#">
                                <div class="row gx-4 gx-xxl-5 px-0">
                                    <div class="col-md-6 mb-10">
                                        <label class="fs-16 text-white">Nama</label>
                                        <input type="text" name="name" placeholder="Enter Name">
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <label class="fs-16 text-white">Email</label>
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label class="fs-16 text-white">Pesan</label>
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="theme_btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-section end-->

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

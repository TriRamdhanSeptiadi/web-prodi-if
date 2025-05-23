﻿@extends('layouts.app')

@section('content')
    <!-- start banner -->
    <section class="p-0 border-radius-6px full-screen md-h-600px sm-h-450px ipad-top-space-margin position-relative overflow-hidden">
        <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true" data-particle-options='{"particles":{"number":{"value":10,"density":{"enable":true,"value_area":800}},"color":{"value":["#000000", "#BEFF01"]},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'></div>
            <div class="looping-wrapper md-h-100"></div>
                <div class="text-base-color absolute-middle-center banner-title fw-600 d-none d-md-inline-block" data-anime='{ "el": "lines", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'></div>
                    <div class="container h-100 position-relative">
                        <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12 text-center">
                        <div class="fs-120 lh-120 sm-fs-100 text-dark-gray fw-600 ls-minus-4px" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>Teknik Informatika</div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end banner -->
        <!-- start section -->
        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center align-items-center flex-column flex-sm-row" data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col-auto icon-with-text-style-08 md-mb-10px text-center text-md-start">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                            <div class="feature-box-icon me-5px">
                                <i class="bi bi-patch-check-fill fs-15 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="fs-14 fw-600 text-dark-gray text-uppercase">Inovatif Berkarya</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <div class="col-auto md-mb-15px d-none d-md-flex">
                        <span class="progress-step-separator bg-dark-gray w-100px lg-w-70px separator-line-1px d-block mx-auto"></span>
                    </div>
                    <!-- start features box item -->
                    <div class="col-auto icon-with-text-style-08 md-mb-10px text-center text-md-start">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                            <div class="feature-box-icon me-5px">
                                <i class="bi bi-geo-alt-fill fs-15 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="fs-14 fw-600 text-dark-gray text-uppercase">Kampus Strategis</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <div class="col-auto md-mb-15px d-none d-md-flex">
                        <span class="progress-step-separator bg-dark-gray w-100px lg-w-70px separator-line-1px d-block mx-auto"></span>
                    </div>
                    <!-- start features box item -->
                    <div class="col-auto icon-with-text-style-08 text-center text-md-start">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                            <div class="feature-box-icon me-5px">
                                <i class="bi bi-heart-fill fs-15 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="fs-14 fw-600 text-dark-gray text-uppercase">Kompeten di Bidangnya</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- Start Section -->
        <section class="position-relative overflow-hidden section-dark">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <!-- Kolom Gambar -->
                    @if ($tentangInformatika && $tentangInformatika->thumbnail)
                    <div class="col-lg-6">
                        <div class="image-container" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
                            <img src="{{ asset('storage/' . $tentangInformatika->thumbnail) }}" alt="Informatika">
                        </div>
                    </div>
                    @endif
                    <!-- Kolom Teks -->
                    @if ($tentangInformatika && $tentangInformatika->deskripsi)
                    <div class="col-lg-6 content-container" style="height: 400px;" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50 }'>
                        <h1 class="section-title">Teknik Informatika.</h1>
                        <p class="section-text" style="text-align: justify;">
                            {!! Str::before($tentangInformatika->deskripsi, '</p>') . '</p>' !!}
                        </p>    
                        <a href="/tentang-teknik-informatika" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700">
                            <span class="bg-base-color"></span>Tentang Informatika
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- start section -->  
        <section class="p-0 overflow-hidden">
            <div class="container">
                <div class="bg-dark-gray border-radius-6px p-8 md-p-6 sm-p-10 position-relative overflow-hidden">
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h2 class="section-title text-white fw-700 ls-minus-1px z-index-1 position-relative">Visi, Misi dan Tujuan</h2>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 justify-content-center align-items-start" data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- Start Process Step Item -->
                        <div class="col text-center last-paragraph-no-margin hover-box process-step-style-01 sm-mb-40px d-flex flex-column">
                            <div class="process-step-icon-box position-relative mb-25px">
                                <span class="progress-step-separator bg-white w-60 separator-line-1px opacity-2"></span>
                                <!-- Link di sekitar elemen bulat -->
                                <a href="{{ url('/visi-misi-tujuan?tab=visi') }}" class="process-step-icon-link">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-80px w-80px fs-18 bg-white box-shadow-large text-dark-gray alt-font fw-500">
                                        <span class="fw-600 number position-relative z-index-1">01</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </a>
                            </div>
                            <span class="d-inline-block fs-32 fw-500 text-white mb-5px">Visi</span>
                            <div class="mt-auto">
                                @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                                    <p class="w-80 md-w-90 d-inline-block">{!! $visiMisiTujuan->visi !!}</p>
                                @endif
                            </div>
                        </div>
                        <!-- End Process Step Item -->

                        <!-- Start Process Step Item -->
                        <div class="col text-center last-paragraph-no-margin hover-box process-step-style-01 sm-mb-40px d-flex flex-column">
                            <div class="process-step-icon-box position-relative mb-25px">
                                <span class="progress-step-separator bg-white w-60 separator-line-1px opacity-2"></span>
                                <!-- Link di sekitar elemen bulat -->
                                <a href="{{ url('/visi-misi-tujuan?tab=misi') }}" class="process-step-icon-link">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-80px w-80px fs-18 bg-white box-shadow-large text-dark-gray alt-font fw-500">
                                        <span class="fw-600 number position-relative z-index-1">02</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </a>
                            </div>
                            <span class="d-inline-block fs-32 fw-500 text-white mb-5px">Misi</span>
                            <div class="mt-11">
                                @if ($visiMisiTujuan && is_array($visiMisiTujuan->misi) && count($visiMisiTujuan->misi) > 0)
                                    <p class="w-80 md-w-90 d-inline-block">{!! $visiMisiTujuan->misi[0]['text'] !!}</p>
                                @endif
                            </div>
                        </div>
                        <!-- End Process Step Item -->

                        <!-- Start Process Step Item -->
                        <div class="col text-center last-paragraph-no-margin hover-box process-step-style-01 d-flex flex-column">
                            <div class="process-step-icon-box position-relative mb-25px">
                                <span class="progress-step-separator bg-white w-60 separator-line-1px opacity-2 d-md-none"></span>
                                <!-- Link di sekitar elemen bulat -->
                                <a href="{{ url('/visi-misi-tujuan?tab=tujuan') }}" class="process-step-icon-link">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-80px w-80px fs-18 bg-white box-shadow-large text-dark-gray alt-font fw-500">
                                        <span class="fw-600 number position-relative z-index-1">03</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </a>
                            </div>
                            <span class="d-inline-block fs-32 fw-500 text-white mb-5px">Tujuan</span>
                            <div class="mt-11">
                                @if ($visiMisiTujuan && is_array($visiMisiTujuan->tujuan) && count($visiMisiTujuan->tujuan) > 0)
                                    <p class="w-80 md-w-90 d-inline-block">{!! $visiMisiTujuan->tujuan[0]['text'] !!}</p>
                                @endif
                            </div>
                        </div>
                        <!-- End Process Step Item -->
                    </div>
                    <div class="position-absolute top-5px ls-minus-6px left-0px w-100 text-center" data-bottom-top="transform: translate3d(380px, 0px, 0px);" data-top-bottom="transform: translate3d(-380px, 0px, 0px);">
                        <div class="fs-200 sm-fs-170 xs-fs-110 fw-700 opacity-1">Visi, Misi dan Tujuan</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-5 pb-3">
            <div class="container">
                {{-- gx-5 = gutter horisontal 3rem (default), g-lg-5 untuk breakpoint lg --}}
                <div class="row gx-5 align-items-center justify-content-center">
                    <!-- Gambar -->
                    <div class="col-10 col-md-6 col-lg-5 d-flex justify-content-center justify-content-lg-end pe-lg-5">
                        @if($pimpinanStaff?->foto)
                            <img 
                                src="{{ asset('storage/' . $pimpinanStaff->foto) }}"
                                alt="Foto Pimpinan"
                                class="img-fluid rounded"
                                style="max-width: 250px;"
                            >
                        @endif
                    </div>

                    <!-- Teks sambutan -->
                    <div class="col-12 col-md-10 col-lg-7 ps-lg-5">
                        <h3 class="section-title fw-700 text-dark-gray ls-minus-2px">Kata Sambutan</h1>

                        @if($pimpinanStaff?->kata_sambutan)
                            <p class="section-text">
                                {!! Str::before($pimpinanStaff->kata_sambutan, '</p>') . '</p>' !!}
                            </p>
                        @endif

                        <p class="section-text fs-18 text-dark-gray mt-5px mb-10px">
                            <span class="fw-600">{!! $pimpinanStaff->nama !!},</span> {!! $pimpinanStaff->status !!}
                        </p>

                        <div class="text-center text-lg-start">
                            <a href="{{ route('pimpinanStaff.showDetail', $pimpinanStaff->id) }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700">
                                <span class="bg-base-color"></span>Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-4 pb-0">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 text-center text-md-start sm-mb-20px">
                        <h2 class="section-title fw-600 text-dark-gray mb-0 ls-minus-3px">Berita Terbaru</h2>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="/berita" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>Jelajahi Semua Berita</a>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog list -->
                        @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    @if ($item->gambar)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}" class="d-block">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                    @if ($item->judul)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}" 
                                    class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->judul, 90) !!}
                                    </a>
                                    @endif
                                    @if ($item->deskripsi)
                                    <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->deskripsi, 120) !!}
                                    </p>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                        <div class="me-auto">
                                            @if ($item->waktu)
                                            <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <!-- end blog list -->
                    </ul>
                </div>
            </div>
            </div>
        </section>
        <!-- end section -->
@endsection
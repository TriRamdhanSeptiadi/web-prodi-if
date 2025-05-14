@extends('layouts.app')

@section('content')
    <!-- start section --> 
    <section class="pb-0" style="margin-top: 50px;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 md-mb-50px animation-float" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'> 
                        <img class="w-100" src="{{ asset('storage/' . $tentangInformatika->thumbnail) }}" alt="">
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h5 class="fw-700 text-dark-gray ls-minus-1px">Tentang Teknik Informatika</h5>
                        @if ($tentangInformatika && $tentangInformatika->deskripsi)
                        <p class="w-95 lg-w-100 mb-30px">{!! $tentangInformatika->deskripsi !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection
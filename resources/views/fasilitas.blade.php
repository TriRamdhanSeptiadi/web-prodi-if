@extends('layouts.app')

@section('content')
    <!-- Start Section -->
    <section id="profil" class="mb-0 pb-0" style="margin-top: 50px;">
        <div class="container">
            @foreach ($kampus as $item)
            <div class="card shadow-lg border-0 rounded-3 overflow-hidden mb-5" 
                data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                <div class="card-body p-4">
                    <!-- Judul -->
                    @if ($item->nama)
                    <h5 class="text-center text-dark-gray fw-700 mb-4"
                        data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":200, "easing": "easeOutQuad" }'>
                        {!! $item->nama !!}
                    </h5>
                    @endif

                    <div class="row align-items-center">
                        @if ($item->gambar)
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Kampus" class="w-100 rounded-3" />
                        </div>
                        @endif
                        <div class="col-lg-6">
                            @if ($item->deskripsi)
                            <p class="mb-3">{!! $item->deskripsi !!}</p>
                            @endif
                            @if ($item->alamat)
                            <p class="mb-2"><strong>Alamat:</strong> {!! $item->alamat !!}</p>
                            @endif
                            @if ($item->nomor)
                            <p class="mb-4"><strong>Nomor:</strong> {!! $item->nomor !!}</p>
                            @endif
                            <a href="{{ route('detail-fasilitas', ['id' => $item->id]) }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Section -->
@endsection
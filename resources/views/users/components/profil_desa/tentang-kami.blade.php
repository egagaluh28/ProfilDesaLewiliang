@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Tentang kami</h2>
            </div>
        </div>
    </div>

    <div class="about-compnay-two no-bg section-spacing">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    @if ($tentangKami)
                        <div class="col-lg-6 col-12 text order-lg-last">
                            <div class="theme-title-one">
                                <h2>{{ $tentangKami->judul }}</h2>
                            </div>
                            <p>{{ $tentangKami->deskripsi }}</p>
                        </div>
                        <div class="col-lg-6 col-12 order-lg-first">
                            @if ($tentangKami->gambar)
                                <img src="{{ asset('storage/' . $tentangKami->gambar) }}" alt="Gambar"
                                    style="width: 100px; height: auto;">
                            @else
                                <p>Tidak ada gambar.</p>
                            @endif
                        </div>
                    @else
                        <p>Data Tentang Kami belum tersedia. Silakan tambahkan data dari panel admin.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Potensi Desa</h2>
            </div>
        </div>
    </div>

    <div class="potensi-desa section-spacing">
        <div class="container">
            <h3 class="text-center mb-4">Kelebihan dan Potensi Desa Kami</h3>
            <div class="row">
                @foreach ($potensiDesa as $potensi)
                    <div class="col-lg-4 col-md-6">
                        <div class="potensi-card">

                            <img src="{{ asset('storage/' . $potensi->gambar) }}" alt="{{ $potensi->judul }}" class="img-fluid">
                            <div class="potensi-content">
                                <h4>{{ $potensi->judul }}</h4>
                                <p>{{ $potensi->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<style>
    .potensi-desa {
        background: #f9f9f9;
        padding: 40px 0;
    }

    .potensi-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        margin-bottom: 30px;
    }

    .potensi-card img {
        width: 100%;
        height: auto;
    }

    .potensi-content {
        padding: 20px;
    }

    .potensi-content h4 {
        font-size: 1.25rem;
        margin: 10px 0;
        color: #388e3c;
        /* Warna hijau */
    }

    .potensi-content p {
        color: #666;
    }

    .potensi-card:hover {
        transform: scale(1.05);
    }
</style>

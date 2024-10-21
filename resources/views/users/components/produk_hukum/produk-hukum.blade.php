@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Produk Hukum Desa</h2>
                <p style="color: #f1f1f1" class="lead">Mengetahui dan memahami regulasi yang mengatur desa kami.</p>
            </div>
        </div>
    </div>

    <div class="produk-hukum section-spacing">
        <div class="container">
            <div class="row">
                @foreach ( $produkHukum as $pm )


                <div class="col-lg-12 p-2">
                    <div class="law-product-wrapper">
                        <div class="law-product-card">
                            <h4>{{ $pm->judul }}</h4>
                            <p>{{ $pm->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<style>
    .produk-hukum {
        background-color: #ffffff;
        padding: 40px 0;
        border-top: 5px solid #388e3c;
        /* Warna hijau */
    }

    .law-product-wrapper {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .law-product-card {
        background: #f1f1f1;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .law-product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .law-product-card h4 {
        margin: 0 0 10px;
        color: #388e3c;
        /* Warna hijau */
    }

    .law-product-card p {
        color: #555;
        line-height: 1.5;
    }
</style>

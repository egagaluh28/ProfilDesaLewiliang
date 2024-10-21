@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Geografi Desa Leuwiliang</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="our-blog section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="post-wrapper blog-details">
                        @if ($geografisDesa->isEmpty())
                            <p>Tidak ada data geografi desa yang tersedia.</p>
                        @else
                            @foreach ($geografisDesa as $geografi)
                                <div class="single-blog">
                                    <div class="post-meta">
                                        <h5 class="title">{{ $geografi->judul }}</h5>
                                        <p>{!! nl2br(e($geografi->konten)) !!}</p>
                                        @if ($geografi->peta_url)
                                            <h5 class="mt-4">Peta Lokasi</h5>
                                            <div class="map-container mb-3">
                                                <iframe src="{{ $geografi->peta_url }}" width="100%" height="400"
                                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        @endif
                                    </div> <!-- /.post-meta -->
                                </div> <!-- /.single-blog -->
                            @endforeach
                        @endif
                    </div>
                    <h5 class="mt-4">Keindahan Alam Desa Leuwiliang</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="users/images/home/19.jpg" alt="Keindahan Alam 1" class="img-fluid mb-3">
                        </div>
                        <div class="col-md-4">
                            <img src="users/images/home/19.jpg" alt="Keindahan Alam 2" class="img-fluid mb-3">
                        </div>
                        <div class="col-md-4">
                            <img src="users/images/home/19.jpg" alt="Keindahan Alam 3" class="img-fluid mb-3">
                        </div>
                    </div>
                    <p>Gambar-gambar di atas menampilkan keindahan alam Desa Leuwiliang yang memukau, dari
                        hamparan sawah hingga pegunungan yang hijau.</p>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.our-blog -->
@endsection

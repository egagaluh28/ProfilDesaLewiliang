@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Demografi Desa Leuwiliang</h2>
            </div>
        </div>
    </div>

    <div class="demography-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="post-wrapper demography-details">
                        @foreach ($demografi as $item)
                            <div class="single-demography">
                                <div class="post-meta">
                                    <h5 class="title">{{ $item->judul }}</h5>
                                    <p>{{ $item->konten }}</p>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-demography -->
                        @endforeach
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.demography-section -->
@endsection

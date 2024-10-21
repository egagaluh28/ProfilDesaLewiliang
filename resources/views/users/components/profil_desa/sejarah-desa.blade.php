@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Sejarah Desa</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="our-blog section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="post-wrapper blog-details">
                        <div class="single-blog">
                            <div class="image-box">
                                <img src="{{ Storage::url($sejarahDesa->gambar) }}" alt="">
                                <div class="overlay"><a href="#"
                                        class="date">{{ $sejarahDesa->created_at->format('M d, Y') }}</a></div>
                            </div> <!-- /.image-box -->
                            <div class="post-meta">
                                <h5 class="title">{{ $sejarahDesa->judul }}</h5>
                                <p>{!! nl2br(e($sejarahDesa->konten)) !!}</p> <!-- Menambahkan fungsi nl2br() -->
                            </div> <!-- /.post-meta -->
                        </div> <!-- /.single-blog -->
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.our-blog -->
@endsection

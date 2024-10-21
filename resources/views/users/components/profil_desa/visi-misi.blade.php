@extends('users.layouts.index')
@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Visi Misi</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="about-compnay-two no-bg section-spacing">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 text order-lg-last">
                        <div class="theme-title-one">
                            <h2>Visi</h2>
                        </div> <!-- /.theme-title-one -->
                        <p>{{ $visiMisi->visi }}</p>
                        {{-- <img src="images/home/sign-black.png" alt="" class="sign"> --}}
                    </div> <!-- /.col- -->
                    <div class="col-lg-6 col-12 order-lg-first">
                        <img src="{{ Storage::url($visiMisi->gambar_visi) }}" alt="Foto Visi Misi" class="left-img">

                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.about-compnay-two -->

    <div class="about-compnay-two no-bg section-spacing">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 text order-lg-first">
                        <div class="theme-title-one">
                            <h2>Misi</h2>
                        </div>
                        <p>{{ $visiMisi->misi }}</p>
                        {{-- <img src="images/home/sign-black.png" alt="" class="sign"> --}}
                    </div> <!-- /.col- -->
                    <div class="col-lg-6 col-12 order-lg-last">
                        <img src="{{ Storage::url($visiMisi->gambar_misi) }}" alt="Foto Visi Misi" class="left-img">
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.about-compnay-two -->
@endsection

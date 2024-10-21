@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Agenda Kegiatan</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="gallery-page section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-wrapper">
                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Kegiatan Pertanian" class="img-fluid">
                                <div class="image">
                                    <h5>Kegiatan Pertanian</h5>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Festival Budaya" class="img-fluid">
                                <div class="image">
                                    <h5>Festival Budaya</h5>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Pelatihan Keterampilan" class="img-fluid">
                                <div class="image">
                                    <h5>Pelatihan Keterampilan</h5>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Kegiatan Sosial" class="img-fluid">
                                <div class="image">
                                    <h5>Kegiatan Sosial</h5>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Pemandangan Alam" class="img-fluid">
                                <div class="image">
                                    <h5>Pemandangan Alam</h5>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Kerajinan Tangan" class="img-fluid">
                                <div class="image">
                                    <h5>Kerajinan Tangan</h5>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Pemandangan Alam" class="img-fluid">
                                <div class="image">
                                    <h5>Pemandangan Alam</h5>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="users/images/home/17.jpg" alt="Kerajinan Tangan" class="img-fluid">
                                <div class="image">
                                    <h5>Kerajinan Tangan</h5>
                                </div>
                            </div>
                        </div> <!-- /.gallery-grid -->
                    </div> <!-- /.gallery-wrapper -->
                </div> <!-- /.col-lg-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.gallery-page -->
@endsection

<style>
    .gallery-wrapper {
        margin-top: 30px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        transition: transform 0.3s;
    }

    .gallery-item img {
        width: 100%;
        border-radius: 10px;
        height: auto;
    }

    .image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
        border-radius: 10px;
    }

    .gallery-item:hover .image {
        opacity: 1;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .image h5 {
        font-size: 1.5rem;
        text-align: center;
        margin: 0;
    }
</style>

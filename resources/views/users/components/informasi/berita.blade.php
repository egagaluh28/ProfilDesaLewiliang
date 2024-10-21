@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Berita</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="blog-inner-page section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12 our-blog">
                    <div class="post-wrapper">
                        <div class="single-blog">
                            <div class="image-box">
                                <img src="users/images/blog/9.jpg" alt="">
                                <div class="overlay"><a href="#" class="date">Feb 06, 2024</a></div>
                            </div> <!-- /.image-box -->
                            <div class="post-meta">
                                <h5 class="title"><a href="blog-details.html">Inovasi Pertanian Berkelanjutan di Desa
                                        Leuwiliang</a></h5>
                                <p>Teknologi modern meningkatkan hasil panen di Desa Leuwiliang sambil menjaga kelestarian
                                    lingkungan.</p>
                                <a href="blog-details.html" class="read-more">BACA SELENGKAPNYA</a>
                            </div> <!-- /.post-meta -->
                        </div> <!-- /.single-blog -->

                        <div class="single-blog">
                            <div class="image-box">
                                <img src="users/images/blog/10.jpg" alt="">
                                <div class="overlay"><a href="#" class="date">Mar 23, 2024</a></div>
                            </div> <!-- /.image-box -->
                            <div class="post-meta">
                                <h5 class="title"><a href="blog-details.html">Kegiatan Sosial di Desa Leuwiliang</a></h5>
                                <p>Warga aktif dalam kegiatan sosial, memperkuat hubungan antarwarga melalui bakti sosial.
                                </p>
                                <a href="blog-details.html" class="read-more">BACA SELENGKAPNYA</a>
                            </div> <!-- /.post-meta -->
                        </div> <!-- /.single-blog -->

                        <div class="single-blog">
                            <div class="image-box">
                                <img src="users/images/blog/11.jpg" alt="">
                                <div class="overlay"><a href="#" class="date">Apr 15, 2024</a></div>
                            </div> <!-- /.image-box -->
                            <div class="post-meta">
                                <h5 class="title"><a href="blog-details.html">Festival Budaya Leuwiliang 2024</a></h5>
                                <p>Festival tahunan menampilkan seni tradisional dan kerajinan lokal, menarik pengunjung
                                    dari jauh.</p>
                                <a href="blog-details.html" class="read-more">BACA SELENGKAPNYA</a>
                            </div> <!-- /.post-meta -->
                        </div> <!-- /.single-blog -->

                        <div class="single-blog">
                            <div class="image-box">
                                <img src="users/images/blog/12.jpg" alt="">
                                <div class="overlay"><a href="#" class="date">May 10, 2024</a></div>
                            </div> <!-- /.image-box -->
                            <div class="post-meta">
                                <h5 class="title"><a href="blog-details.html">Pengembangan Wisata Alam di Leuwiliang</a>
                                </h5>
                                <p>Paket wisata baru di Leuwiliang menawarkan pengalaman keindahan alam untuk menarik
                                    wisatawan.</p>
                                <a href="blog-details.html" class="read-more">BACA SELENGKAPNYA</a>
                            </div> <!-- /.post-meta -->
                        </div> <!-- /.single-blog -->
                    </div> <!-- /.post-wrapper -->
                    <div class="theme-pagination">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                    <div class="sidebar-container sidebar-search">
                        <form action="#">
                            <input type="text" placeholder="Cari...">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> <!-- /.sidebar-search -->
                    <div class="sidebar-container sidebar-categories">
                        <h5 class="title">Kategori</h5>
                        <ul>
                            <li><a href="#">Pertanian</a></li>
                            <li><a href="#">Kegiatan Sosial</a></li>
                            <li><a href="#">Budaya</a></li>
                            <li><a href="#">Pariwisata</a></li>
                        </ul>
                    </div> <!-- /.sidebar-categories -->
                    <div class="sidebar-container sidebar-recent-post">
                        <h5 class="title">Post Terbaru</h5>
                        <ul>
                            <li class="clearfix">
                                <img src="users/images/blog/6.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="blog-details.html">Inovasi dalam Pertanian Modern.</a>
                                    <div class="date">5 menit lalu</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="users/images/blog/7.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="blog-details.html">Pentingnya Kegiatan Sosial di Masyarakat.</a>
                                    <div class="date">2 hari lalu</div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.sidebar-recent-post -->
                    <div class="sidebar-container sidebar-archives">
                        <h5 class="title">Arsip</h5>
                        <ul>
                            <li><a href="#">Januari 2024</a></li>
                            <li><a href="#">Februari 2024</a></li>
                        </ul>
                    </div> <!-- /.sidebar-archives -->
                    <div class="sidebar-tags">
                        <h5 class="title">Tag</h5>
                        <ul class="clearfix">
                            <li><a href="#">Pertanian</a></li>
                            <li><a href="#">Sosial</a></li>
                            <li><a href="#">Budaya</a></li>
                            <li><a href="#">Pariwisata</a></li>
                        </ul>
                    </div> <!-- /.sidebar-tags -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.blog-inner-page -->
@endsection

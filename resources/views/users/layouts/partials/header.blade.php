<header class="header-one">
    <div class="top-header">
        <div class="container clearfix">
            <div class="logo float-left"><a href="index"><img src="users/images/logo/logo.png" alt=""></a>
            </div>
            <div class="address-wrapper float-right">
                <ul>
                    <li class="address">
                        <i class="icon flaticon-placeholder"></i>
                        <h6>Address:</h6>
                        <p>2A0, Queenstown St, USA.</p>
                    </li>
                    <li class="address">
                        <i class="icon flaticon-multimedia"></i>
                        <h6>Mail us:</h6>
                        <p>supporthere@mail.com</p>
                    </li>
                    <li class="quotes"><a href="#">GET A QUOTES</a></li>
                </ul>
            </div> <!-- /.address-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.top-header -->

    <div class="theme-menu-wrapper">
        <div class="container">
            <div class="bg-wrapper clearfix">
                <!-- ============== Menu Wrapper ================ -->
                <div class="menu-wrapper float-left">
                    <nav id="mega-menu-holder" class="clearfix">
                        <ul class="clearfix">
                            <li class="{{ Request::is('beranda') ? 'active' : '' }}">
                                <a href="{{ route('beranda') }}">Profil Desa</a>
                                <ul class="dropdown">
                                    <li class="{{ Request::is('beranda') ? 'active' : '' }}"><a
                                            href="{{ route('beranda') }}">Beranda</a></li>
                                    <li class="{{ Request::is('tentang-kami') ? 'active' : '' }}"><a
                                            href="{{ route('tentang.kami') }}">Tentang Kami</a></li>
                                    <li class="{{ Request::is('visi-misi') ? 'active' : '' }}"><a
                                            href="{{ route('visi.misi') }}">Visi Misi</a></li>
                                    <li class="{{ Request::is('sejarah-desa') ? 'active' : '' }}"><a
                                            href="{{ route('sejarah.desa') }}">Sejarah Desa</a></li>
                                    <li class="{{ Request::is('geografis-desa') ? 'active' : '' }}"><a
                                            href="{{ route('geografis.desa') }}">Geografis Desa</a></li>
                                    <li class="{{ Request::is('demografi-desa') ? 'active' : '' }}"><a
                                            href="{{ route('demografi.desa') }}">Demografi Desa</a></li>
                                </ul>
                            </li>
                            <li
                                class="{{ Request::is('struktur-organisasi', 'perangkat-desa', 'lembaga-desa') ? 'active' : '' }}">
                                <a href="#">Pemerintahan</a>
                                <ul class="dropdown">
                                    <li class="{{ Request::is('struktur-organisasi') ? 'active' : '' }}"><a
                                            href="{{ route('struktur.organisasi') }}">Struktur Organisasi</a></li>
                                    <li class="{{ Request::is('perangkat-desa') ? 'active' : '' }}"><a
                                            href="{{ route('perangkat.desa') }}">Perangkat Desa</a></li>
                                    <li class="{{ Request::is('lembaga-desa') ? 'active' : '' }}"><a
                                            href="{{ route('lembaga.desa') }}">Lembaga Desa</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('layanan') ? 'active' : '' }}">
                                <a href="{{ route('layanan') }}">Layanan</a>
                            </li>
                            <li
                                class="{{ Request::is('berita', 'pengumuman', 'agenda-kegiatan', 'galeri', 'download', 'apbd-desa') ? 'active' : '' }}">
                                <a href="#">Informasi</a>
                                <ul class="dropdown">
                                    <li class="{{ Request::is('berita') ? 'active' : '' }}"><a
                                            href="{{ route('berita') }}">Berita</a></li>
                                    <li class="{{ Request::is('pengumuman') ? 'active' : '' }}"><a
                                            href="{{ route('pengumuman') }}">Pengumuman</a></li>
                                    <li class="{{ Request::is('agenda-kegiatan') ? 'active' : '' }}"><a
                                            href="{{ route('agenda.kegiatan') }}">Agenda Kegiatan</a></li>
                                    <li class="{{ Request::is('galeri') ? 'active' : '' }}"><a
                                            href="{{ route('galeri') }}">Galeri</a></li>
                                    <li class="{{ Request::is('download') ? 'active' : '' }}"><a
                                            href="{{ route('download') }}">Download</a></li>
                                    <li class="{{ Request::is('apbd-desa') ? 'active' : '' }}"><a
                                            href="{{ route('apbd.desa') }}">APBD Desa</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('potensi-desa') ? 'active' : '' }}">
                                <a href="{{ route('potensi.desa') }}">Potensi Desa</a>
                            </li>
                            <li class="{{ Request::is('produk-hukum') ? 'active' : '' }}">
                                <a href="{{ route('produk.hukum') }}">Produk Hukum</a>
                            </li>
                        </ul>
                    </nav> <!-- /#mega-menu-holder -->
                </div> <!-- /.menu-wrapper -->

                <div class="right-widget float-right">
                    <ul>
                        <li class="cart-icon">
                            <a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
                        </li>
                        <li class="search-option">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                                <form action="#" class="dropdown-menu">
                                    <input type="text" placeholder="Enter Your Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div> <!-- /.right-widget -->
            </div> <!-- /.bg-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.theme-menu-wrapper -->


</header> <!-- /.header-one -->

<header class="header-one">
    <div class="top-header">
        <div class="container clearfix d-flex align-items-center justify-content-between">
            <div class="logo float-left"><a href="index"><img src="users/images/logo/logo.png" width="90px"
                        alt=""></a>
            </div>
            <div class="address-wrapper">
                <ul>
                    <li class="address">
                        <i class="icon flaticon-placeholder"></i>
                        <h6>Alamat:</h6>
                        <p>Kecamatan Lewiliang, Kota Bogor, Jawa Barat</p>
                    </li>
                    <li class="address">
                        <i class="icon flaticon-multimedia"></i>
                        <h6>Email :</h6>
                        <p>DesaLewiliang@gmail.com</p>
                    </li>
                    {{-- <li><a href="index"><img src="users/images/logo/logo.png" width="90px" alt=""></a></li> --}}
                </ul>
            </div>
            {{-- <div class="logo float-right"><a href="index"><img src="users/images/logo/logo.png" width="90px"
                        alt=""></a>
            </div> --}}
        </div>
    </div>

    <div class="theme-menu-wrapper">
        <div class="container">
            <div class="bg-wrapper clearfix d-flex justify-content-center">
                <!-- ============== Menu Wrapper ================ -->
                <div class="menu-wrapper float-left">
                    <nav id="mega-menu-holder" class="clearfix">
                        <ul class="clearfix">
                            <li
                                class="{{ Request::is('beranda', 'tentang-kami', 'visi-misi', 'sejarah-desa', 'geografis-desa', 'demografi-desa') ? 'active' : '' }}">
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
                    </nav>
                </div>
            </div> <!-- /.bg-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.theme-menu-wrapper -->


</header> <!-- /.header-one -->

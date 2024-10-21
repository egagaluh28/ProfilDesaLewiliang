<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">

            <!-- Profil Menu -->
            <li class="nav-item dropdown {{ request()->is('profil*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Profil</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('index.html') }}">Default</a>
                    </li>
                    <li>
                        <a href="{{ route('tentangkami.index') }}">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.profil.visimisi.index') }}">Visi Misi</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard.profil.sejarahdesa') }}">Sejarah Desa</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard.profil.demografidesa') }}">Demografi Desa</a>
                    </li>

                </ul>
            </li>

            <!-- Pemerintahan Menu -->
            <li class="nav-item dropdown {{ request()->is('pemerintahan*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Pemerintahan</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Struktur Organisasi</a>
                    </li>
                    <li>
                        <a href="#">Perangkat Desa</a>
                    </li>
                    <li>
                        <a href="#">Lembaga Desa</a>
                    </li>
                </ul>
            </li>

            <!-- Layanan Menu -->
            <li class="nav-item dropdown {{ request()->is('layanan*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Layanan</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Layanan</a>
                    </li>
                </ul>
            </li>

            <!-- Informasi Menu -->
            <li class="nav-item dropdown {{ request()->is('informasi*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Informasi</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Berita</a>
                    </li>
                    <li>
                        <a href="#">Pengumuman</a>
                    </li>
                    <li>
                        <a href="#">Agenda Kegiatan</a>
                    </li>
                    <li>
                        <a href="#">Galeri</a>
                    </li>
                    <li>
                        <a href="#">Download</a>
                    </li>
                    <li>
                        <a href="#">APBD Desa</a>
                    </li>
                </ul>
            </li>

            <!-- Potensi Desa Menu -->
            <li class="nav-item dropdown {{ request()->is('potensi-desa*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Potensi Desa</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.dashboard.potensi.potensiDesa') }}">Demografi Desa</a>
                    </li>
                </ul>
            </li>

            <!-- Produk Hukum Menu -->
            <li class="nav-item dropdown {{ request()->is('produk-hukum*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Produk Hukum</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.dashboard.produkHukum.produkHukum') }}">Demografi Desa</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>

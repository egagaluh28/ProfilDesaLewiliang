@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Layanan Desa</h2>
                <p style="color: #f4f4f4" class="lead">Menyediakan layanan terbaik untuk masyarakat.</p>
            </div>
        </div>
    </div>

    <div class="layanan-page section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="layanan-wrapper">
                        <div class="layanan-card">
                            <i class="fa fa-user-plus"></i>
                            <h4>Pendaftaran Penduduk</h4>
                            <p>Kami menawarkan layanan pendaftaran untuk penduduk baru dan perpindahan.</p>
                        </div>

                        <div class="layanan-card">
                            <i class="fa fa-heartbeat"></i>
                            <h4>Pelayanan Kesehatan</h4>
                            <p>Layanan kesehatan dasar di puskesmas desa untuk masyarakat.</p>
                        </div>

                        <div class="layanan-card">
                            <i class="fa fa-paper-plane"></i>
                            <h4>Pengurusan Surat</h4>
                            <p>Pengurusan berbagai surat penting seperti akta dan izin usaha.</p>
                        </div>

                        <div class="layanan-card">
                            <i class="fa fa-users"></i>
                            <h4>Program Pemberdayaan Masyarakat</h4>
                            <p>Inisiatif untuk meningkatkan kesejahteraan dan keterampilan masyarakat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>

    .layanan-page {
        background-color: #f4f4f4;
        padding: 40px 0;
    }

    .layanan-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .layanan-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .layanan-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .layanan-card i {
        font-size: 40px;
        color: #388e3c;
        margin-bottom: 15px;
    }

    .layanan-card h4 {
        margin: 0 0 10px;
        color: #388e3c;
    }

    .layanan-card p {
        color: #555;
        line-height: 1.6;
    }
</style>

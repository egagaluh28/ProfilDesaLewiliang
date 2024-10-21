@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Agenda Kegiatan</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="agenda-inner-page section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="agenda-wrapper">
                        <div class="agenda-card">
                            <h5 class="title">📅 Rapat Desa</h5>
                            <div class="agenda-content">
                                <p><strong>Tanggal:</strong> 15 Oktober 2024</p>
                                <p><strong>Waktu:</strong> 10.00 WIB</p>
                                <p><strong>Tempat:</strong> Balai Desa Leuwiliang</p>
                                <p>Agenda rapat meliputi:</p>
                                <ul>
                                    <li>Pembahasan program pengembangan desa</li>
                                    <li>Kegiatan sosial dan partisipasi masyarakat</li>
                                </ul>
                            </div> <!-- /.agenda-content -->
                        </div> <!-- /.agenda-card -->

                        <div class="agenda-card">
                            <h5 class="title">🌱 Pelatihan Keterampilan</h5>
                            <div class="agenda-content">
                                <p><strong>Tanggal:</strong> 20-22 Oktober 2024</p>
                                <p><strong>Waktu:</strong> 09.00 WIB - 15.00 WIB</p>
                                <p><strong>Tempat:</strong> Aula Desa Leuwiliang</p>
                                <p>Materi pelatihan:</p>
                                <ul>
                                    <li>Keterampilan pertanian modern</li>
                                    <li>Kerajinan tangan lokal</li>
                                </ul>
                            </div> <!-- /.agenda-content -->
                        </div> <!-- /.agenda-card -->

                        <div class="agenda-card">
                            <h5 class="title">🎉 Festival Budaya</h5>
                            <div class="agenda-content">
                                <p><strong>Tanggal:</strong> 30 November 2024</p>
                                <p><strong>Waktu:</strong> 09.00 WIB - Selesai</p>
                                <p><strong>Tempat:</strong> Lapangan Desa Leuwiliang</p>
                                <p>Acara akan mencakup:</p>
                                <ul>
                                    <li>Pertunjukan seni tradisional</li>
                                    <li>Pameran kerajinan lokal</li>
                                </ul>
                            </div> <!-- /.agenda-content -->
                        </div> <!-- /.agenda-card -->
                    </div> <!-- /.agenda-wrapper -->
                </div> <!-- /.col-lg-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.agenda-inner-page -->
@endsection

<style>
    .agenda-wrapper {
        margin-top: 30px;
    }

    .agenda-card {
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .agenda-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .title {
        font-size: 1.6rem;
        color: #2c3e50;
        margin-bottom: 15px;
        position: relative;
        padding-bottom: 10px;
    }

    .title::after {
        content: '';
        display: block;
        width: 50px;
        height: 3px;
        background: #3498db;
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .agenda-content p {
        line-height: 1.7;
        color: #555;
        margin-bottom: 10px;
    }

    .agenda-content ul {
        margin: 10px 0;
        padding-left: 20px;
        list-style-type: disc;
    }

    .agenda-content li {
        margin: 5px 0;
        color: #333;
    }

    .agenda-content strong {
        color: #2c3e50;
    }
</style>

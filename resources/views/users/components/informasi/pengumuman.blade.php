@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Pengumuman</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="announcement-inner-page section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="announcement-wrapper">
                        <div class="announcement-card">
                            <h5 class="title">📢 Pengumuman Penting</h5>
                            <div class="announcement-content">
                                <p>Kami mengundang semua warga Desa Leuwiliang untuk menghadiri rapat desa yang akan
                                    dilaksanakan pada:</p>
                                <ul>
                                    <li><strong>Tanggal:</strong> 15 Oktober 2024</li>
                                    <li><strong>Waktu:</strong> 10.00 WIB</li>
                                    <li><strong>Tempat:</strong> Balai Desa Leuwiliang</li>
                                </ul>
                                <p>Agenda rapat meliputi pembahasan program pengembangan desa dan kegiatan sosial. Kehadiran
                                    Anda sangat diharapkan untuk mendukung kemajuan desa kita.</p>
                            </div> <!-- /.announcement-content -->
                        </div> <!-- /.announcement-card -->

                        <div class="announcement-card">
                            <h5 class="title">🌱 Program Pelatihan Keterampilan</h5>
                            <div class="announcement-content">
                                <p>Dalam rangka meningkatkan keterampilan masyarakat, kami akan menyelenggarakan program
                                    pelatihan keterampilan pertanian dan kerajinan tangan. Jadwal pelatihan sebagai berikut:
                                </p>
                                <ul>
                                    <li><strong>Tanggal:</strong> 20-22 Oktober 2024</li>
                                    <li><strong>Waktu:</strong> 09.00 WIB - 15.00 WIB</li>
                                    <li><strong>Tempat:</strong> Aula Desa Leuwiliang</li>
                                </ul>
                                <p>Silakan mendaftar di kantor desa sebelum tanggal 18 Oktober 2024.</p>
                            </div> <!-- /.announcement-content -->
                        </div> <!-- /.announcement-card -->
                    </div> <!-- /.announcement-wrapper -->
                </div> <!-- /.col-lg-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.announcement-inner-page -->
@endsection

<style>
    .announcement-card {
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

    .announcement-card:hover {
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
        background: #2ecc71;
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .announcement-content p {
        line-height: 1.7;
        color: #555;
        margin-bottom: 10px;
    }

    .announcement-content ul {
        margin: 10px 0;
        padding-left: 20px;
        list-style-type: disc;
    }

    .announcement-content li {
        margin: 5px 0;
        color: #333;
    }

    .announcement-content strong {
        color: #2c3e50;
    }
</style>

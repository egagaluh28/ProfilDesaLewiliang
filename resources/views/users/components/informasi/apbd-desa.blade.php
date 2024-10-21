@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>APBD Desa</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="apbd-page section-spacing">
        <div class="container">
            <h3 class="text-center mb-4">Rincian Anggaran Pendapatan dan Belanja Desa</h3>
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian</th>
                            <th>Anggaran (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pembangunan Jalan</td>
                            <td class="text-right">50.000.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pendidikan</td>
                            <td class="text-right">30.000.000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kesehatan</td>
                            <td class="text-right">20.000.000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Pengembangan Usaha</td>
                            <td class="text-right">15.000.000</td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- /.table-responsive -->
        </div> <!-- /.container -->
    </div> <!-- /.apbd-page -->
@endsection

<style>
    .apbd-page {
        background-color: #f8f9fa;
        padding: 40px 0;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .table-custom {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    .table-custom th,
    .table-custom td {
        padding: 12px;
        text-align: left;
        border: 1px solid #dee2e6;
    }

    .table-custom th {
        background-color: #388e3c;
        color: white;
        font-weight: bold;
    }

    .table-custom tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-custom tbody tr:hover {
        background-color: #e9ecef;
        cursor: pointer;
    }

    h2 {
        font-size: 2.5rem;
        font-weight: 600;
        color: #343a40;
    }

    h3 {
        font-size: 2rem;
        font-weight: 500;
        color: #495057;
    }
</style>

@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Buat Sejarah Desa Baru</h1>

        <form action="{{ route('admin.dashboard.profil.store-sejarah') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul Sejarah Desa</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="form-group">
                <label for="konten">Konten Sejarah Desa</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

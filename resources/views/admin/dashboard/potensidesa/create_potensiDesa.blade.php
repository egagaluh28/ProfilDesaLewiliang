@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Buat Potensi Desa Baru</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.dashboard.potensi.store_potensiDesa') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar (Opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.dashboard.potensi.potensiDesa') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

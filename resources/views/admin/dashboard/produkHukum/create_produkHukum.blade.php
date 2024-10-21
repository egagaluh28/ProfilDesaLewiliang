@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>produk hukum Desa Baru</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.dashboard.produkHukum.store_produkHukum') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.dashboard.produkHukum.produkHukum') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

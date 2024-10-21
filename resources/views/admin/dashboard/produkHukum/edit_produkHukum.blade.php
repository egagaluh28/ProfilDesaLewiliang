@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Edit produk hukum</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.dashboard.produkHukum.update_produkHukum', $produkHukum->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $produkHukum->judul }}"
                    required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ $produkHukum->deskripsi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.dashboard.produkHukum.produkHukum') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

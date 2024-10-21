@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Edit Potensi Desa</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.dashboard.potensi.update_potensiDesa', $potensiDesa->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $potensiDesa->judul }}"
                    required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ $potensiDesa->deskripsi }}</textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar (Opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                @if ($potensiDesa->gambar)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $potensiDesa->gambar) }}" alt="{{ $potensiDesa->judul }}"
                            width="100">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.dashboard.potensi.potensiDesa') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

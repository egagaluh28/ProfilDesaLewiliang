@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Edit Sejarah Desa</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.dashboard.profil.update-sejarah', $sejarahDesa->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul Sejarah Desa</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $sejarahDesa->judul }}"
                    required>
            </div>

            <div class="form-group">
                <label for="konten">Konten Sejarah Desa</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ $sejarahDesa->konten }}</textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                @if ($sejarahDesa->gambar)
                    <div>
                        <img src="{{ asset('storage/' . $sejarahDesa->gambar) }}" alt="Gambar Sejarah" width="200px">
                    </div>
                @endif
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

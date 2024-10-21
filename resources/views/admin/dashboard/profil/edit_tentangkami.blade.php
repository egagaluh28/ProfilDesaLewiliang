@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Tentang Kami</h1>

        <form action="{{ route('tentangkami.update', $tentangKami->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $tentangKami->judul) }}"
                    class="form-control" placeholder="Masukkan judul" required>
            </div>

            <div class="form-group mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" placeholder="Masukkan deskripsi" required>{{ old('deskripsi', $tentangKami->deskripsi) }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="gambar" class="form-label">Gambar (Opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
                @if ($tentangKami->gambar)
                    <div class="mt-3">
                        <img src="{{ asset('storage/' . $tentangKami->gambar) }}" alt="Gambar" class="img-thumbnail"
                            width="200">
                    </div>
                @endif
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('tentangkami.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection

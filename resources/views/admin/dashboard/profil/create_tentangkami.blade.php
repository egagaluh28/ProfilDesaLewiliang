@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Data Tentang Kami</h1>

        <form action="{{ route('tentangkami.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul"
                    required>
            </div>

            <div class="form-group mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" placeholder="Masukkan deskripsi" required></textarea>
            </div>
            
            <div class="form-group mb-3">
                <label for="gambar">Upload Gambar</label>
                <input type="file" name="gambar" class="form-control-file" id="gambar">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('tentangkami.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection

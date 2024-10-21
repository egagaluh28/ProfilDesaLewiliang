@extends('admin.layouts.layout-dashboard')

@section('content')
    <!-- Menampilkan Pesan Sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div style="margin-top: 5rem">
        <!-- Tombol untuk menambah data -->
        <a href="{{ route('tentangkami.create') }}" class="btn btn-primary mb-3">Tambah Tentang Kami</a>
    </div>
    <!-- Tabel Data Tentang Kami -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tentangKami as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ Str::limit($data->deskripsi, 50) }}</td>
                    <td>
                        @if ($data->gambar)
                            <img src="{{ asset('storage/' . $data->gambar) }}" alt="Gambar" width="100">
                        @else
                            <span>Gambar tidak tersedia</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tentangkami.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tentangkami.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form untuk Tambah Data -->
    @if (request()->routeIs('tentangkami.create'))
        <h3>Tambah Data Tentang Kami</h3>
        <form action="{{ route('tentangkami.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    @endif

    <!-- Form untuk Edit Data -->
    @if (request()->routeIs('tentangkami.edit'))
        <h3>Edit Data Tentang Kami</h3>
        <form action="{{ route('tentangkami.update', $tentangKami->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $tentangKami->judul }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required>{{ $tentangKami->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control">
                @if ($tentangKami->gambar)
                    <img src="{{ asset('storage/' . $tentangKami->gambar) }}" alt="Gambar" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    @endif
@endsection

@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Daftar Sejarah Desa</h1>

        <a href="{{ route('admin.dashboard.profil.create-sejarah') }}" class="btn btn-primary mb-3">Buat Sejarah Desa Baru</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sejarahDesa as $sejarah)
                    <tr>
                        <td>{{ $sejarah->id }}</td>
                        <td>{{ $sejarah->judul }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($sejarah->konten, 100) }}</td>
                        <td>
                            @if ($sejarah->gambar)
                                <img src="{{ asset('storage/' . $sejarah->gambar) }}" alt="" width="100px">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.dashboard.profil.edit-sejarah', $sejarah->id) }}"
                                class="btn btn-warning">Edit</a>

                            <form action="{{ route('admin.dashboard.profil.destroy-sejarah', $sejarah->id) }}"
                                method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

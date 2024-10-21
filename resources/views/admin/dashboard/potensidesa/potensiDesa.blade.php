@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Potensi Desa</h1>

        <a href="{{ route('admin.dashboard.potensi.create_potensiDesa') }}" class="btn btn-primary mb-3">Buat Potensi Desa Baru</a>

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
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($potensiDesa as $potensi)
                    <tr>
                        <td>{{ $potensi->id }}</td>
                        <td>{{ $potensi->judul }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($potensi->deskripsi, 100) }}</td>
                        <td>
                            @if ($potensi->gambar)
                                <img src="{{ asset('storage/' . $potensi->gambar) }}" alt="" width="100px">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.dashboard.potensi.edit_potensiDesa', $potensi->id) }}"
                                class="btn btn-warning">Edit</a>

                            <form action="{{ route('admin.dashboard.potensi.destroy_potensiDesa', $potensi->id) }}" method="POST"
                                style="display:inline-block;">
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

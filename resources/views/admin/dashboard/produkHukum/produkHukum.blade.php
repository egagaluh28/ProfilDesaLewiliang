@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Produk Hukum</h1>

        <a href="{{ route('admin.dashboard.produkHukum.create_produkHukum') }}" class="btn btn-primary mb-3">Buat Produk Hukum Baru</a>

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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produkHukum as $pm)
                    <tr>
                        <td>{{ $pm->id }}</td>
                        <td>{{ $pm->judul }}</td>
                        <td>{{ $pm->deskripsi }}</td>
                        <td>
                            <a href="{{ route('admin.dashboard.produkHukum.edit_produkHukum', $pm->id) }}"
                                class="btn btn-warning">Edit</a>

                            <form action="{{ route('admin.dashboard.produkHukum.destroy_produkHukum', $pm->id) }}"
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

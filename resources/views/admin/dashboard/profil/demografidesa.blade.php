@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Demografi Desa</h1>

        <a href="{{ route('admin.dashboard.profil.create-demografi') }}" class="btn btn-primary mb-3">Buat Dm Desa Baru</a>

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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($demografi as $dm)
                    <tr>
                        <td>{{ $dm->id }}</td>
                        <td>{{ $dm->judul }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($dm->konten, 100) }}</td>
                        <td>
                            <a href="{{ route('admin.dashboard.profil.edit-demografi', $dm->id) }}"
                                class="btn btn-warning">Edit</a>

                            <form action="{{ route('admin.dashboard.profil.destroy-demografi', $dm->id) }}"
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

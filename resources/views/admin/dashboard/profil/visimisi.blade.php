@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Visi dan Misi</h1>

        <a href="{{ route('dashboard.profil.visimisi.create') }}" class="btn btn-primary mb-3">Tambah Visi Misi</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Gambar Visi</th>
                    <th>Gambar Misi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visiMisi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->visi }}</td>
                        <td>{{ $item->misi }}</td>
                        <td>
                            @if ($item->gambar_visi)
                                <img src="{{ asset('storage/' . $item->gambar_visi) }}" alt="Gambar Visi" width="100">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td>
                            @if ($item->gambar_misi)
                                <img src="{{ asset('storage/' . $item->gambar_misi) }}" alt="Gambar Misi" width="100">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        {{-- <td>
                            @if ($potensi->gambar)
                                <img src="{{ asset('storage/' . $potensi->gambar) }}" alt="" width="100px">
                            @else
                                Tidak ada gambar
                            @endif
                        </td> --}}
                        <td>
                            <a href="{{ route('dashboard.profil.visimisi.edit', $item->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('dashboard.profil.visimisi.destroy', $item->id) }}" method="POST"
                                style="display:inline-block;">
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
    </div>
@endsection

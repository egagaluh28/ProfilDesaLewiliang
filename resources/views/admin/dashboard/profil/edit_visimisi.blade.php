@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Edit Visi dan Misi</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.profil.visimisi.update', $visiMisi->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="visi">Visi</label>
                <input type="text" class="form-control" id="visi" name="visi"
                    value="{{ old('visi', $visiMisi->visi) }}">
            </div>
            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea class="form-control" id="misi" name="misi">{{ old('misi', $visiMisi->misi) }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar_visi">Gambar Visi</label>
                <input type="file" class="form-control-file" id="gambar_visi" name="gambar_visi">
                @if ($visiMisi->gambar_visi)
                    <img src="{{ asset('storage/' . $visiMisi->gambar_visi) }}" alt="Gambar Visi" width="100">
                @endif
            </div>
            <div class="form-group">
                <label for="gambar_misi">Gambar Misi</label>
                <input type="file" class="form-control-file" id="gambar_misi" name="gambar_misi">
                @if ($visiMisi->gambar_misi)
                    <img src="{{ asset('storage/' . $visiMisi->gambar_misi) }}" alt="Gambar Misi" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

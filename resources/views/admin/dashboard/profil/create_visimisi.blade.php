@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Tambah Visi dan Misi</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.profil.visimisi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="visi">Visi</label>
                <input type="text" class="form-control" id="visi" name="visi" value="{{ old('visi') }}">
            </div>
            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea class="form-control" id="misi" name="misi">{{ old('misi') }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar_visi">Gambar Visi</label>
                <input type="file" class="form-control-file" id="gambar_visi" name="gambar_visi">
            </div>
            <div class="form-group">
                <label for="gambar_misi">Gambar Misi</label>
                <input type="file" class="form-control-file" id="gambar_misi" name="gambar_misi">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

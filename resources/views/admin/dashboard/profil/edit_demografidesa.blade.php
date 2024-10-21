@extends('admin.layouts.layout-dashboard')

@section('content')
    <div class="container">
        <h1>Edit Demografi Desa</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.dashboard.profil.update-demografi', $demografi->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul Demografi Desa</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $demografi->judul }}"
                    required>
            </div>

            <div class="form-group">
                <label for="konten">Konten Demografi Desa</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ $demografi->konten }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

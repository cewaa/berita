@extends('layout')

@section('content')
    <h1>Edit Berita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('berita.update', $berita->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" value="{{ $berita->judul }}" class="form-control" placeholder="Masukkan judul berita">
        </div>

        <div class="form-group">
            <label for="konten">Konten:</label>
            <textarea class="form-control" name="konten" placeholder="Masukkan konten berita">{{ $berita->konten }}</textarea>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" value="{{ $berita->penulis }}" class="form-control" placeholder="Masukkan nama penulis">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a class="btn btn-secondary" href="{{ route('berita.index') }}">Kembali</a>
    </form>
@endsection

@extends('layout')

@section('content')
    <h1>{{ $berita->judul }}</h1>

    <div class="card">
        <div class="card-header">
            <h2>Ditulis oleh: {{ $berita->penulis }}</h2>
            <p><strong>Tanggal:</strong> {{ $berita->created_at->format('d-m-Y') }}</p>
        </div>
        <div class="card-body">
            <p>{{ $berita->konten }}</p> <!-- Pastikan konten berita tampil di sini -->
        </div>
    </div>

    <a class="btn btn-secondary" href="{{ route('berita.index') }}">Kembali</a>
@endsection
